(function ($) {
    $(document).ready(function () {
        function changePosisionCard($targetItem) {
            var $wrapper = $targetItem.closest('.animation_tabs');
            var $card = $wrapper.find('.card');

            var wrapperOffset = $wrapper.offset().left;
            var itemOffset = $targetItem.offset().left;

            var move = itemOffset - wrapperOffset;
            var width = $targetItem.outerWidth();

            $card.css({
                'left': move + 'px',
                'width': width + 'px'
            });
        }

        var $firstItem = $('.animation_tabs .items_container .item').first();
        $firstItem.addClass('active')
        changePosisionCard($firstItem)
        $("#" + $($firstItem).attr('data-bs-target')).addClass('active')

        $('.animation_tabs .items_container .item').on('click', function () {
            console.log('check')
            $('.animation_tabs .items_container .item').removeClass('active');
            $(this).addClass('active');

            $("." + $(this).attr('panels-container') + ".panels_container .tab-pane").removeClass('active')
            $("#" + $(this).attr('data-bs-target')).addClass('active')
            changePosisionCard($(this))
        });
    })
})(jQuery);