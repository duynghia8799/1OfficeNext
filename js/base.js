(function($) {
    $(document).ready(function () {
        // Nocode Video Modal
        var $iframe = $('#nocodeVideoIframe');
        var src = $iframe.attr('src');
        $('#nocodeVideoModal').on('hidden.bs.modal', function () {
            $iframe.attr('src', ''); 
            $iframe.attr('src', src);
        });
    });
})(jQuery);