import {build as buildEditorConfig} from "../wysiwyg/config";

class WysiwygEditor {

    setup() {
        this.elem = this.$el;

        this.pageId = this.$opts.pageId;
        this.textDirection = this.$opts.textDirection;
        this.isDarkMode = document.documentElement.classList.contains('dark-mode');

        this.tinyMceConfig = buildEditorConfig({
            containerElement: this.elem,
            darkMode: this.isDarkMode,
            textDirection: this.textDirection,
            drawioUrl: this.getDrawIoUrl(),
            pageId: Number(this.pageId),
            translations: {
                imageUploadErrorText: this.$opts.imageUploadErrorText,
                serverUploadLimitText: this.$opts.serverUploadLimitText,
            }
        });

        window.$events.emitPublic(this.elem, 'editor-tinymce::pre-init', {config: this.tinyMceConfig});
        window.tinymce.init(this.tinyMceConfig);
    }

    getDrawIoUrl() {
        const drawioUrlElem = document.querySelector('[drawio-url]');
        if (drawioUrlElem) {
            return drawioUrlElem.getAttribute('drawio-url');
        }
        return '';
    }

}

export default WysiwygEditor;
