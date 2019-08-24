<div class="chapter-child-menu">
    <button chapter-toggle type="button" aria-expanded="{{ $isOpen ? 'true' : 'false' }}" aria-label="{{ trans('common.profile_menu') }}"
            class="text-muted @if($isOpen) open @endif">
        @icon('caret-right') @icon('page') <span>{{ trans_choice('entities.x_pages', $bookChild->pages->count()) }}</span>
    </button>
    <ul class="sub-menu inset-list @if($isOpen) open @endif" @if($isOpen) style="display: block;" @endif role="menu">
        @foreach($bookChild->pages as $childPage)
            <li class="list-item-page {{ $childPage->isA('page') && $childPage->draft ? 'draft' : '' }}" role="presentation">
                @include('partials.entity-list-item-basic', ['entity' => $childPage, 'classes' => $current->matches($childPage)? 'selected' : '' ])
            </li>
        @endforeach
    </ul>
</div>