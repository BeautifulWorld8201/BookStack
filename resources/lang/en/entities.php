<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Recently Created',
    'recently_created_pages' => 'Recently Created Pages',
    'recently_updated_pages' => 'Recently Updated Pages',
    'recently_created_chapters' => 'Recently Created Chapters',
    'recently_created_books' => 'Recently Created Books',
    'recently_created_shelves' => 'Recently Created Shelves',
    'recently_update' => 'Recently Updated',
    'recently_viewed' => 'Recently Viewed',
    'recent_activity' => 'Recent Activity',
    'create_now' => 'Create one now',
    'revisions' => 'Revisions',
    'meta_revision' => 'Revision #:revisionCount',
    'meta_created' => 'Created :timeLength',
    'meta_created_name' => 'Created :timeLength by :user',
    'meta_updated' => 'Updated :timeLength',
    'meta_updated_name' => 'Updated :timeLength by :user',
    'meta_owned_name' => 'Owned by :user',
    'meta_reference_page_count' => 'Referenced on 1 page|Referenced on :count pages',
    'entity_select' => 'Entity Select',
    'entity_select_lack_permission' => 'You don\'t have the required permissions to select this item',
    'images' => 'Images',
    'my_recent_drafts' => 'My Recent Drafts',
    'my_recently_viewed' => 'My Recently Viewed',
    'my_most_viewed_favourites' => 'My Most Viewed Favourites',
    'my_favourites' => 'My Favourites',
    'no_pages_viewed' => 'You have not viewed any pages',
    'no_pages_recently_created' => 'No pages have been recently created',
    'no_pages_recently_updated' => 'No pages have been recently updated',
    'export' => 'Export',
    'export_html' => 'Contained Web File',
    'export_pdf' => 'PDF File',
    'export_text' => 'Plain Text File',
    'export_md' => 'Markdown File',

    // Permissions and restrictions
    'permissions' => 'Permissions',
    'permissions_desc' => 'Set permissions here to override the default permissions provided by user roles.',
    'permissions_book_cascade' => 'Permissions set on books will automatically cascade to child chapters and pages, unless they have their own permissions defined.',
    'permissions_chapter_cascade' => 'Permissions set on chapters will automatically cascade to child pages, unless they have their own permissions defined.',
    'permissions_save' => 'Save Permissions',
    'permissions_owner' => 'Owner',
    'permissions_role_everyone_else' => 'Everyone Else',
    'permissions_role_everyone_else_desc' => 'Set permissions for all roles not specifically overridden.',
    'permissions_role_override' => 'Override permissions for role',
    'permissions_inherit_defaults' => 'Inherit defaults',

    // Search
    'search_results' => 'Search Results',
    'search_total_results_found' => ':count result found|:count total results found',
    'search_clear' => 'Clear Search',
    'search_no_pages' => 'No pages matched this search',
    'search_for_term' => 'Search for :term',
    'search_more' => 'More Results',
    'search_advanced' => 'Advanced Search',
    'search_terms' => 'Search Terms',
    'search_content_type' => 'Content Type',
    'search_exact_matches' => 'Exact Matches',
    'search_tags' => 'Tag Searches',
    'search_options' => 'Options',
    'search_viewed_by_me' => 'Viewed by me',
    'search_not_viewed_by_me' => 'Not viewed by me',
    'search_permissions_set' => 'Permissions set',
    'search_created_by_me' => 'Created by me',
    'search_updated_by_me' => 'Updated by me',
    'search_owned_by_me' => 'Owned by me',
    'search_date_options' => 'Date Options',
    'search_updated_before' => 'Updated before',
    'search_updated_after' => 'Updated after',
    'search_created_before' => 'Created before',
    'search_created_after' => 'Created after',
    'search_set_date' => 'Set Date',
    'search_update' => 'Update Search',

    // Shelves
    'shelf' => 'Shelf',
    'shelves' => 'Shelves',
    'x_shelves' => ':count Shelf|:count Shelves',
    'shelves_empty' => 'No shelves have been created',
    'shelves_create' => 'Create New Shelf',
    'shelves_popular' => 'Popular Shelves',
    'shelves_new' => 'New Shelves',
    'shelves_new_action' => 'New Shelf',
    'shelves_popular_empty' => 'The most popular shelves will appear here.',
    'shelves_new_empty' => 'The most recently created shelves will appear here.',
    'shelves_save' => 'Save Shelf',
    'shelves_books' => 'Books on this shelf',
    'shelves_add_books' => 'Add books to this shelf',
    'shelves_drag_books' => 'Drag books below to add them to this shelf',
    'shelves_empty_contents' => 'This shelf has no books assigned to it',
    'shelves_edit_and_assign' => 'Edit shelf to assign books',
    'shelves_edit_named' => 'Edit Shelf :name',
    'shelves_edit' => 'Edit Shelf',
    'shelves_delete' => 'Delete Shelf',
    'shelves_delete_named' => 'Delete Shelf :name',
    'shelves_delete_explain' => "This will delete the shelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Are you sure you want to delete this shelf?',
    'shelves_permissions' => 'Shelf Permissions',
    'shelves_permissions_updated' => 'Shelf Permissions Updated',
    'shelves_permissions_active' => 'Shelf Permissions Active',
    'shelves_permissions_cascade_warning' => 'Permissions on shelves do not automatically cascade to contained books. This is because a book can exist on multiple shelves. Permissions can however be copied down to child books using the option found below.',
    'shelves_copy_permissions_to_books' => 'Copy Permissions to Books',
    'shelves_copy_permissions' => 'Copy Permissions',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this shelf to all books contained within. Before activating, ensure any changes to the permissions of this shelf have been saved.',
    'shelves_copy_permission_success' => 'Shelf permissions copied to :count books',

    // Books
    'book' => 'Book',
    'books' => 'Books',
    'x_books' => ':count Book|:count Books',
    'books_empty' => 'No books have been created',
    'books_popular' => 'Popular Books',
    'books_recent' => 'Recent Books',
    'books_new' => 'New Books',
    'books_new_action' => 'New Book',
    'books_popular_empty' => 'The most popular books will appear here.',
    'books_new_empty' => 'The most recently created books will appear here.',
    'books_create' => 'Create New Book',
    'books_delete' => 'Delete Book',
    'books_delete_named' => 'Delete Book :bookName',
    'books_delete_explain' => 'This will delete the book with the name \':bookName\'. All pages and chapters will be removed.',
    'books_delete_confirmation' => 'Are you sure you want to delete this book?',
    'books_edit' => 'Edit Book',
    'books_edit_named' => 'Edit Book :bookName',
    'books_form_book_name' => 'Book Name',
    'books_save' => 'Save Book',
    'books_permissions' => 'Book Permissions',
    'books_permissions_updated' => 'Book Permissions Updated',
    'books_empty_contents' => 'No pages or chapters have been created for this book.',
    'books_empty_create_page' => 'Create a new page',
    'books_empty_sort_current_book' => 'Sort the current book',
    'books_empty_add_chapter' => 'Add a chapter',
    'books_permissions_active' => 'Book Permissions Active',
    'books_search_this' => 'Search this book',
    'books_navigation' => 'Book Navigation',
    'books_sort' => 'Sort Book Contents',
    'books_sort_desc' => 'Move chapters and pages within a book to reorganise its contents. Other books can be added which allows easy moving of chapters and pages between books.',
    'books_sort_named' => 'Sort Book :bookName',
    'books_sort_name' => 'Sort by Name',
    'books_sort_created' => 'Sort by Created Date',
    'books_sort_updated' => 'Sort by Updated Date',
    'books_sort_chapters_first' => 'Chapters First',
    'books_sort_chapters_last' => 'Chapters Last',
    'books_sort_show_other' => 'Show Other Books',
    'books_sort_show_other_desc' => 'Add other books here to include them in the sort operation, and allow easy cross-book reorganisation.',
    'books_sort_move_up' => 'Move Up',
    'books_sort_move_down' => 'Move Down',
    'books_sort_move_prev_book' => 'Move To Previous Book',
    'books_sort_move_next_book' => 'Move To Next Book',
    'books_sort_move_prev_chapter' => 'Move Into Previous Chapter',
    'books_sort_move_next_chapter' => 'Move Into Next Chapter',
    'books_sort_move_book_start' => 'Move To Start of Book',
    'books_sort_move_book_end' => 'Move To End of Book',
    'books_sort_move_before_chapter' => 'Move To Before Chapter',
    'books_sort_move_after_chapter' => 'Move To After Chapter',
    'books_copy' => 'Copy Book',
    'books_copy_success' => 'Book successfully copied',

    // Chapters
    'chapter' => 'Chapter',
    'chapters' => 'Chapters',
    'x_chapters' => ':count Chapter|:count Chapters',
    'chapters_popular' => 'Popular Chapters',
    'chapters_new' => 'New Chapter',
    'chapters_create' => 'Create New Chapter',
    'chapters_delete' => 'Delete Chapter',
    'chapters_delete_named' => 'Delete Chapter :chapterName',
    'chapters_delete_explain' => 'This will delete the chapter with the name \':chapterName\'. All pages that exist within this chapter will also be deleted.',
    'chapters_delete_confirm' => 'Are you sure you want to delete this chapter?',
    'chapters_edit' => 'Edit Chapter',
    'chapters_edit_named' => 'Edit Chapter :chapterName',
    'chapters_save' => 'Save Chapter',
    'chapters_move' => 'Move Chapter',
    'chapters_move_named' => 'Move Chapter :chapterName',
    'chapter_move_success' => 'Chapter moved to :bookName',
    'chapters_copy' => 'Copy Chapter',
    'chapters_copy_success' => 'Chapter successfully copied',
    'chapters_permissions' => 'Chapter Permissions',
    'chapters_empty' => 'No pages are currently in this chapter.',
    'chapters_permissions_active' => 'Chapter Permissions Active',
    'chapters_permissions_success' => 'Chapter Permissions Updated',
    'chapters_search_this' => 'Search this chapter',
    'chapter_sort_book' => 'Sort Book',

    // Pages
    'page' => 'Page',
    'pages' => 'Pages',
    'x_pages' => ':count Page|:count Pages',
    'pages_popular' => 'Popular Pages',
    'pages_new' => 'New Page',
    'pages_attachments' => 'Attachments',
    'pages_navigation' => 'Page Navigation',
    'pages_delete' => 'Delete Page',
    'pages_delete_named' => 'Delete Page :pageName',
    'pages_delete_draft_named' => 'Delete Draft Page :pageName',
    'pages_delete_draft' => 'Delete Draft Page',
    'pages_delete_success' => 'Page deleted',
    'pages_delete_draft_success' => 'Draft page deleted',
    'pages_delete_confirm' => 'Are you sure you want to delete this page?',
    'pages_delete_draft_confirm' => 'Are you sure you want to delete this draft page?',
    'pages_editing_named' => 'Editing Page :pageName',
    'pages_edit_draft_options' => 'Draft Options',
    'pages_edit_save_draft' => 'Save Draft',
    'pages_edit_draft' => 'Edit Page Draft',
    'pages_editing_draft' => 'Editing Draft',
    'pages_editing_page' => 'Editing Page',
    'pages_edit_draft_save_at' => 'Draft saved at ',
    'pages_edit_delete_draft' => 'Delete Draft',
    'pages_edit_discard_draft' => 'Discard Draft',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_set_changelog' => 'Set Changelog',
    'pages_edit_enter_changelog_desc' => 'Enter a brief description of the changes you\'ve made',
    'pages_edit_enter_changelog' => 'Enter Changelog',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'Save Page',
    'pages_title' => 'Page Title',
    'pages_name' => 'Page Name',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Preview',
    'pages_md_insert_image' => 'Insert Image',
    'pages_md_insert_link' => 'Insert Entity Link',
    'pages_md_insert_drawing' => 'Insert Drawing',
    'pages_md_show_preview' => 'Show preview',
    'pages_md_sync_scroll' => 'Sync preview scroll',
    'pages_not_in_chapter' => 'Page is not in a chapter',
    'pages_move' => 'Move Page',
    'pages_move_success' => 'Page moved to ":parentName"',
    'pages_copy' => 'Copy Page',
    'pages_copy_desination' => 'Copy Destination',
    'pages_copy_success' => 'Page successfully copied',
    'pages_permissions' => 'Page Permissions',
    'pages_permissions_success' => 'Page permissions updated',
    'pages_revision' => 'Revision',
    'pages_revisions' => 'Page Revisions',
    'pages_revisions_desc' => 'Listed below are all the past revisions of this page. You can look back upon, compare, and restore old page versions if permissions allow. The full history of the page may not be fully reflected here since, depending on system configuration, old revisions could be auto-deleted.',
    'pages_revisions_named' => 'Page Revisions for :pageName',
    'pages_revision_named' => 'Page Revision for :pageName',
    'pages_revision_restored_from' => 'Restored from #:id; :summary',
    'pages_revisions_created_by' => 'Created By',
    'pages_revisions_date' => 'Revision Date',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Revision Number',
    'pages_revisions_numbered' => 'Revision #:id',
    'pages_revisions_numbered_changes' => 'Revision #:id Changes',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'Changelog',
    'pages_revisions_changes' => 'Changes',
    'pages_revisions_current' => 'Current Version',
    'pages_revisions_preview' => 'Preview',
    'pages_revisions_restore' => 'Restore',
    'pages_revisions_none' => 'This page has no revisions',
    'pages_copy_link' => 'Copy Link',
    'pages_edit_content_link' => 'Edit Content',
    'pages_permissions_active' => 'Page Permissions Active',
    'pages_initial_revision' => 'Initial publish',
    'pages_references_update_revision' => 'System auto-update of internal links',
    'pages_initial_name' => 'New Page',
    'pages_editing_draft_notification' => 'You are currently editing a draft that was last saved :timeDiff.',
    'pages_draft_edited_notification' => 'This page has been updated by since that time. It is recommended that you discard this draft.',
    'pages_draft_page_changed_since_creation' => 'This page has been updated since this draft was created. It is recommended that you discard this draft or take care not to overwrite any page changes.',
    'pages_draft_edit_active' => [
        'start_a' => ':count users have started editing this page',
        'start_b' => ':userName has started editing this page',
        'time_a' => 'since the page was last updated',
        'time_b' => 'in the last :minCount minutes',
        'message' => ':start :time. Take care not to overwrite each other\'s updates!',
    ],
    'pages_draft_discarded' => 'Draft discarded, The editor has been updated with the current page content',
    'pages_specific' => 'Specific Page',
    'pages_is_template' => 'Page Template',

    // Editor Sidebar
    'page_tags' => 'Page Tags',
    'chapter_tags' => 'Chapter Tags',
    'book_tags' => 'Book Tags',
    'shelf_tags' => 'Shelf Tags',
    'tag' => 'Tag',
    'tags' =>  'Tags',
    'tags_index_desc' => 'Tags can be applied to content within the system to apply a flexible form of categorization. Tags can have both a key and value, with the value being optional. Once applied, content can then be queried using the tag name and value.',
    'tag_name' =>  'Tag Name',
    'tag_value' => 'Tag Value (Optional)',
    'tags_explain' => "Add some tags to better categorise your content. \n You can assign a value to a tag for more in-depth organisation.",
    'tags_add' => 'Add another tag',
    'tags_remove' => 'Remove this tag',
    'tags_usages' => 'Total tag usages',
    'tags_assigned_pages' => 'Assigned to Pages',
    'tags_assigned_chapters' => 'Assigned to Chapters',
    'tags_assigned_books' => 'Assigned to Books',
    'tags_assigned_shelves' => 'Assigned to Shelves',
    'tags_x_unique_values' => ':count unique values',
    'tags_all_values' => 'All values',
    'tags_view_tags' => 'View Tags',
    'tags_view_existing_tags' => 'View existing tags',
    'tags_list_empty_hint' => 'Tags can be assigned via the page editor sidebar or while editing the details of a book, chapter or shelf.',
    'attachments' => 'Attachments',
    'attachments_explain' => 'Upload some files or attach some links to display on your page. These are visible in the page sidebar.',
    'attachments_explain_instant_save' => 'Changes here are saved instantly.',
    'attachments_items' => 'Attached Items',
    'attachments_upload' => 'Upload File',
    'attachments_link' => 'Attach Link',
    'attachments_set_link' => 'Set Link',
    'attachments_delete' => 'Are you sure you want to delete this attachment?',
    'attachments_dropzone' => 'Drop files or click here to attach a file',
    'attachments_no_files' => 'No files have been uploaded',
    'attachments_explain_link' => 'You can attach a link if you\'d prefer not to upload a file. This can be a link to another page or a link to a file in the cloud.',
    'attachments_link_name' => 'Link Name',
    'attachment_link' => 'Attachment link',
    'attachments_link_url' => 'Link to file',
    'attachments_link_url_hint' => 'Url of site or file',
    'attach' => 'Attach',
    'attachments_insert_link' => 'Add Attachment Link to Page',
    'attachments_edit_file' => 'Edit File',
    'attachments_edit_file_name' => 'File Name',
    'attachments_edit_drop_upload' => 'Drop files or click here to upload and overwrite',
    'attachments_order_updated' => 'Attachment order updated',
    'attachments_updated_success' => 'Attachment details updated',
    'attachments_deleted' => 'Attachment deleted',
    'attachments_file_uploaded' => 'File successfully uploaded',
    'attachments_file_updated' => 'File successfully updated',
    'attachments_link_attached' => 'Link successfully attached to page',
    'templates' => 'Templates',
    'templates_set_as_template' => 'Page is a template',
    'templates_explain_set_as_template' => 'You can set this page as a template so its contents be utilized when creating other pages. Other users will be able to use this template if they have view permissions for this page.',
    'templates_replace_content' => 'Replace page content',
    'templates_append_content' => 'Append to page content',
    'templates_prepend_content' => 'Prepend to page content',

    // Profile View
    'profile_user_for_x' => 'User for :time',
    'profile_created_content' => 'Created Content',
    'profile_not_created_pages' => ':userName has not created any pages',
    'profile_not_created_chapters' => ':userName has not created any chapters',
    'profile_not_created_books' => ':userName has not created any books',
    'profile_not_created_shelves' => ':userName has not created any shelves',

    // Comments
    'comment' => 'Comment',
    'comments' => 'Comments',
    'comment_add' => 'Add Comment',
    'comment_placeholder' => 'Leave a comment here',
    'comment_count' => '{0} No Comments|{1} 1 Comment|[2,*] :count Comments',
    'comment_save' => 'Save Comment',
    'comment_saving' => 'Saving comment...',
    'comment_deleting' => 'Deleting comment...',
    'comment_new' => 'New Comment',
    'comment_created' => 'commented :createDiff',
    'comment_updated' => 'Updated :updateDiff by :username',
    'comment_deleted_success' => 'Comment deleted',
    'comment_created_success' => 'Comment added',
    'comment_updated_success' => 'Comment updated',
    'comment_delete_confirm' => 'Are you sure you want to delete this comment?',
    'comment_in_reply_to' => 'In reply to :commentId',

    // Revision
    'revision_delete_confirm' => 'Are you sure you want to delete this revision?',
    'revision_restore_confirm' => 'Are you sure you want to restore this revision? The current page contents will be replaced.',
    'revision_delete_success' => 'Revision deleted',
    'revision_cannot_delete_latest' => 'Cannot delete the latest revision.',

    // Copy view
    'copy_consider' => 'Please consider the below when copying content.',
    'copy_consider_permissions' => 'Custom permission settings will not be copied.',
    'copy_consider_owner' => 'You will become the owner of all copied content.',
    'copy_consider_images' => 'Page image files will not be duplicated & the original images will retain their relation to the page they were originally uploaded to.',
    'copy_consider_attachments' => 'Page attachments will not be copied.',
    'copy_consider_access' => 'A change of location, owner or permissions may result in this content being accessible to those previously without access.',

    // Conversions
    'convert_to_shelf' => 'Convert to Shelf',
    'convert_to_shelf_contents_desc' => 'You can convert this book to a new shelf with the same contents. Chapters contained within this book will be converted to new books. If this book contains any pages, that are not in a chapter, this book will be renamed and contain such pages, and this book will become part of the new shelf.',
    'convert_to_shelf_permissions_desc' => 'Any permissions set on this book will be copied to the new shelf and to all new child books that don\'t have their own permissions enforced. Note that permissions on shelves do not auto-cascade to content within, as they do for books.',
    'convert_book' => 'Convert Book',
    'convert_book_confirm' => 'Are you sure you want to convert this book?',
    'convert_undo_warning' => 'This cannot be as easily undone.',
    'convert_to_book' => 'Convert to Book',
    'convert_to_book_desc' => 'You can convert this chapter to a new book with the same contents. Any permissions set on this chapter will be copied to the new book but any inherited permissions, from the parent book, will not be copied which could lead to a change of access control.',
    'convert_chapter' => 'Convert Chapter',
    'convert_chapter_confirm' => 'Are you sure you want to convert this chapter?',

    // References
    'references' => 'References',
    'references_none' => 'There are no tracked references to this item.',
    'references_to_desc' => 'Shown below are all the known pages in the system that link to this item.',
];
