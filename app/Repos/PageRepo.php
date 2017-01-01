<?php namespace BookStack\Repos;

use Activity;
use BookStack\Book;
use BookStack\Chapter;
use BookStack\Entity;
use BookStack\Exceptions\NotFoundException;
use BookStack\Services\AttachmentService;
use Carbon\Carbon;
use DOMDocument;
use DOMXPath;
use Illuminate\Support\Str;
use BookStack\Page;
use BookStack\PageRevision;

class PageRepo extends EntityRepo
{

    protected $pageRevision;
    protected $tagRepo;

    /**
     * PageRepo constructor.
     * @param PageRevision $pageRevision
     * @param TagRepo $tagRepo
     */
    public function __construct(PageRevision $pageRevision, TagRepo $tagRepo)
    {
        $this->pageRevision = $pageRevision;
        $this->tagRepo = $tagRepo;
        parent::__construct();
    }

    /**
     * Base query for getting pages, Takes restrictions into account.
     * @param bool $allowDrafts
     * @return mixed
     */
    private function pageQuery($allowDrafts = false)
    {
        $query = $this->permissionService->enforcePageRestrictions($this->page, 'view');
        if (!$allowDrafts) {
            $query = $query->where('draft', '=', false);
        }
        return $query;
    }

    /**
     * Search through page revisions and retrieve
     * the last page in the current book that
     * has a slug equal to the one given.
     * @param $pageSlug
     * @param $bookSlug
     * @return null | Page
     */
    public function findPageUsingOldSlug($pageSlug, $bookSlug)
    {
        $revision = $this->pageRevision->where('slug', '=', $pageSlug)
            ->whereHas('page', function ($query) {
                $this->permissionService->enforcePageRestrictions($query);
            })
            ->where('type', '=', 'version')
            ->where('book_slug', '=', $bookSlug)->orderBy('created_at', 'desc')
            ->with('page')->first();
        return $revision !== null ? $revision->page : null;
    }

    /**
     * Count the pages with a particular slug within a book.
     * @param $slug
     * @param $bookId
     * @return mixed
     */
    public function countBySlug($slug, $bookId)
    {
        return $this->page->where('slug', '=', $slug)->where('book_id', '=', $bookId)->count();
    }

    /**
     * Publish a draft page to make it a normal page.
     * Sets the slug and updates the content.
     * @param Page $draftPage
     * @param array $input
     * @return Page
     */
    public function publishDraft(Page $draftPage, array $input)
    {
        $draftPage->fill($input);

        // Save page tags if present
        if (isset($input['tags'])) {
            $this->tagRepo->saveTagsToEntity($draftPage, $input['tags']);
        }

        $draftPage->slug = $this->findSuitableSlug('page', $draftPage->name, false, $draftPage->book->id);
        $draftPage->html = $this->formatHtml($input['html']);
        $draftPage->text = strip_tags($draftPage->html);
        $draftPage->draft = false;

        $draftPage->save();
        $this->saveRevision($draftPage, trans('entities.pages_initial_revision'));
        
        return $draftPage;
    }

    /**
     * Get a new draft page instance.
     * @param Book $book
     * @param Chapter|bool $chapter
     * @return Page
     */
    public function getDraftPage(Book $book, $chapter = false)
    {
        $page = $this->page->newInstance();
        $page->name = trans('entities.pages_initial_name');
        $page->created_by = user()->id;
        $page->updated_by = user()->id;
        $page->draft = true;

        if ($chapter) $page->chapter_id = $chapter->id;

        $book->pages()->save($page);
        $this->permissionService->buildJointPermissionsForEntity($page);
        return $page;
    }

