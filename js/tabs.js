(function ($) {
    $(document).ready(function () {
        //default
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

        $('.animation_tabs').each(function () {
            var $currentTabGroup = $(this);
            var $firstItem = $currentTabGroup.find('.items_container .item').first();
            $firstItem.addClass('active')
            changePosisionCard($firstItem)
            $("#" + $($firstItem).attr('data-bs-target')).addClass('active')

            $currentTabGroup.find('.items_container .item').on('click', function () {
                $currentTabGroup.find('.items_container .item').removeClass('active');
                $(this).addClass('active');

                $("." + $(this).attr('panels-container') + ".panels_container .tab-pane").removeClass('active')
                $("#" + $(this).attr('data-bs-target')).addClass('active')
                changePosisionCard($(this))
            });
        })
        //

        //animation up tangtoc
        var $firstItem_tangtoc = $('.tangtoc.animation_tabs .items_container .item').first();
        $("#" + $($firstItem_tangtoc).attr('data-bs-target')).addClass('up')

        var tangtoc_panel = $('.tangtoc.tab-content').find('.tab-pane')
        $('.tangtoc.animation_tabs .item').on('click', function () {
            $("." + $(this).attr('panels-container') + ".panels_container .tab-pane").removeClass('up')
            var $currentPanel = $("#" + $(this).attr('data-bs-target'))
            console.log($currentPanel)
            for (let $item of tangtoc_panel) {
                $($item).addClass('up')
                if ($($item).is($currentPanel)) {
                    $($item).addClass('up')
                    return
                }
            }
        })
    })
})(jQuery);