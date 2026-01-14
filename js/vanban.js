jQuery(document).ready(function($) {
    $('.tabs-navigation .prev-tab, .tabs-navigation .next-tab').click(function(e) {
        e.preventDefault();
        var $button = $(this);
        var $panel = $button.closest('.tabs-panel');
        var $tabsContainer = $panel.find('.animation-tabs .nav-tabs');
        
        if ($tabsContainer.length === 0) return;

        var direction = $button.hasClass('next-tab') ? 'next' : 'prev';
        navigateTab($tabsContainer, direction);
    });

    function navigateTab($tabsContainer, direction) {
        var $activeTab = $tabsContainer.find('.item.active');
        var $tabs = $tabsContainer.find('.item');
        var currentIndex = $tabs.index($activeTab);
        var nextIndex;

        if (direction === 'next') {
            nextIndex = (currentIndex + 1) % $tabs.length;
        } else {
            nextIndex = (currentIndex - 1 + $tabs.length) % $tabs.length;
        }

        $tabs.eq(nextIndex).trigger('click');
    }
});
