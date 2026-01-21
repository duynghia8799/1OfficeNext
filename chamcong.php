<?php

/**
 * Template Name: Chấm Công 1OfficeNext
 */

get_header(); ?>
<div class="chamcong-page">

<section class="chamcong-hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Đơn giản hoá công tác chấm công cho mọi doanh nghiệp</h1>
                <div>
                    <p class="sub-title-section">Đa dạng hình thức chấm công, quản lý ca làm việc và tự động tổng hợp bảng công toàn doanh nghiệp. Dữ liệu được cập nhật liên tục, giảm sai sót và tăng minh bạch trong quản lý nhân sự</p>
                    <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'button'); ?>
                </div>
            </div>
            <img src="<?= get_template_directory_uri() . '\assets\images\demo\chamcong_hero.svg'; ?>" alt="demo">
        </div>
    </div>
</section>

<section class="chamcong-thaydoi">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Thay đổi hoàn toàn phương thức chấm công truyền thống, <br/>nâng cao mức độ hài lòng của nhân viên</h1>
                <div class="content">
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_out_darkgreen_bg_green.svg" alt="">
                        <p>Theo dõi chính xác giờ vào - ra của nhân viên theo thời gian thực trên một hệ thống</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_out_darkgreen_bg_green.svg" alt="">
                        <p>Quản lý ca làm việc rõ ràng, phù hợp nhiều mô hình làm việc và phòng ban khác nhau</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_out_darkgreen_bg_green.svg" alt="">
                        <p>Cho phép nhân viên làm việc từ xa check-in mọi lúc, mọi nơi một cách thuận tiện</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_out_darkgreen_bg_green.svg" alt="">
                        <p>Giảm đáng kể thời gian xử lý thủ công và hạn chế sai sót trong nghiệp vụ của HR</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_out_darkgreen_bg_green.svg" alt="">
                        <p>Cung cấp cái nhìn tổng thể về thời gian làm việc và hiệu suất nhân sự toàn tổ chức</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_out_darkgreen_bg_green.svg" alt="">
                        <p>Hỗ trợ nhà quản lý kiểm soát hiệu suất và chi phí lao động chính xác, minh bạch hơn</p>
                    </div>
                </div>
                <div class="bottom">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/chamcong_thaydoi.svg" alt="">
                    <p>Giảm thiểu <span>90% thời gian</span> tổng hợp dữ liệu chấm công, giúp doanh nghiệp quản lý ca làm việc minh bạch, tối ưu nguồn lực nhân sự và nâng cao trải nghiệm nhân viên</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chamcong-quanly">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Đánh giá toàn diện hiệu suất làm việc của nhân viên</h1>
                
                
                    <?php 
                    ob_start();
                    get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'chamcong1', 'tabs' => array(
                        [
                            'content_tab' => '
                                <h2> Xây dựng công thức chấm công với AI</h2>
                                <p>Cung cấp công thức tính công tùy chỉnh theo chính sách của doanh <br/>nghiệp: quy định đi muộn, làm thêm giờ, nghỉ giữa ca,…</p>
                            ',
                            'content_panel' => '<img src="'. get_template_directory_uri() .'/assets/images/icons/chamcong_quanly1_1.svg" alt="demo">',
                        ],
                        [
                            'content_tab' => '
                                <h2>Chấm công đa phương thức</h2>
                                <p>Kết nối với 99% máy chấm công với đa dạng hình thức: vân tay, thẻ từ, <br/>khuôn mặt, GPS, WiFi… Dữ liệu tự động đồng bộ về hệ thống tập trung</p>
                            ',
                            'content_panel' => '<img src="'. get_template_directory_uri() .'/assets/images/icons/chamcong_quanly1_2.svg" alt="demo">',
                        ],
                        [
                            'content_tab' => '
                                <h2>Tổng hợp công theo thời gian thực</h2>
                                <p>HR và quản lý có thể dễ dàng theo dõi dữ liệu công của toàn bộ nhân <br/>viên theo thời gian thực mà không cần chờ đến cuối tháng</p>
                            ',
                            'content_panel' => '<img src="'. get_template_directory_uri() .'/assets/images/icons/chamcong_quanly1_3.svg" alt="demo">',
                        ],
                    ))); 
                    $content_chamcong_quanly1 = ob_get_clean();

                    ob_start();
                    get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'chamcong2', 'tabs' => array(
                        [
                            'content_tab' => '
                                <h2>Quản lý đa dạng ca làm việc</h2>
                                <p>Hỗ trợ đầy đủ các hình thức ca: hành chính, ca gãy, ca xoay, ca đêm… <br/>giúp HR dễ dàng thiết lập, điều chỉnh và theo dõi theo thực tế vận hành</p>
                            ',
                            'content_panel' => '<img src="'. get_template_directory_uri() .'/assets/images/icons/chamcong_quanly2_1.svg" alt="demo">',
                        ],
                        [
                            'content_tab' => '
                                <h2>Phân ca linh hoạt theo thực tế</h2>
                                <p>Phân ca nhanh cho nhân viên theo nhiều mô hình làm việc khác nhau. <br/>Đảm bảo ca làm phù hợp thực tế vận hành và hạn chế xung đột lịch</p>
                            ',
                            'content_panel' => '<img src="'. get_template_directory_uri() .'/assets/images/icons/chamcong_quanly2_2.svg" alt="demo">',
                        ],
                        [
                            'content_tab' => '
                                <h2>Đăng ký và đổi ca trực tuyến</h2>
                                <p>Cho phép nhân viên chủ động đăng ký hoặc đổi ca trực tuyến. Quản lý <br/>phê duyệt minh bạch, tối ưu phân bổ nguồn lực</p>
                            ',
                            'content_panel' => '<img src="'. get_template_directory_uri() .'/assets/images/icons/chamcong_quanly2_3.svg" alt="demo">',
                        ],
                    )));
                    $content_chamcong_quanly2 = ob_get_clean();
                    ?>
                <div class="tabs-wrapper">
                    <?php
                    get_template_part('template-parts/tabs/animation_tab', null, array('name' => 'chamcong-quanly-main', 'tabs' => array(
                        [
                            'title' => 'Chấm công',
                            'icon' => '/assets/images/icons/chamcong_quanly_main_item1.svg',
                            'icon_active' => '/assets/images/icons/chamcong_quanly_main_item_active1.svg',
                            'content_panel' => $content_chamcong_quanly1,
                        ],
                        [
                            'title' => 'Phân ca',
                            'icon' => '/assets/images/icons/chamcong_quanly_main_item2.svg',
                            'icon_active' => '/assets/images/icons/chamcong_quanly_main_item_active2.svg',
                            'content_panel' => $content_chamcong_quanly2,
                        ]
                    )));
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


</div>
<?php get_footer(); ?>