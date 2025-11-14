(function ($) {
    $(document).ready(function () {

        let checkBanggia = false
        let checkMegamenu = false
        let checkSearchBox = false
        let checkLanguageBox = false
        let checkRegisterWindow = false

        $(".banggia").click(function (event) {
            if (!checkBanggia) {
                $(this).find("ul").addClass("open");
                $(".mega_menu").removeClass("open");
                $(".items_1work").removeClass("open");
                $(".items_1hrm").removeClass("open");
                $(".items_1crm").removeClass("open");
                $(".search_box").removeClass("open")
                $(".language_box").removeClass("open")
                checkBanggia = true
                checkMegamenu = false
                checkSearchBox = false
                checkLanguageBox = false
                checkRegisterWindow = false
            } else {
                $(this).find("ul").removeClass("open")
                checkBanggia = false
            }
        })



        $(".tinhnang").click(function (event) {
            if (!checkMegamenu) {
                $(".mega_menu").addClass("open");
                $(".banggia ul").removeClass("open");
                $(".items_1work").addClass("open");
                $(".items_1hrm").removeClass("open");
                $(".items_1wcrm").removeClass("open");
                $(".search_box").removeClass("open")
                $(".language_box").removeClass("open")
                checkBanggia = false
                checkMegamenu = true
                checkSearchBox = false
                checkLanguageBox = false
                checkRegisterWindow = false
            } else {
                $(".mega_menu").removeClass("open")
                checkMegamenu = false
                $(".items_1work").removeClass("open");
                $(".items_1hrm").removeClass("open");
                $(".items_1crm").removeClass("open");

            }
        })

        $(".search_btn").click(function () {
            if (!checkSearchBox) {
                $(".search_box").addClass("open");
                $(".banggia ul").removeClass("open");
                $(".mega_menu").removeClass("open");
                $(".items_1work").removeClass("open");
                $(".items_1hrm").removeClass("open");
                $(".items_1crm").removeClass("open");
                $(".language_box").removeClass("open")
                checkBanggia = false
                checkMegamenu = false
                checkSearchBox = true
                checkLanguageBox = false
                checkRegisterWindow = false
            } else {
                $(".search_box").removeClass("open")
                checkSearchBox = false
            }
        })

        $(".language_btn").click(function () {
            if (!checkLanguageBox) {
                $(".language_box").addClass("open")
                $(".search_box").removeClass("open");
                $(".banggia ul").removeClass("open");
                $(".mega_menu").removeClass("open");
                $(".items_1work").removeClass("open");
                $(".items_1hrm").removeClass("open");
                $(".items_1crm").removeClass("open");
                checkBanggia = false
                checkMegamenu = false
                checkSearchBox = false
                checkLanguageBox = true
                checkRegisterWindow = false
            } else {
                $(".language_box").removeClass("open")
                checkSearchBox = false
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

