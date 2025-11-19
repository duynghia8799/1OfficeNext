<footer>
    <div class="container footer_content">
        <div class="row top_content">
            <div class="col-xl-4">
                <div class="left">
                    <h1>CÔNG TY CỔ PHẦN 1OFFICE</h1>
                    <div class='content'>
                        <div class='field'>
                            <p class="field_name">Trụ sở chính:</p>
                            <p>Tầng 3, Tòa G2 Five Star, 02 Kim Giang, P. Khương Đình, TP. HN</p>
                        </div>
                        <div class='field'>
                            <p class="field_name">VP. HCM:</p>
                            <p>Lầu 3, số 222 Hoàng Hoa Thám, P. Bảy Hiền, TP. HCM</p>
                        </div>
                        <div class='field_row'>
                            <p class="field_name">Hotline:</p>
                            <p>(+84) 83 483 8888</p>
                        </div>
                        <div class='field_row'>
                            <p class="field_name">Email:</p>
                            <p>Support@1office.vn</p>
                        </div>
                        <div class='field_row'>
                            <p class="field_name">Mã số thuế:</p>
                            <p>0106920494</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_desktop',
                    'container'      => 'div',
                    'container_class' => 'menu_footer',
                    'menu_class'     => 'foot_menu',
                    'depth' => 2,
                ));
                ?>
            </div>
        </div>
        <div class="line"></div>
        <div class="row">
            <div class="col-2">
                <div class="media_link_container">
                    <a class="media_link" href="#">
                        <img src="<?= get_template_directory_uri() . '/assets/images/Logos/facebook.svg' ?>" alt="">
                    </a>
                    <a class="media_link" href="#">
                        <img src="<?= get_template_directory_uri() . '/assets/images/Logos/youtube.svg' ?>" alt="">
                    </a>
                    <a class="media_link" href="#">
                        <img src="<?= get_template_directory_uri() . '/assets/images/Logos/zalo.svg' ?>" alt="">
                    </a>
                    <a class="media_link" href="#">
                        <img src="<?= get_template_directory_uri() . '/assets/images/Logos/linkedin.svg' ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_desktop_2',
                    'container'      => 'div',
                    'container_class' => 'menu_footer_2',
                    'menu_class'     => 'foot_menu_2',
                    'depth' => 1,
                ));
                ?>
            </div>
            <div class="col-2">
                <div class="quality_container">
                    <img src=" <?= get_template_directory_uri() . '/assets/images/Logos/bocongthuong.svg' ?>" alt="">
                    <img src="<?= get_template_directory_uri() . '/assets/images/Logos/iso.svg' ?>" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="apps_store">
                <a href="#">
                    <img src="<?= get_template_directory_uri() . '/assets/images/googlestore_btn.svg' ?>" alt="">
                </a>
                <a href="#">
                    <img src=" <?= get_template_directory_uri() . '/assets/images/applestore_btn.svg' ?>" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="Copyright">
        © Copyright 2015 - 2025 1Office Software. All Right Reserved
    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>