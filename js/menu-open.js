(function ($) {
    $(document).ready(function () {

        let checkBanggia = false
        let checkMegamenu = false

        $(".banggia").click(function (event) {
            if (!checkBanggia) {
                $(this).find("ul").toggleClass("open");
                $(".mega_menu").removeClass("open");
                checkMegamenu = false
                checkBanggia = true
            } else {
                $(this).find("ul").removeClass("open")
                checkBanggia = false
            }
        })



        $(".tinhnang").click(function (event) {
            if (!checkMegamenu) {
                $(".mega_menu").toggleClass("open");
                $(".banggia ul").removeClass("open");
                $(".items_1work").addClass("open");
                $(".items_1hrm").removeClass("open");
                $(".items_1wcrm").removeClass("open");
                checkBanggia = false
                checkMegamenu = true
            } else {
                $(".mega_menu").css({ 'transition': 'all 0.3s ease', })
                $(".mega_menu").removeClass("open")
                checkMegamenu = false
                $(".items_1work").removeClass("open");
                $(".items_1hrm").removeClass("open");
                $(".items_1crm").removeClass("open");

            }
        })

        //mega menu
        function setActiveCat(active_class) {
            $('.mega_menu_cat_btn').removeClass('active');
            $(`.${active_class}`).addClass('active');
        }
        setActiveCat("cat_1work");
        let check1work = true
        let check1hrm = false
        let check1crm = false
        var chevronPath = openmenu_Config.template_uri + '/assets/images/Chevron_right.svg';
        var chevronPathHover = openmenu_Config.template_uri + '/assets/images/Chevron_blue_right.svg';
        $(".cat_1work").click(function () {
            if (!check1work) {
                $(".items_1hrm").removeClass("open");
                check1hrm = false
                $(".items_1crm").removeClass("open");
                check1crm = false
                $(".items_1work").addClass("open");
                check1work = true
                setActiveCat("cat_1work")
                $(".truycap").attr('href', '#')
                $(".truycap").html('Truy cập 1Work <img src="' + chevronPath + '" alt="icon"> <img class="hover" src="' + chevronPathHover + '" alt="icon"></img>')
            }
        })

        $(".cat_1hrm").click(function () {
            if (!check1hrm) {
                $(".items_1crm").removeClass("open");
                check1crm = false
                $(".items_1work").removeClass("open");
                check1work = false
                $(".items_1hrm").addClass("open");
                check1hrm = true
                setActiveCat("cat_1hrm")
                $(".truycap").attr('href', '#')
                $(".truycap").html('Truy cập 1HRM <img src="' + chevronPath + '" alt="icon"> <img class="hover" src="' + chevronPathHover + '" alt="icon"></img>')
            }
        })
        $(".cat_1crm").click(function () {
            if (!check1crm) {
                $(".items_1work").removeClass("open");
                check1work = false
                $(".items_1hrm").removeClass("open");
                check1hrm = false
                $(".items_1crm").addClass("open");
                check1crm = true
                setActiveCat("cat_1crm")
                $(".truycap").attr('href', '#')
                $(".truycap").html('Truy cập 1CRM <img src="' + chevronPath + '" alt="icon"> <img class="hover" src="' + chevronPathHover + '" alt="icon"></img>')
            }
        })
    });
})(jQuery);

