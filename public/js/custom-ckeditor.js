window.onload = function () {
    CKEDITOR.replaceAll(function (textarea, config) {
        config.allowedContent = true; // Allow all content, including classes
        config.extraAllowedContent = 'div(*);span(*);p(*)'; // Allow any class for div, span, p tags
        config.removeFormatAttributes = ''; // Prevent removal of attributes like class
        config.removePlugins = 'autoformat'; // Optional: Disable auto-formatting plugins
    });
};
