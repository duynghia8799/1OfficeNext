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
                <h1 class="title-section">Quản lý công - ca linh hoạt, chính xác cho <br/>mọi mô hình làm việc</h1>
                
                
                    <?php 
                    ob_start();
                    get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'chamcong-quanly1', 'tabs' => array(
                        [
                            'content_tab' => '
                                <h2> Xây dựng công thức chấm công với AI</h2>
                                <p>Cung cấp công thức tính công tùy chỉnh theo chính sách của doanh <br/>nghiệp: quy định đi muộn, làm thêm giờ, nghỉ giữa ca,…</p>
                            ',
                            'content_panel' => '<img src="'. get_template_directory_uri() .'/assets/images/demo/chamcong_quanly_1.svg" alt="demo">',
                        ],
                        [
                            'content_tab' => '
                                <h2>Chấm công đa phương thức</h2>
                                <p>Kết nối với 99% máy chấm công với đa dạng hình thức: vân tay, thẻ từ, <br/>khuôn mặt, GPS, WiFi… Dữ liệu tự động đồng bộ về hệ thống tập trung</p>
                            ',
                            'content_panel' => '<img src="'. get_template_directory_uri() .'/assets/images/demo/chamcong_quanly_2.svg" alt="demo">',
                        ],
                        [
                            'content_tab' => '
                                <h2>Tổng hợp công theo thời gian thực</h2>
                                <p>HR và quản lý có thể dễ dàng theo dõi dữ liệu công của toàn bộ nhân <br/>viên theo thời gian thực mà không cần chờ đến cuối tháng</p>
                            ',
                            'content_panel' => '<img src="'. get_template_directory_uri() .'/assets/images/demo/chamcong_quanly_3.svg" alt="demo">',
                        ],
                    ))); 
                    $content_chamcong_quanly1 = ob_get_clean();

                    ob_start();
                    get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'chamcong-quanly2', 'tabs' => array(
                        [
                            'content_tab' => '
                                <h2>Quản lý đa dạng ca làm việc</h2>
                                <p>Hỗ trợ đầy đủ các hình thức ca: hành chính, ca gãy, ca xoay, ca đêm… <br/>giúp HR dễ dàng thiết lập, điều chỉnh và theo dõi theo thực tế vận hành</p>
                            ',
                            'content_panel' => '<img src="'. get_template_directory_uri() .'/assets/images/demo/chamcong_quanly_4.svg" alt="demo">',
                        ],
                        [
                            'content_tab' => '
                                <h2>Phân ca linh hoạt theo thực tế</h2>
                                <p>Phân ca nhanh cho nhân viên theo nhiều mô hình làm việc khác nhau. <br/>Đảm bảo ca làm phù hợp thực tế vận hành và hạn chế xung đột lịch</p>
                            ',
                            'content_panel' => '<img src="'. get_template_directory_uri() .'/assets/images/demo/chamcong_quanly_5.svg" alt="demo">',
                        ],
                        [
                            'content_tab' => '
                                <h2>Đăng ký và đổi ca trực tuyến</h2>
                                <p>Cho phép nhân viên chủ động đăng ký hoặc đổi ca trực tuyến. Quản lý <br/>phê duyệt minh bạch, tối ưu phân bổ nguồn lực</p>
                            ',
                            'content_panel' => '<img src="'. get_template_directory_uri() .'/assets/images/demo/chamcong_quanly_6.svg" alt="demo">',
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

<section class="chamcong-sohoa">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Số hoá đơn từ, quản lý phép dễ dàng</h1>
                <div class="tabs-wrapper">
                    <?php
                    get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'chamcong-sohoa', 'tabs' => array(
                        [
                            'content_tab' => '
                                <h2>Số hoá toàn bộ đơn từ</h2>
                                <p>Thay thế đơn giấy bằng hệ thống đơn điện tử tập trung: nghỉ <br/>phép, đi muộn, làm thêm giờ,… giảm xử lý thủ công và thất lạc</p>
                            ',
                            'content_panel' => '
                                <img src="'.get_template_directory_uri().'/assets/images/demo/chamcong_sohoa_1.svg" alt="demo">
                            ',
                        ],
                        [
                            'content_tab' => '
                                <h2>Thiết lập luồng duyệt theo tổ chức</h2>
                                <p>Tuỳ chỉnh quy trình duyệt đơn theo phòng ban, cấp bậc. Hệ thống <br/>tự động chuyển đơn đúng người, đúng bước, đúng thời điểm</p>
                            ',
                            'content_panel' => '
                                <img src="'.get_template_directory_uri().'/assets/images/demo/chamcong_sohoa_2.svg" alt="demo">
                            ',
                        ],
                        [
                            'content_tab' => '
                                <h2>Quản lý và theo dõi phép tập trung</h2>
                                <p>Quản lý phép năm, phép bù, phép tồn của từng nhân viên trên <br/>một bảng tổng hợp giúp HR và quản lý nắm bắt chính xác, không <br/>cần đối soát thủ công</p>
                            ',
                            'content_panel' => '
                                <img src="'.get_template_directory_uri().'/assets/images/demo/chamcong_sohoa_3.svg" alt="demo">
                            ',
                        ],
                        [
                            'content_tab' => '
                                <h2>Tự động cập nhật vào bảng công</h2>
                                <p>Đơn được duyệt sẽ tự động đồng bộ realtime sang dữ liệu chấm <br/>công. Đảm bảo tính công chính xác, nhất quán và kịp thời</p>
                            ',
                            'content_panel' => '
                                <img src="'.get_template_directory_uri().'/assets/images/demo/chamcong_sohoa_4.svg" alt="demo">
                            ',
                        ],


                    )));
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chamcong-hethong">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Hệ thống báo cáo và phân tích dữ liệu <br/>chấm công thông minh</h1>
                <div class="content">
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_out_darkgreen_bg_green.svg" alt="icon">
                        <p>Cung cấp báo cáo chấm công giúp đánh giá hiệu suất nhân sự và mức độ tuân thủ</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_out_darkgreen_bg_green.svg" alt="icon">
                        <p>Theo dõi theo thời gian thực, phát hiện sớm sai lệch để xử lý kịp thời</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_out_darkgreen_bg_green.svg" alt="icon">
                        <p>Phân tích dữ liệu chấm công, hỗ trợ tối ưu nguồn lực và năng suất</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_out_darkgreen_bg_green.svg" alt="icon">
                        <p>Dễ dàng lọc, xem và xuất báo cáo phục vụ tính lương, kiểm tra nội bộ</p>
                    </div>

                </div>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/demo/chamcong_hethong.svg" alt="demo">
            </div>
        </div>
    </div>