    /**
     * Parse te headers on the page to get a navigation menu
     * @param Page $page
     * @return array
     */
    public function getPageNav(Page $page)
    {
        if ($page->html == '') return null;
        libxml_use_internal_errors(true);
        $doc = new DOMDocument();
        $doc->loadHTML(mb_convert_encoding($page->html, 'HTML-ENTITIES', 'UTF-8'));
        $xPath = new DOMXPath($doc);
        $headers = $xPath->query("//h1|//h2|//h3|//h4|//h5|//h6");

        if (is_null($headers)) return null;

        $tree = [];
        foreach ($headers as $header) {
            $text = $header->nodeValue;
            $tree[] = [
                'nodeName' => strtolower($header->nodeName),
                'level' => intval(str_replace('h', '', $header->nodeName)),
                'link' => '#' . $header->getAttribute('id'),
                'text' => strlen($text) > 30 ? substr($text, 0, 27) . '...' : $text
            ];
        }
        return $tree;
    }

    /**
     * Formats a page's html to be tagged correctly
     * within the system.
     * @param string $htmlText
     * @return string
     */
    protected function formatHtml($htmlText)
    {
        if ($htmlText == '') return $htmlText;
        libxml_use_internal_errors(true);
        $doc = new DOMDocument();
        $doc->loadHTML(mb_convert_encoding($htmlText, 'HTML-ENTITIES', 'UTF-8'));

        $container = $doc->documentElement;
        $body = $container->childNodes->item(0);
        $childNodes = $body->childNodes;

        // Ensure no duplicate ids are used
        $idArray = [];

        foreach ($childNodes as $index => $childNode) {
            /** @var \DOMElement $childNode */
            if (get_class($childNode) !== 'DOMElement') continue;

            // Overwrite id if not a BookStack custom id
            if ($childNode->hasAttribute('id')) {
                $id = $childNode->getAttribute('id');
                if (strpos($id, 'bkmrk') === 0 && array_search($id, $idArray) === false) {
                    $idArray[] = $id;
                    continue;
                };
            }

            // Create an unique id for the element
            // Uses the content as a basis to ensure output is the same every time
            // the same content is passed through.
            $contentId = 'bkmrk-' . substr(strtolower(preg_replace('/\s+/', '-', trim($childNode->nodeValue))), 0, 20);
            $newId = urlencode($contentId);
            $loopIndex = 0;
            while (in_array($newId, $idArray)) {
                $newId = urlencode($contentId . '-' . $loopIndex);
                $loopIndex++;
            }

            $childNode->setAttribute('id', $newId);
            $idArray[] = $newId;
        }

        // Generate inner html as a string
        $html = '';
        foreach ($childNodes as $childNode) {
            $html .= $doc->saveHTML($childNode);
        }

        return $html;
    }


    /**
     * Search for image usage.
     * @param $imageString
     * @return mixed
     */
    public function searchForImage($imageString)
    {
        $pages = $this->pageQuery()->where('html', 'like', '%' . $imageString . '%')->get();
        foreach ($pages as $page) {
            $page->url = $page->getUrl();
            $page->html = '';
            $page->text = '';
        }
        return count($pages) > 0 ? $pages : false;
    }

    /**
     * Updates a page with any fillable data and saves it into the database.
     * @param Page $page
     * @param int $book_id
     * @param string $input
     * @return Page
     */
    public function updatePage(Page $page, $book_id, $input)
    {
        // Hold the old details to compare later
        $oldHtml = $page->html;
        $oldName = $page->name;

        // Prevent slug being updated if no name change
        if ($page->name !== $input['name']) {
            $page->slug = $this->findSuitableSlug('page', $input['name'], $page->id, $book_id);
        }

        // Save page tags if present
        if (isset($input['tags'])) {
            $this->tagRepo->saveTagsToEntity($page, $input['tags']);
        }

        // Update with new details
        $userId = user()->id;
        $page->fill($input);
        $page->html = $this->formatHtml($input['html']);
        $page->text = strip_tags($page->html);
        if (setting('app-editor') !== 'markdown') $page->markdown = '';
        $page->updated_by = $userId;
        $page->save();

        // Remove all update drafts for this user & page.
        $this->userUpdateDraftsQuery($page, $userId)->delete();

        // Save a revision after updating
        if ($oldHtml !== $input['html'] || $oldName !== $input['name'] || $input['summary'] !== null) {
            $this->saveRevision($page, $input['summary']);
        }

        return $page;
    }

