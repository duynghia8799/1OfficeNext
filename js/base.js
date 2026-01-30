(function($) {
    $(document).ready(function () {
        
        // Auto-handle video reset for ALL Bootstrap modals containing iframes
        $('.modal').each(function() {
            var $modal = $(this);
            var $iframe = $modal.find('iframe');

            // Only proceed if the modal has an iframe
            if ($iframe.length > 0) {
                // Save the original source to a data attribute
                var originalSrc = $iframe.attr('src');
                $iframe.attr('data-src', originalSrc);

                // When modal is shown, restore the src from data attribute
                $modal.on('shown.bs.modal', function () {
                    $iframe.attr('src', originalSrc);
                });

                // When modal is hidden, clear the src to stop the video
                $modal.on('hidden.bs.modal', function () {
                    $iframe.attr('src', '');
                });
            }
        });

    });
})(jQuery);