</section>

<section class="chamcong-antuong">
    <div class="container">
        <div class="row">
            <div class="col-6 left">
                <h1 class="title-section">Chấm công nhanh chóng, <br/>linh hoạt</h1>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/demo/chamcong_antuong.svg" alt="">
                <?php get_template_part('template-parts/callout_parts/app_btn','button') ?>
            </div>
            <div class="col-6 right">
                <h1 class="title-section">Những con số <br/>ấn tượng</h1>
                <div class="content">
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/chamcong_antuong_item1.svg" alt="icon">
                        <div>
                            <h1 class="title-section">6.000 +</h1>
                            <p>Doanh nghiệp hàng đầu</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/chamcong_antuong_item2.svg" alt="icon">
                        <div>
                            <h1 class="title-section">500K +</h1>
                            <p>Người dùng thường xuyên</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/chamcong_antuong_item3.svg" alt="icon">
                        <div>
                            <h1 class="title-section">259M +</h1>
                            <p>Tổng số chốt vân tay</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/chamcong_antuong_item4.svg" alt="icon">
                        <div>
                            <h1 class="title-section">12.5M +</h1>
                            <p>Tổng số đơn từ</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/chamcong_antuong_item5.svg" alt="icon">
                        <div>
                            <h1 class="title-section">100 +</h1>
                            <p>Ứng dụng thông minh</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/chamcong_antuong_item6.svg" alt="icon">
                        <div>
                            <h1 class="title-section">92K +</h1>
                            <p>Tổng số bảng lương</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<?php 
$slider_data_source = require get_template_directory() . '/data/slider_data.php';
get_template_part('template-parts/callout_parts/tintuong_slider', null, $slider_data_source['data3']); 
?>

<section class="top-footer center">
    <img class="top-footer-bg" src="<?= get_template_directory_uri() . '/assets/images/ai_light_bg_darktear.svg' ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="content">
                <h1 class="title-section">Trải nghiệm hệ thống chấm công - phân ca - quản lý <br/>đơn từ tập trung, minh bạch và dễ mở rộng</h1>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template') ?>
            </div>
        </div>
    </div>
</section>


</div>
<?php get_footer(); ?>