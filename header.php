<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="container header_container">
            <div class="row">
                <div class="col-xl-2">
                    <div class="start">
                        <img class="" src=<?= get_template_directory_uri() . "/assets/images/Logo1office.svg" ?> alt="">
                    </div>
                </div>
                <div class="col-xl-8">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'navbar_desktop',
                        'container'      => 'nav',
                        'container_class' => 'main-nav',
                        'menu_class'     => 'nav-menu',
                    ));
                    ?>
                </div>
                <div class="col-xl-2 d-flex justify-content-end">
                    <div class="end">

                        <button class="search_btn">
                            <img src=<?= get_template_directory_uri() . "/assets/images/LogoSearch.svg" ?> alt="">
                        </button>
                        <div class="search_box">
                            <button class="search_box_btn">
                                <img src=<?= get_template_directory_uri() . "/assets/images/LogoSearch.svg" ?> alt="">
                            </button>
                            <input class="search_box_input" type="text" placeholder="Nhập">
                        </div>

                        <button class="language_btn">
                            <img class src=<?= get_template_directory_uri() . "/assets/images/LogoLanguage.svg" ?>
                                alt="icon">
                            <p>VIE</p>
                        </button>
                        <div class="language_box">
                            <button class="Vietnam">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/flags/Vietnam.svg"
                                    alt="icon">
                                <p>Tiếng Việt</p>
                                <img class="checked"
                                    src="<?= get_template_directory_uri() ?>/assets/images/Vchecked.svg" alt="icon">
                            </button>
                            <button class="USA">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/flags/USA.svg" alt="icon">
                                <p>English</p>
                                <img class="checked"
                                    src="<?= get_template_directory_uri() ?>/assets/images/Vchecked.svg" alt="icon">
                            </button>
                        </div>

                        <button class="register_btn">Đăng Ký</button>
                    </div>
                </div>
            </div>
        </div>

        <!--- chat bot -->




        <!-- đang làm regester-->
        <div class="register_backdrop" style="opacity: 0; pointer-events:none ;">
            <div class="register_window">
                <button class="register_close">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Close_btn.svg" alt="">
                </button>
                <h1>ĐĂNG KÝ NHẬN TƯ VẤN 1OFFICE</h1>
                <p>Trải nghiệm để khám phá những tính năng tuyệt vời 1Office mang lại.
                    Phần mềm phù hợp sử dụng cho doanh nghiệp trên 10 nhân sự</p>
                <form class="register_form" action="">
                    <input class="field full" type="text" placeholder="">
                </form>
            </div>
        </div>
        <!-- đang làm regester-->

        <?php get_template_part('template_parts/header/header_mega_menu') ?>
    </header>



    <div class="chatbot_container">
        <div class="chatbot_content">
            <img class="logo_1office_chatbot"
                src="<?= get_template_directory_uri() ?>/assets/images/Logo1office_white.svg" alt="">
            <h2>1Office</h2>
            <p class="slogan">Trợ lý 1AI sẵn sàng hỗ trợ bạn!</p>
            <div class="chatbot_options">
                <button class="chatbot_options_chat">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/chatbot_option_chat.svg" alt="">
                    <div>
                        <h3>Chat</h3>
                        <p>Tư vấn tự động với Trợ lý AI</p>
                    </div>
                    <img class="chevron" src="<?= get_template_directory_uri() ?>/assets/images/Chevron_right.svg"
                        alt="">
                </button>
                <button>
                    <img src="<?= get_template_directory_uri() ?>/assets/images/chatbot_option_call.svg" alt="">
                    <div>
                        <h3>Hotline 083 483 8888</h3>
                        <p>Tư vấn trực tiếp qua điện thoại</p>
                    </div>
                    <img class="chevron" src="<?= get_template_directory_uri() ?>/assets/images/Chevron_right.svg"
                        alt="">

                </button>
                <button>
                    <img src="<?= get_template_directory_uri() ?>/assets/images/chatbot_option_zalo.svg" alt="">
                    <div>
                        <h3>Zalo</h3>
                        <p>Kết nối và trao đổi qua Zalo</p>
                    </div>
                    <img class="chevron" src="<?= get_template_directory_uri() ?>/assets/images/Chevron_right.svg"
                        alt="">

                </button>
            </div>
        </div>
        <button class="chatbot_btn">
            <img class="open" src="<?= get_template_directory_uri() ?>/assets/images/chatbot_btn.svg" alt="">
            <img class="close" src="<?= get_template_directory_uri() ?>/assets/images/chatbot_btn_close.svg" alt="">
        </button>
        <!--demo-->
        <img class="chatbot_chatbox" src="<?= get_template_directory_uri() ?>/assets/images/demo/chatbot_chatbox.svg"
            alt="">
    </div>