<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => '最近建立',
    'recently_created_pages' => '最近建立的頁面',
    'recently_updated_pages' => '最近更新的頁面',
    'recently_created_chapters' => '最近建立的章節',
    'recently_created_books' => '最近建立的書本',
    'recently_created_shelves' => '最近建立的書架',
    'recently_update' => '最近更新',
    'recently_viewed' => '最近檢視',
    'recent_activity' => '近期活動',
    'create_now' => '立即建立',
    'revisions' => '修訂版本',
    'meta_revision' => '修訂版本 #:revisionCount',
    'meta_created' => '建立於 :timeLength',
    'meta_created_name' => '由 :user 建立於 :timeLength',
    'meta_updated' => '更新於 :timeLength',
    'meta_updated_name' => '由 :user 更新於 :timeLength',
    'meta_owned_name' => ':user 所擁有',
    'entity_select' => '選取項目',
    'images' => '圖片',
    'my_recent_drafts' => '我最近的草稿',
    'my_recently_viewed' => '我最近檢視',
    'my_most_viewed_favourites' => '我瀏覽最多次的最愛',
    'my_favourites' => '我的最愛',
    'no_pages_viewed' => '您尚未看過任何頁面',
    'no_pages_recently_created' => '最近未建立任何頁面',
    'no_pages_recently_updated' => '最近沒有頁面被更新',
    'export' => '匯出',
    'export_html' => '網頁檔案',
    'export_pdf' => 'PDF 檔案',
    'export_text' => '純文字檔案',
    'export_md' => 'Markdown 檔案',

    // Permissions and restrictions
    'permissions' => '權限',
    'permissions_intro' => '一旦啟用，這些權限將優先於任何設定的角色權限。',
    'permissions_enable' => '啟用自訂權限',
    'permissions_save' => '儲存權限',
    'permissions_owner' => '擁有者',

    // Search
    'search_results' => '搜尋結果',
    'search_total_results_found' => '找到了 :count 個結果 | 總共 :count 個結果',
    'search_clear' => '清除搜尋',
    'search_no_pages' => '沒有與此搜尋相符的頁面',
    'search_for_term' => ':term 的搜尋結果',
    'search_more' => '更多結果',
    'search_advanced' => '進階搜尋',
    'search_terms' => '搜尋字串',
    'search_content_type' => '內容類型',
    'search_exact_matches' => '精確符合',
    'search_tags' => '標籤搜尋',
    'search_options' => '選項',
    'search_viewed_by_me' => '被我檢視',
    'search_not_viewed_by_me' => '未被我檢視',
    'search_permissions_set' => '權限設定',
    'search_created_by_me' => '我建立的',
    'search_updated_by_me' => '我更新的',
    'search_owned_by_me' => '我所擁有的',
    'search_date_options' => '日期選項',
    'search_updated_before' => '在此之前更新',
    'search_updated_after' => '在此之後更新',
    'search_created_before' => '在此之前建立',
    'search_created_after' => '在此之後建立',
    'search_set_date' => '設定日期',
    'search_update' => '更新搜尋結果',

    // Shelves
    'shelf' => '書架',
    'shelves' => '書架',
    'x_shelves' => ':count 書架 | :count 章節',
    'shelves_long' => '書架',
    'shelves_empty' => '尚未建立書架',
    'shelves_create' => '建立新書架',
    'shelves_popular' => '熱門書架',
    'shelves_new' => '新書架',
    'shelves_new_action' => '建立新的書架',
    'shelves_popular_empty' => '最受歡迎的書架將出現在這裡。',
    'shelves_new_empty' => '最近建立的書架將出現在這裡。',
    'shelves_save' => '儲存書架',
    'shelves_books' => '此書架上的書本',
    'shelves_add_books' => '新增書本至此書架',
    'shelves_drag_books' => '將書本拖曳到此處來將其新增到此書架',
    'shelves_empty_contents' => '此書架沒有分配任何書本',
    'shelves_edit_and_assign' => '編輯書架以分配書本',
    'shelves_edit_named' => '編輯書架 :name',
    'shelves_edit' => '編輯書架',
    'shelves_delete' => '刪除書架',
    'shelves_delete_named' => '刪除書架 :name',
    'shelves_delete_explain' => "這將刪除名為「:name」的書架。但其中的書本不會被刪除。",
    'shelves_delete_confirmation' => '您確定要刪除此書架嗎？',
    'shelves_permissions' => '書架權限',
    'shelves_permissions_updated' => '書架權限已更新',
    'shelves_permissions_active' => '書架權限已啟用',
    'shelves_permissions_cascade_warning' => 'Permissions on bookshelves do not automatically cascade to contained books. This is because a book can exist on multiple shelves. Permissions can however be copied down to child books using the option found below.',
    'shelves_copy_permissions_to_books' => '將權限複製到書本',
    'shelves_copy_permissions' => '複製權限',
    'shelves_copy_permissions_explain' => '這會將此書架目前的權限設定套用到所有包含的書本上。在啟用前，請確認您已儲存任何對此書架權限的變更。',
    'shelves_copy_permission_success' => '已將書架的權限複製到 :count 本書上',

    // Books
    'book' => '書本',
    'books' => '書本',
    'x_books' => ':count 本書 | :count本書',
    'books_empty' => '不存在已建立的書',
    'books_popular' => '熱門書本',
    'books_recent' => '近期書本',
    'books_new' => '新書本',
    'books_new_action' => '新書本',
    'books_popular_empty' => '最受歡迎的書本將出現在這裡。',
    'books_new_empty' => '最近建立的書本將出現在這裡。',
    'books_create' => '建立新書本',
    'books_delete' => '刪除書本',
    'books_delete_named' => '刪除書本 :bookName',
    'books_delete_explain' => '這將刪除書本「:bookName」。所有的章節和頁面都會被刪除。',
    'books_delete_confirmation' => '您確定要刪除此書本嗎？',
    'books_edit' => '編輯書本',
    'books_edit_named' => '編輯書本「:bookName」',
    'books_form_book_name' => '書本名稱',
    'books_save' => '儲存書本',
    'books_permissions' => '書本權限',
    'books_permissions_updated' => '書本權限已更新',
    'books_empty_contents' => '本書目前沒有頁面或章節。',
    'books_empty_create_page' => '建立新頁面',
    'books_empty_sort_current_book' => '排序目前書本',
    'books_empty_add_chapter' => '新增章節',
    'books_permissions_active' => '書本權限已啟用',
    'books_search_this' => '搜尋此書本',
    'books_navigation' => '書本導覽',
    'books_sort' => '排序書本內容',
    'books_sort_named' => '排序書本 :bookName',
    'books_sort_name' => '按名稱排序',
    'books_sort_created' => '按建立時間排序',
    'books_sort_updated' => '按更新時間排序',
    'books_sort_chapters_first' => '第一章',
    'books_sort_chapters_last' => '最後一章',
    'books_sort_show_other' => '顯示其他書本',
    'books_sort_save' => '儲存新順序',

    // Chapters
    'chapter' => '章節',
    'chapters' => '章節',
    'x_chapters' => ':count個章節 | :count個章節',
    'chapters_popular' => '熱門章節',
    'chapters_new' => '新章節',
    'chapters_create' => '建立章節',
    'chapters_delete' => '刪除章節',
    'chapters_delete_named' => '刪除章節 :chapterName',
    'chapters_delete_explain' => '這將會刪除名稱為「:chapterName」的章節。此章節中的所有頁面都將會被刪除。',
    'chapters_delete_confirm' => '您確定要刪除此章節嗎？',
    'chapters_edit' => '編輯章節',
    'chapters_edit_named' => '編輯章節「:chapterName」',
    'chapters_save' => '儲存章節',
    'chapters_move' => '移動章節',
    'chapters_move_named' => '移動章節 :chapterName',
    'chapter_move_success' => '章節移動到 :bookName',
    'chapters_permissions' => '章節權限',
    'chapters_empty' => '本章目前沒有頁面。',
    'chapters_permissions_active' => '章節權限已啟用',
    'chapters_permissions_success' => '章節權限已更新',
    'chapters_search_this' => '搜尋此章節',

    // Pages
    'page' => '頁面',
    'pages' => '頁面',
    'x_pages' => ':count 頁 | :count 頁',
    'pages_popular' => '熱門頁面',
    'pages_new' => '新頁面',
    'pages_attachments' => '附件',
    'pages_navigation' => '頁面導覽',
    'pages_delete' => '刪除頁面',
    'pages_delete_named' => '刪除頁面 :pageName',
    'pages_delete_draft_named' => '刪除草稿頁面 :pageName',
    'pages_delete_draft' => '刪除草稿頁面',
    'pages_delete_success' => '頁面已刪除',
    'pages_delete_draft_success' => '草稿頁面已刪除',
    'pages_delete_confirm' => '您確定要刪除此頁面嗎？',
    'pages_delete_draft_confirm' => '您確定要刪除此草稿頁面嗎？',
    'pages_editing_named' => '正在編輯頁面 :pageName',
    'pages_edit_draft_options' => '草稿選項',
    'pages_edit_save_draft' => '儲存草稿',
    'pages_edit_draft' => '編輯頁面草稿',
    'pages_editing_draft' => '正在編輯草稿',
    'pages_editing_page' => '正在編輯頁面',
    'pages_edit_draft_save_at' => '草稿儲存於 ',
    'pages_edit_delete_draft' => '刪除草稿',
    'pages_edit_discard_draft' => '放棄草稿',
    'pages_edit_set_changelog' => '設定變更日誌',
    'pages_edit_enter_changelog_desc' => '輸入對您所做變動的簡易描述',
    'pages_edit_enter_changelog' => '輸入變更日誌',
    'pages_save' => '儲存頁面',
    'pages_title' => '頁面標題',
    'pages_name' => '頁面名稱',
    'pages_md_editor' => '編輯者',
    'pages_md_preview' => '預覽',
    'pages_md_insert_image' => '插入圖片',
    'pages_md_insert_link' => '插入連結',
    'pages_md_insert_drawing' => '插入繪圖',
    'pages_not_in_chapter' => '頁面不在章節中',
    'pages_move' => '移動頁面',
    'pages_move_success' => '頁面已移動到「:parentName」',
    'pages_copy' => '複製頁面',
    'pages_copy_desination' => '複製的目的地',
    'pages_copy_success' => '頁面已成功複製',
    'pages_permissions' => '頁面權限',
    'pages_permissions_success' => '頁面權限已更新',
    'pages_revision' => '修訂版本',
    'pages_revisions' => '頁面修訂版本',
    'pages_revisions_named' => ':pageName 頁面修訂版本',
    'pages_revision_named' => ':pageName 頁面修訂版本',
    'pages_revision_restored_from' => '從 #:id; :summary 復原',
    'pages_revisions_created_by' => '建立者',
    'pages_revisions_date' => '修訂日期',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => '修訂版本 #:id',
    'pages_revisions_numbered_changes' => '修訂版本 #:id 變更',
    'pages_revisions_changelog' => '變動日誌',
    'pages_revisions_changes' => '變動',
    'pages_revisions_current' => '目前版本',
    'pages_revisions_preview' => '預覽',
    'pages_revisions_restore' => '還原',
    'pages_revisions_none' => '此頁面沒有修訂',
    'pages_copy_link' => '複製連結',
    'pages_edit_content_link' => '編輯內容',
    'pages_permissions_active' => '頁面權限已啟用',
    'pages_initial_revision' => '初次發布',
    'pages_initial_name' => '新頁面',
    'pages_editing_draft_notification' => '您正在編輯最後儲存為 :timeDiff 的草稿。',
    'pages_draft_edited_notification' => '此頁面已經被更新過。建議您放棄此草稿。',
    'pages_draft_page_changed_since_creation' => 'This page has been updated since this draft was created. It is recommended that you discard this draft or take care not to overwrite any page changes.',
    'pages_draft_edit_active' => [
        'start_a' => ':count 位使用者已經開始編輯此頁面',
        'start_b' => '使用者 :userName 已經開始編輯此頁面',
        'time_a' => '自頁面上次更新以來',
        'time_b' => '在最近:minCount分鐘',
        'message' => ':start :time。注意不要覆寫其他人的更新！',
    ],
    'pages_draft_discarded' => '草稿已丟棄。編輯器已更新到目前頁面內容',
    'pages_specific' => '特定頁面',
    'pages_is_template' => '頁面模板',

    // Editor Sidebar
    'page_tags' => '頁面標籤',
    'chapter_tags' => '章節標籤',
    'book_tags' => '書本標籤',
    'shelf_tags' => '書架標籤',
    'tag' => '標籤',
    'tags' =>  '標籤',
    'tag_name' =>  '標籤名稱',
    'tag_value' => '標籤值（選擇性）',
    'tags_explain' => "加入一些標籤以更好地對您的內容進行分類。 \n 您可以為標籤分配一個值，以進行更深入的組織。",
    'tags_add' => '新增另一個標籤',
    'tags_remove' => '移除此標籤',
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
    'attachments' => '附件',
    'attachments_explain' => '上傳一些檔案或附加連結以顯示在您的網頁上。將顯示在在頁面的側邊欄。',
    'attachments_explain_instant_save' => '此處的變動將會立刻儲存。',
    'attachments_items' => '附件',
    'attachments_upload' => '上傳檔案',
    'attachments_link' => '附加連結',
    'attachments_set_link' => '設定連結',
    'attachments_delete' => '您確定要刪除此附件嗎？',
    'attachments_dropzone' => '拖曳檔案或點擊此處來附加檔案',
    'attachments_no_files' => '尚未上傳檔案',
    'attachments_explain_link' => '如果您不想上傳檔案，則可以附加連結。這可以是指向其他頁面的連結，也可以是指向雲端檔案的連結。',
    'attachments_link_name' => '連結名稱',
    'attachment_link' => '附件連結',
    'attachments_link_url' => '連結到檔案',
    'attachments_link_url_hint' => '網站或檔案的網址',
    'attach' => '附加',
    'attachments_insert_link' => '將附件連結新增到頁面',
    'attachments_edit_file' => '編輯檔案',
    'attachments_edit_file_name' => '檔案名稱',
    'attachments_edit_drop_upload' => '拖曳檔案或點擊此處以上傳並覆寫',
    'attachments_order_updated' => '附件順序已更新',
    'attachments_updated_success' => '附件資訊已更新',
    'attachments_deleted' => '附件已刪除',
    'attachments_file_uploaded' => '附件上傳成功',
    'attachments_file_updated' => '附件更新成功',
    'attachments_link_attached' => '連結成功附加到頁面',
    'templates' => '範本',
    'templates_set_as_template' => '頁面為範本',
    'templates_explain_set_as_template' => '您可以將此頁面設定為範本，以便在建立其他頁面時利用其內容。如果其他使用者對此頁面擁有檢視權限，則將可以使用此範本。',
    'templates_replace_content' => '替換頁面內容',
    'templates_append_content' => '附加到頁面內容',
    'templates_prepend_content' => '前置頁面內容',

    // Profile View
    'profile_user_for_x' => '來這裡:time了',
    'profile_created_content' => '已建立內容',
    'profile_not_created_pages' => ':userName 尚未建立任何頁面',
    'profile_not_created_chapters' => ':userName 尚未建立任何章節',
    'profile_not_created_books' => ':userName 尚未建立任何書本',
    'profile_not_created_shelves' => ':userName 沒有創建任何書架',

    // Comments
    'comment' => '評論',
    'comments' => '評論',
    'comment_add' => '新增評論',
    'comment_placeholder' => '在這裡評論',
    'comment_count' => '{0} 無評論 |{1} :count 則評論 | [2,*] :count 則評論',
    'comment_save' => '儲存評論',
    'comment_saving' => '正在儲存評論……',
    'comment_deleting' => '正在刪除評論……',
    'comment_new' => '新評論',
    'comment_created' => '評論於 :createDiff',
    'comment_updated' => '由 :username 於 :updateDiff 更新',
    'comment_deleted_success' => '評論已刪除',
    'comment_created_success' => '評論已加入',
    'comment_updated_success' => '評論已更新',
    'comment_delete_confirm' => '您確定要刪除這則評論？',
    'comment_in_reply_to' => '回覆 :commentId',

    // Revision
    'revision_delete_confirm' => '您確定要刪除此修訂版本嗎？',
    'revision_restore_confirm' => '您確定要還原此修訂版本嗎？ 目前頁面內容將被替換。',
    'revision_delete_success' => '修訂版本已刪除',
    'revision_cannot_delete_latest' => '無法刪除最新修訂版本。',
];
