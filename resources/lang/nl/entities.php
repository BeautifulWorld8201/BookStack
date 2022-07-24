<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Recent aangemaakt',
    'recently_created_pages' => 'Recent aangemaakte pagina\'s',
    'recently_updated_pages' => 'Recent bijgewerkte pagina\'s',
    'recently_created_chapters' => 'Recent aangemaakte hoofdstukken',
    'recently_created_books' => 'Recent aangemaakte boeken',
    'recently_created_shelves' => 'Recent aangemaakte boekenplanken',
    'recently_update' => 'Recent bijgewerkt',
    'recently_viewed' => 'Recent bekeken',
    'recent_activity' => 'Recente activiteit',
    'create_now' => 'Maak er nu één',
    'revisions' => 'Revisies',
    'meta_revision' => 'Revisie #:revisionCount',
    'meta_created' => 'Aangemaakt :timeLength',
    'meta_created_name' => 'Aangemaakt: :timeLength door :user',
    'meta_updated' => 'Bijgewerkt: :timeLength',
    'meta_updated_name' => 'Bijgewerkt: :timeLength door :user',
    'meta_owned_name' => 'Eigendom van :user',
    'entity_select' => 'Entiteit selecteren',
    'entity_select_lack_permission' => 'You don\'t have the required permissions to select this item',
    'images' => 'Afbeeldingen',
    'my_recent_drafts' => 'Mijn recente concepten',
    'my_recently_viewed' => 'Mijn recent bekeken',
    'my_most_viewed_favourites' => 'Mijn meest bekeken favorieten',
    'my_favourites' => 'Mijn favorieten',
    'no_pages_viewed' => 'Je hebt nog geen pagina\'s bekeken',
    'no_pages_recently_created' => 'Er zijn geen recent aangemaakte pagina\'s',
    'no_pages_recently_updated' => 'Er zijn geen pagina\'s recent bijgewerkt',
    'export' => 'Exporteer',
    'export_html' => 'Ingesloten webbestand',
    'export_pdf' => 'PDF bestand',
    'export_text' => 'Normaal tekstbestand',
    'export_md' => 'Markdown bestand',

    // Permissions and restrictions
    'permissions' => 'Machtigingen',
    'permissions_intro' => 'Wanneer ingeschakeld, zullen deze machtigingen voorrang krijgen op alle ingestelde rol-machtigingen.',
    'permissions_enable' => 'Aangepaste machtigingen aanzetten',
    'permissions_save' => 'Machtigingen opslaan',
    'permissions_owner' => 'Eigenaar',

    // Search
    'search_results' => 'Zoekresultaten',
    'search_total_results_found' => ':count resultaten gevonden|:count totaal aantal resultaten gevonden',
    'search_clear' => 'Zoekopdracht wissen',
    'search_no_pages' => 'Er zijn geen pagina\'s gevonden',
    'search_for_term' => 'Zoeken op :term',
    'search_more' => 'Meer resultaten',
    'search_advanced' => 'Uitgebreid zoeken',
    'search_terms' => 'Zoektermen',
    'search_content_type' => 'Inhoudstype',
    'search_exact_matches' => 'Exacte matches',
    'search_tags' => 'Zoek tags',
    'search_options' => 'Opties',
    'search_viewed_by_me' => 'Bekeken door mij',
    'search_not_viewed_by_me' => 'Niet bekeken door mij',
    'search_permissions_set' => 'Machtigingen ingesteld',
    'search_created_by_me' => 'Door mij gemaakt',
    'search_updated_by_me' => 'Door mij bijgewerkt',
    'search_owned_by_me' => 'Eigendom van mij',
    'search_date_options' => 'Datum opties',
    'search_updated_before' => 'Bijgewerkt voor',
    'search_updated_after' => 'Bijgewerkt na',
    'search_created_before' => 'Aangemaakt voor',
    'search_created_after' => 'Aangemaakt na',
    'search_set_date' => 'Stel datum in',
    'search_update' => 'Update zoekresultaten',

    // Shelves
    'shelf' => 'Boekenplank',
    'shelves' => 'Boekenplanken',
    'x_shelves' => ':count Boekenplank|:count Boekenplanken',
    'shelves_long' => 'Boekenplanken',
    'shelves_empty' => 'Er zijn geen boekenplanken aangemaakt',
    'shelves_create' => 'Nieuwe boekenplank maken',
    'shelves_popular' => 'Populaire boekenplanken',
    'shelves_new' => 'Nieuwe boekenplanken',
    'shelves_new_action' => 'Nieuwe boekenplank',
    'shelves_popular_empty' => 'De meest populaire boekenplanken worden hier weergegeven.',
    'shelves_new_empty' => 'De meest recent aangemaakte boekenplanken worden hier weergeven.',
    'shelves_save' => 'Boekenplank opslaan',
    'shelves_books' => 'Boeken op deze plank',
    'shelves_add_books' => 'Voeg boeken toe aan deze plank',
    'shelves_drag_books' => 'Drag books below to add them to this shelf',
    'shelves_empty_contents' => 'Aan deze plank zijn geen boeken toegewezen',
    'shelves_edit_and_assign' => 'Bewerk boekenplank om boeken toe te wijzen',
    'shelves_edit_named' => 'Bewerk boekenplank :name',
    'shelves_edit' => 'Bewerk boekenplank',
    'shelves_delete' => 'Verwijder boekenplank',
    'shelves_delete_named' => 'Verwijder boekenplank :name',
    'shelves_delete_explain' => "Dit zal de boekenplank met de naam ':naam' verwijderen. Boeken worden hierdoor niet verwijderd.",
    'shelves_delete_confirmation' => 'Weet je zeker dat je deze boekenplank wilt verwijderen?',
    'shelves_permissions' => 'Boekenplank Machtigingen',
    'shelves_permissions_updated' => 'Boekenplank Machtigingen Bijgewerkt',
    'shelves_permissions_active' => 'Boekenplank Machtigingen Actief',
    'shelves_permissions_cascade_warning' => 'De ingestelde machtigingen op deze boekenplank worden niet automatisch toegepast op de boeken van deze boekenplank. Dit is omdat een boek toegekend kan worden op meerdere boekenplanken. De machtigingen van deze boekenplank kunnen echter wel gekopieerd worden naar de boeken van deze boekenplank via de optie hieronder.',
    'shelves_copy_permissions_to_books' => 'Kopieer Machtigingen naar Boeken',
    'shelves_copy_permissions' => 'Kopieer Machtigingen',
    'shelves_copy_permissions_explain' => 'Met deze actie worden de machtigingen van deze boekenplank gekopieërd naar alle boeken van deze boekenplank. Voor je deze actie uitvoert, moet je ervoor zorgen dat alle wijzigingen in de machtigingen van deze boekenplank zijn opgeslagen.',
    'shelves_copy_permission_success' => 'Boekenplank machtingen gekopieerd naar :count boeken',

    // Books
    'book' => 'Boek',
    'books' => 'Boeken',
    'x_books' => ':count Boek|:count Boeken',
    'books_empty' => 'Er zijn geen boeken aangemaakt',
    'books_popular' => 'Populaire boeken',
    'books_recent' => 'Recente boeken',
    'books_new' => 'Nieuwe boeken',
    'books_new_action' => 'Nieuw boek',
    'books_popular_empty' => 'De meest populaire boeken worden hier weergegeven.',
    'books_new_empty' => 'De meest recent aangemaakte boeken verschijnen hier.',
    'books_create' => 'Nieuw boek maken',
    'books_delete' => 'Boek verwijderen',
    'books_delete_named' => 'Verwijder boek :bookName',
    'books_delete_explain' => 'Deze actie verwijdert het boek \':bookName\', Alle pagina\'s en hoofdstukken worden verwijderd.',
    'books_delete_confirmation' => 'Weet je zeker dat je dit boek wilt verwijderen?',
    'books_edit' => 'Boek bewerken',
    'books_edit_named' => 'Bewerk boek :bookName',
    'books_form_book_name' => 'Boek naam',
    'books_save' => 'Boek opslaan',
    'books_permissions' => 'Boek machtigingen',
    'books_permissions_updated' => 'Boek Machtigingen Bijgewerkt',
    'books_empty_contents' => 'Er zijn nog geen hoofdstukken en pagina\'s voor dit boek gemaakt.',
    'books_empty_create_page' => 'Nieuwe pagina maken',
    'books_empty_sort_current_book' => 'Boek sorteren',
    'books_empty_add_chapter' => 'Hoofdstuk toevoegen',
    'books_permissions_active' => 'Boek Machtigingen Actief',
    'books_search_this' => 'Zoeken in dit boek',
    'books_navigation' => 'Boek navigatie',
    'books_sort' => 'Inhoud van het boek sorteren',
    'books_sort_named' => 'Sorteer boek :bookName',
    'books_sort_name' => 'Sorteren op naam',
    'books_sort_created' => 'Sorteren op datum van aanmaken',
    'books_sort_updated' => 'Sorteren op datum van bijgewerkt',
    'books_sort_chapters_first' => 'Hoofdstukken eerst',
    'books_sort_chapters_last' => 'Hoofdstukken laatst',
    'books_sort_show_other' => 'Bekijk andere boeken',
    'books_sort_save' => 'Nieuwe volgorde opslaan',
    'books_copy' => 'Kopieer Boek',
    'books_copy_success' => 'Boek succesvol gekopieerd',

    // Chapters
    'chapter' => 'Hoofdstuk',
    'chapters' => 'Hoofdstukken',
    'x_chapters' => ':count Hoofdstuk|:count Hoofdstukken',
    'chapters_popular' => 'Populaire hoofdstukken',
    'chapters_new' => 'Nieuw hoofdstuk',
    'chapters_create' => 'Nieuw hoofdstuk maken',
    'chapters_delete' => 'Hoofdstuk verwijderen',
    'chapters_delete_named' => 'Verwijder hoofdstuk :chapterName',
    'chapters_delete_explain' => 'Dit verwijdert het hoofdstuk met de naam \':chapterName\'. Alle pagina\'s die binnen dit hoofdstuk staan, worden ook verwijderd.',
    'chapters_delete_confirm' => 'Weet je zeker dat je dit boek wilt verwijderen?',
    'chapters_edit' => 'Hoofdstuk aanpassen',
    'chapters_edit_named' => 'Hoofdstuk :chapterName aanpassen',
    'chapters_save' => 'Hoofdstuk opslaan',
    'chapters_move' => 'Hoofdstuk verplaatsen',
    'chapters_move_named' => 'Verplaatst hoofdstuk :chapterName',
    'chapter_move_success' => 'Hoofdstuk verplaatst naar :bookName',
    'chapters_copy' => 'Kopieer Hoofdstuk',
    'chapters_copy_success' => 'Hoofdstuk succesvol gekopieerd',
    'chapters_permissions' => 'Hoofdstuk Machtigingen',
    'chapters_empty' => 'Er zijn geen pagina\'s in dit hoofdstuk aangemaakt.',
    'chapters_permissions_active' => 'Hoofdstuk Machtigingen Actief',
    'chapters_permissions_success' => 'Hoofdstuk Machtigingen Bijgewerkt',
    'chapters_search_this' => 'Doorzoek dit hoofdstuk',

    // Pages
    'page' => 'Pagina',
    'pages' => 'Pagina\'s',
    'x_pages' => ':count Pagina|:count Pagina\'s',
    'pages_popular' => 'Populaire pagina\'s',
    'pages_new' => 'Nieuwe pagina',
    'pages_attachments' => 'Bijlages',
    'pages_navigation' => 'Pagina navigatie',
    'pages_delete' => 'Pagina verwijderen',
    'pages_delete_named' => 'Verwijderd pagina :pageName',
    'pages_delete_draft_named' => 'Verwijder concept pagina :pageName',
    'pages_delete_draft' => 'Verwijder concept pagina',
    'pages_delete_success' => 'Pagina verwijderd',
    'pages_delete_draft_success' => 'Concept verwijderd',
    'pages_delete_confirm' => 'Weet je zeker dat je deze pagina wilt verwijderen?',
    'pages_delete_draft_confirm' => 'Weet je zeker dat je dit concept wilt verwijderen?',
    'pages_editing_named' => 'Pagina :pageName bewerken',
    'pages_edit_draft_options' => 'Concept opties',
    'pages_edit_save_draft' => 'Concept opslaan',
    'pages_edit_draft' => 'Paginaconcept bewerken',
    'pages_editing_draft' => 'Concept bewerken',
    'pages_editing_page' => 'Concept bewerken',
    'pages_edit_draft_save_at' => 'Concept opgeslagen op ',
    'pages_edit_delete_draft' => 'Concept verwijderen',
    'pages_edit_discard_draft' => 'Concept verwijderen',
    'pages_edit_switch_to_markdown' => 'Verander naar Markdown Bewerker',
    'pages_edit_switch_to_markdown_clean' => '(Schoongemaakte Inhoud)',
    'pages_edit_switch_to_markdown_stable' => '(Stabiele Inhoud)',
    'pages_edit_switch_to_wysiwyg' => 'Verander naar WYSIWYG Bewerker',
    'pages_edit_set_changelog' => 'Wijzigingslogboek instellen',
    'pages_edit_enter_changelog_desc' => 'Geef een korte omschrijving van de wijzigingen die je gemaakt hebt',
    'pages_edit_enter_changelog' => 'Voeg toe aan wijzigingslogboek',
    'pages_editor_switch_title' => 'Wijzig Bewerker',
    'pages_editor_switch_are_you_sure' => 'Weet u zeker dat u de bewerker voor deze pagina wilt wijzigen?',
    'pages_editor_switch_consider_following' => 'Houd rekening met het volgende als u van bewerker verandert:',
    'pages_editor_switch_consideration_a' => 'Eenmaal opgeslagen, zal de nieuwe bewerker keuze gebruikt worden door alle toekomstige gebruikers, ook diegene die zelf niet van bewerker type kunnen veranderen.',
    'pages_editor_switch_consideration_b' => 'Dit kan mogelijks tot een verlies van detail en syntax leiden in bepaalde omstandigheden.',
    'pages_editor_switch_consideration_c' => 'De veranderingen aan Tags of aan het wijzigingslogboek, sinds de laatste keer opslaan, zullen niet behouden blijven met deze wijziging.',
    'pages_save' => 'Pagina opslaan',
    'pages_title' => 'Pagina titel',
    'pages_name' => 'Pagina naam',
    'pages_md_editor' => 'Bewerker',
    'pages_md_preview' => 'Voorbeeld',
    'pages_md_insert_image' => 'Afbeelding invoegen',
    'pages_md_insert_link' => 'Entity link invoegen',
    'pages_md_insert_drawing' => 'Tekening invoegen',
    'pages_not_in_chapter' => 'Deze pagina staat niet in een hoofdstuk',
    'pages_move' => 'Pagina verplaatsten',
    'pages_move_success' => 'Pagina verplaatst naar ":parentName"',
    'pages_copy' => 'Pagina kopiëren',
    'pages_copy_desination' => 'Kopieër bestemming',
    'pages_copy_success' => 'Pagina succesvol gekopieërd',
    'pages_permissions' => 'Pagina Machtigingen',
    'pages_permissions_success' => 'Pagina machtigingen bijgewerkt',
    'pages_revision' => 'Revisie',
    'pages_revisions' => 'Pagina revisies',
    'pages_revisions_named' => 'Pagina revisies voor :pageName',
    'pages_revision_named' => 'Pagina revisie voor :pageName',
    'pages_revision_restored_from' => 'Hersteld van #:id; :samenvatting',
    'pages_revisions_created_by' => 'Aangemaakt door',
    'pages_revisions_date' => 'Revisiedatum',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revisie #:id',
    'pages_revisions_numbered_changes' => 'Revisie #:id wijzigingen',
    'pages_revisions_editor' => 'Bewerker Type',
    'pages_revisions_changelog' => 'Wijzigingsoverzicht',
    'pages_revisions_changes' => 'Wijzigingen',
    'pages_revisions_current' => 'Huidige versie',
    'pages_revisions_preview' => 'Voorbeeld',
    'pages_revisions_restore' => 'Herstellen',
    'pages_revisions_none' => 'Deze pagina heeft geen revisies',
    'pages_copy_link' => 'Link kopiëren',
    'pages_edit_content_link' => 'Bewerk inhoud',
    'pages_permissions_active' => 'Pagina Machtigingen Actief',
    'pages_initial_revision' => 'Eerste publicatie',
    'pages_initial_name' => 'Nieuwe pagina',
    'pages_editing_draft_notification' => 'U bewerkt momenteel een concept dat voor het laatst is opgeslagen op :timeDiff.',
    'pages_draft_edited_notification' => 'Deze pagina is sindsdien bijgewerkt. Het wordt aanbevolen dat u dit concept verwijderd.',
    'pages_draft_page_changed_since_creation' => 'Deze pagina is bijgewerkt sinds het aanmaken van dit concept. Het wordt aanbevolen dat u dit ontwerp verwijdert of ervoor zorgt dat u wijzigingen op de pagina niet overschrijft.',
    'pages_draft_edit_active' => [
        'start_a' => ':count gebruikers zijn begonnen deze pagina te bewerken',
        'start_b' => ':userName is begonnen met het bewerken van deze pagina',
        'time_a' => 'since the pages was last updated',
        'time_b' => 'in de laatste :minCount minuten',
        'message' => ':start :time. Let op om elkaars updates niet te overschrijven!',
    ],
    'pages_draft_discarded' => 'Concept verwijderd, de editor is bijgewerkt met de huidige paginainhoud',
    'pages_specific' => 'Specifieke pagina',
    'pages_is_template' => 'Paginasjabloon',

    // Editor Sidebar
    'page_tags' => 'Pagina Labels',
    'chapter_tags' => 'Labels van hoofdstuk',
    'book_tags' => 'Labels van boeken',
    'shelf_tags' => 'Labels van boekenplanken',
    'tag' => 'Label',
    'tags' =>  'Labels',
    'tag_name' =>  'Naam label',
    'tag_value' => 'Labelwaarde (Optioneel)',
    'tags_explain' => "Voeg labels toe om de inhoud te categoriseren. \n Je kunt meerdere labels toevoegen.",
    'tags_add' => 'Voeg een extra label toe',
    'tags_remove' => 'Dit label verwijderen',
    'tags_usages' => 'Totaal tag gebruik',
    'tags_assigned_pages' => 'Toegewezen aan pagina\'s',
    'tags_assigned_chapters' => 'Toegewezen aan hoofdstukken',
    'tags_assigned_books' => 'Toegewezen aan boeken',
    'tags_assigned_shelves' => 'Toegewezen aan boekenplanken',
    'tags_x_unique_values' => ':count unieke waarden',
    'tags_all_values' => 'Alle waarden',
    'tags_view_tags' => 'Bekijk Tags',
    'tags_view_existing_tags' => 'Bekijk bestaande tags',
    'tags_list_empty_hint' => 'Tags kunnen worden toegekend via de zijbalk van de pagina-bewerker of tijdens het bewerken van de details van een boek, hoofdstuk of boekenplank.',
    'attachments' => 'Bijlages',
    'attachments_explain' => 'Upload bijlages of voeg een link toe. Deze worden zichtbaar in het navigatiepaneel.',
    'attachments_explain_instant_save' => 'Wijzigingen worden meteen opgeslagen.',
    'attachments_items' => 'Bijlages',
    'attachments_upload' => 'Bestand uploaden',
    'attachments_link' => 'Link toevoegen',
    'attachments_set_link' => 'Zet link',
    'attachments_delete' => 'Weet u zeker dat u deze bijlage wilt verwijderen?',
    'attachments_dropzone' => 'Sleep hier een bestand of klik hier om een bestand toe te voegen',
    'attachments_no_files' => 'Er zijn geen bestanden geüpload',
    'attachments_explain_link' => 'Je kunt een hyperlink toevoegen als je geen bestanden wilt uploaden. Dit kan een link naar een andere pagina op deze website zijn, maar ook een link naar een andere website.',
    'attachments_link_name' => 'Link naam',
    'attachment_link' => 'Bijlage link',
    'attachments_link_url' => 'Hyperlink naar bestand',
    'attachments_link_url_hint' => 'URL van site of bestand',
    'attach' => 'Toevoegen',
    'attachments_insert_link' => 'Bijlage hyperlink toevoegen aan pagina',
    'attachments_edit_file' => 'Bestand bewerken',
    'attachments_edit_file_name' => 'Bestandsnaam',
    'attachments_edit_drop_upload' => 'Sleep een bestand of klik hier om te uploaden en te overschrijven',
    'attachments_order_updated' => 'De volgorde van de bijlages is bijgewerkt',
    'attachments_updated_success' => 'Bijlage details bijgewerkt',
    'attachments_deleted' => 'Bijlage verwijderd',
    'attachments_file_uploaded' => 'Bestand succesvol geüpload',
    'attachments_file_updated' => 'Bestand succesvol bijgewerkt',
    'attachments_link_attached' => 'Hyperlink succesvol gekoppeld aan de pagina',
    'templates' => 'Sjablonen',
    'templates_set_as_template' => 'Pagina is een sjabloon',
    'templates_explain_set_as_template' => 'Je kan deze pagina als sjabloon instellen zodat de inhoud gebruikt kan worden bij het maken van andere pagina\'s. Andere gebruikers kunnen dit sjabloon gebruiken als ze de machtiging hebben voor deze pagina.',
    'templates_replace_content' => 'Pagina-inhoud vervangen',
    'templates_append_content' => 'Toevoegen aan pagina-inhoud',
    'templates_prepend_content' => 'Voeg vooraan toe aan pagina-inhoud',

    // Profile View
    'profile_user_for_x' => 'Lid sinds :time',
    'profile_created_content' => 'Aangemaakte Inhoud',
    'profile_not_created_pages' => ':userName heeft geen pagina\'s gemaakt',
    'profile_not_created_chapters' => ':userName heeft geen hoofdstukken gemaakt',
    'profile_not_created_books' => ':userName heeft geen boeken gemaakt',
    'profile_not_created_shelves' => ':userName heeft nog geen boekenplanken gemaakt',

    // Comments
    'comment' => 'Reactie',
    'comments' => 'Reacties',
    'comment_add' => 'Reactie toevoegen',
    'comment_placeholder' => 'Laat hier een reactie achter',
    'comment_count' => '{0} Geen reacties|{1} 1 Reactie|[2,*] :count Reacties',
    'comment_save' => 'Sla reactie op',
    'comment_saving' => 'Reactie aan het opslaan...',
    'comment_deleting' => 'Reactie aan het verwijderen...',
    'comment_new' => 'Nieuwe reactie',
    'comment_created' => 'reactie gegeven :createDiff',
    'comment_updated' => 'Updatet :updateDiff door :username',
    'comment_deleted_success' => 'Reactie verwijderd',
    'comment_created_success' => 'Reactie toegevoegd',
    'comment_updated_success' => 'Reactie bijgewerkt',
    'comment_delete_confirm' => 'Weet je zeker dat je deze reactie wilt verwijderen?',
    'comment_in_reply_to' => 'Als antwoord op :commentId',

    // Revision
    'revision_delete_confirm' => 'Weet u zeker dat u deze revisie wilt verwijderen?',
    'revision_restore_confirm' => 'Weet u zeker dat u deze revisie wilt herstellen? De huidige pagina-inhoud wordt vervangen.',
    'revision_delete_success' => 'Revisie verwijderd',
    'revision_cannot_delete_latest' => 'Kan de laatste revisie niet verwijderen.',

    // Copy view
    'copy_consider' => 'Houd rekening met het onderstaande wanneer u inhoud kopieert.',
    'copy_consider_permissions' => 'Aangepaste machtigingsinstellingen worden niet gekopieerd.',
    'copy_consider_owner' => 'Je wordt de eigenaar van alle gekopieerde inhoud.',
    'copy_consider_images' => 'Afbeeldingsbestanden worden niet gedupliceerd & de originele afbeeldingen behouden hun koppeling met de pagina waarop ze oorspronkelijk werden geüpload.',
    'copy_consider_attachments' => 'Pagina bijlagen worden niet gekopieerd.',
    'copy_consider_access' => 'Een verandering van locatie, eigenaar of machtigingen kan ertoe leiden dat deze inhoud toegankelijk wordt voor personen die er voordien geen toegang tot hadden.',

    // Conversions
    'convert_to_shelf' => 'Converteer naar Boekenplank',
    'convert_to_shelf_contents_desc' => 'U kunt dit boek converteren naar een nieuwe boekenplank met dezelfde inhoud. Hoofdstukken in dit boek zullen worden geconverteerd naar nieuwe boeken. Als dit boek pagina\'s bevat, die niet in een hoofdstuk staan, zal dit boek een nieuwe naam krijgen en deze pagina\'s bevatten, en zal dit boek deel gaan uitmaken van de nieuwe boekenplank.',
    'convert_to_shelf_permissions_desc' => 'Elke machtiging ingesteld op dit boek zal gekopieerd worden naar de nieuwe boekenplank en naar alle nieuwe onderliggende boeken die geen eigen machtiging hebben afgedwongen. Merk op dat boekenplank-machtigingen niet automatisch overdragen naar inhoud binnenin de boekenplank, zoals dat wel gebeurd bij boeken.',
    'convert_book' => 'Converteer Boek',
    'convert_book_confirm' => 'Weet je zeker dat je dit boek wil converteren?',
    'convert_undo_warning' => 'Dit kan niet eenvoudig ongedaan gemaakt worden.',
    'convert_to_book' => 'Converteer naar Boek',
    'convert_to_book_desc' => 'Je kan dit hoofdstuk converteren naar een nieuw boek met dezelfde inhoud. Alle machtigingen ingesteld op dit hoofdstuk zullen worden gekopieerd naar het nieuwe boek, maar alle geërfde machtigingen, van het bovenliggende boek, zullen niet worden gekopieerd, wat kan leiden tot een wijziging van de toegangscontrole.',
    'convert_chapter' => 'Converteer Hoofdstuk',
    'convert_chapter_confirm' => 'Weet je zeker dat je dit hoofdstuk wil converteren?',
];