    /**
     * Restores a revision's content back into a page.
     * @param Page $page
     * @param Book $book
     * @param  int $revisionId
     * @return Page
     */
    public function restoreRevision(Page $page, Book $book, $revisionId)
    {
        $this->saveRevision($page);
        $revision = $this->getRevisionById($revisionId);
        $page->fill($revision->toArray());
        $page->slug = $this->findSuitableSlug('page', $page->name, $page->id, $book->id);
        $page->text = strip_tags($page->html);
        $page->updated_by = user()->id;
        $page->save();
        return $page;
    }

    /**
     * Saves a page revision into the system.
     * @param Page $page
     * @param null|string $summary
     * @return $this
     */
    public function saveRevision(Page $page, $summary = null)
    {
        $revision = $this->pageRevision->newInstance($page->toArray());
        if (setting('app-editor') !== 'markdown') $revision->markdown = '';
        $revision->page_id = $page->id;
        $revision->slug = $page->slug;
        $revision->book_slug = $page->book->slug;
        $revision->created_by = user()->id;
        $revision->created_at = $page->updated_at;
        $revision->type = 'version';
        $revision->summary = $summary;
        $revision->save();

        // Clear old revisions
        if ($this->pageRevision->where('page_id', '=', $page->id)->count() > 50) {
            $this->pageRevision->where('page_id', '=', $page->id)
                ->orderBy('created_at', 'desc')->skip(50)->take(5)->delete();
        }

        return $revision;
    }

    /**
     * Save a page update draft.
     * @param Page $page
     * @param array $data
     * @return PageRevision
     */
    public function saveUpdateDraft(Page $page, $data = [])
    {
        $userId = user()->id;
        $drafts = $this->userUpdateDraftsQuery($page, $userId)->get();

        if ($drafts->count() > 0) {
            $draft = $drafts->first();
        } else {
            $draft = $this->pageRevision->newInstance();
            $draft->page_id = $page->id;
            $draft->slug = $page->slug;
            $draft->book_slug = $page->book->slug;
            $draft->created_by = $userId;
            $draft->type = 'update_draft';
        }

        $draft->fill($data);
        if (setting('app-editor') !== 'markdown') $draft->markdown = '';

        $draft->save();
        return $draft;
    }

    /**
     * Update a draft page.
     * @param Page $page
     * @param array $data
     * @return Page
     */
    public function updateDraftPage(Page $page, $data = [])
    {
        $page->fill($data);

        if (isset($data['html'])) {
            $page->text = strip_tags($data['html']);
        }

        $page->save();
        return $page;
    }

    /**
     * The base query for getting user update drafts.
     * @param Page $page
     * @param $userId
     * @return mixed
     */
    private function userUpdateDraftsQuery(Page $page, $userId)
    {
        return $this->pageRevision->where('created_by', '=', $userId)
            ->where('type', 'update_draft')
            ->where('page_id', '=', $page->id)
            ->orderBy('created_at', 'desc');
    }

    /**
     * Checks whether a user has a draft version of a particular page or not.
     * @param Page $page
     * @param $userId
     * @return bool
     */
    public function hasUserGotPageDraft(Page $page, $userId)
    {
        return $this->userUpdateDraftsQuery($page, $userId)->count() > 0;
    }

    /**
     * Get the latest updated draft revision for a particular page and user.
     * @param Page $page
     * @param $userId
     * @return mixed
     */
    public function getUserPageDraft(Page $page, $userId)
    {
        return $this->userUpdateDraftsQuery($page, $userId)->first();
    }

    /**
     * Get the notification message that informs the user that they are editing a draft page.
     * @param PageRevision $draft
     * @return string
     */
    public function getUserPageDraftMessage(PageRevision $draft)
    {
        $message = trans('entities.pages_editing_draft_notification', ['timeDiff' => $draft->updated_at->diffForHumans()]);
        if ($draft->page->updated_at->timestamp <= $draft->updated_at->timestamp) return $message;
        return $message . "\n" . trans('entities.pages_draft_edited_notification');
    }

