(function ($) {
    $(document).ready(function () {
        const $navMenus = $('nav .nav-menu > li.menu-item');
        const $megaMenu = $('.mega-menu');
        const $navActions = $('header .search_btn, header .language_btn');

        $navMenus.each(function (index) {
            const item = this;
            if (index === 0) {
                $(this).addClass('menu-item-has-children') // Để hiện arrow down như những item có submenu khác
            }

            $(item).click(function (e) {
                const $target = $(e.target);

                if ($target.closest('.sub-menu').length > 0) {
                    return true;
                } else {
                    if (index === 0) {
                        $megaMenu.toggleClass('active');
                        $navActions.removeClass('active');
                    } else {
                        if ($(this).hasClass('menu-item-has-children')) {
                            $megaMenu.removeClass('active');
                            $navActions.removeClass('active');
                        }
                    }

                    $navMenus.not(this).removeClass('active');
                    $(this).toggleClass('active');

                    e.preventDefault();
                    e.stopPropagation();
                }
            });
        });

        $navActions.click(function (e) {
            const $target = $(e.target);
            if ($target.closest('.form-search').length > 0) {
                return false;
            }

            $navActions.not(this).removeClass('active');
            $navMenus.removeClass('active');
            $megaMenu.removeClass('active');
            $(this).toggleClass('active');
        });

        $(this).click(function (e) {
            const $target = $(e.target);

            if ($target.closest('header').length === 0) {
                $navMenus.removeClass('active');
                $megaMenu.removeClass('active');
                $navActions.removeClass('active');
            }
        });
    });
})(jQuery);