    /**
     * Check if a page is being actively editing.
     * Checks for edits since last page updated.
     * Passing in a minuted range will check for edits
     * within the last x minutes.
     * @param Page $page
     * @param null $minRange
     * @return bool
     */
    public function isPageEditingActive(Page $page, $minRange = null)
    {
        $draftSearch = $this->activePageEditingQuery($page, $minRange);
        return $draftSearch->count() > 0;
    }

    /**
     * Get a notification message concerning the editing activity on
     * a particular page.
     * @param Page $page
     * @param null $minRange
     * @return string
     */
    public function getPageEditingActiveMessage(Page $page, $minRange = null)
    {
        $pageDraftEdits = $this->activePageEditingQuery($page, $minRange)->get();

        $userMessage = $pageDraftEdits->count() > 1 ? trans('entities.pages_draft_edit_active.start_a', ['count' => $pageDraftEdits->count()]): trans('entities.pages_draft_edit_active.start_b', ['userName' => $pageDraftEdits->first()->createdBy->name]);
        $timeMessage = $minRange === null ? trans('entities.pages_draft_edit_active.time_a') : trans('entities.pages_draft_edit_active.time_b', ['minCount'=>$minRange]);
        return trans('entities.pages_draft_edit_active.message', ['start' => $userMessage, 'time' => $timeMessage]);
    }

    /**
     * A query to check for active update drafts on a particular page.
     * @param Page $page
     * @param null $minRange
     * @return mixed
     */
    private function activePageEditingQuery(Page $page, $minRange = null)
    {
        $query = $this->pageRevision->where('type', '=', 'update_draft')
            ->where('page_id', '=', $page->id)
            ->where('updated_at', '>', $page->updated_at)
            ->where('created_by', '!=', user()->id)
            ->with('createdBy');

        if ($minRange !== null) {
            $query = $query->where('updated_at', '>=', Carbon::now()->subMinutes($minRange));
        }

        return $query;
    }

    /**
     * Gets a single revision via it's id.
     * @param $id
     * @return PageRevision
     */
    public function getRevisionById($id)
    {
        return $this->pageRevision->findOrFail($id);
    }

    /**
     * Changes the related book for the specified page.
     * Changes the book id of any relations to the page that store the book id.
     * @param int $bookId
     * @param Page $page
     * @return Page
     */
    public function changeBook($bookId, Page $page)
    {
        $page->book_id = $bookId;
        foreach ($page->activity as $activity) {
            $activity->book_id = $bookId;
            $activity->save();
        }
        $page->slug = $this->findSuitableSlug('page', $page->name, $page->id, $bookId);
        $page->save();
        return $page;
    }


    /**
     * Change the page's parent to the given entity.
     * @param Page $page
     * @param Entity $parent
     */
    public function changePageParent(Page $page, Entity $parent)
    {
        $book = $parent->isA('book') ? $parent : $parent->book;
        $page->chapter_id = $parent->isA('chapter') ? $parent->id : 0;
        $page->save();
        $page = $this->changeBook($book->id, $page);
        $page->load('book');
        $this->permissionService->buildJointPermissionsForEntity($book);
    }

    /**
     * Destroy a given page along with its dependencies.
     * @param $page
     */
    public function destroy(Page $page)
    {
        Activity::removeEntity($page);
        $page->views()->delete();
        $page->tags()->delete();
        $page->revisions()->delete();
        $page->permissions()->delete();
        $this->permissionService->deleteJointPermissionsForEntity($page);

        // Delete AttachedFiles
        $attachmentService = app(AttachmentService::class);
        foreach ($page->attachments as $attachment) {
            $attachmentService->deleteFile($attachment);
        }

        $page->delete();
    }

    /**
     * Get the latest pages added to the system.
     * @param $count
     * @return mixed
     */
    public function getRecentlyCreatedPaginated($count = 20)
    {
        return $this->pageQuery()->orderBy('created_at', 'desc')->paginate($count);
    }

    /**
     * Get the latest pages added to the system.
     * @param $count
     * @return mixed
     */
    public function getRecentlyUpdatedPaginated($count = 20)
    {
        return $this->pageQuery()->orderBy('updated_at', 'desc')->paginate($count);
    }

}
