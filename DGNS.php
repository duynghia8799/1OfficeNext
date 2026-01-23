<?php

/**
 * Template Name: Đánh giá nhân sự 1OfficeNext
 */

get_header(); ?>
<div class="DGNS-page">

<section class="DGNS-hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Đánh giá nhân sự công bằng, minh bạch</h1>
                <p class="sub-title-section">Xây dựng hệ thống đánh giá nhân sự toàn diện theo khung năng lực, cung cấp <br/>dữ liệu chính xác cho quản trị và phát triển đội ngũ dài hạn</p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'button'); ?>
                
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/demo/DGNS_hero.svg'; ?>" alt="demo">
            </div>
        </div>
    </div>
    <div class="shadow-box"></div>
</section>

<section class="DGNS-hero-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Được tin dùng từ <span>6.000+</span> tổ chức và doanh nghiệp</h2>
                <div class="run-bar">
                    <img class="demo-img" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero_bar.svg'; ?>" alt="demo">                    
                    <img class="demo-img" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero_bar.svg'; ?>" alt="demo">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="DGNS-pain-points">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title-section">60% hoạt động đánh giá nhân sự <br/>đang không tạo ra giá trị thực</h2>
                <div class="pain-point-grid">
                    <div class="pain-point-item">
                        <img class="icon" src="<?php echo get_template_directory_uri() . '/assets/images/icons/DGNS_pain_item1.svg'; ?>" alt="">
                        <h3>Thiếu chuẩn năng lực</h3>
                        <p>Mỗi phòng ban một cách đánh giá, kết quả thiếu nhất quán và không phản ánh đúng thực tế</p>
                    </div>
                    <div class="pain-point-item">
                        <img class="icon" src="<?php echo get_template_directory_uri() . '/assets/images/icons/DGNS_pain_item2.svg'; ?>" alt="">
                        <h3>Quy trình đánh giá rời rạc</h3>
                        <p>Đánh giá qua nhiều file và công cụ khiến việc tổng hợp chậm, dễ sai sót và khó kiểm soát</p>
                    </div>
                    <div class="pain-point-item">
                        <img class="icon" src="<?php echo get_template_directory_uri() . '/assets/images/icons/DGNS_pain_item3.svg'; ?>" alt="">
                        <h3>Đánh giá không hiệu quả</h3>
                        <p>Đánh giá không gắn với KPI, OKR hay đào tạo nên không tạo ra cải thiện thực chất</p>
                    </div>
                    <div class="pain-point-item">
                        <img class="icon" src="<?php echo get_template_directory_uri() . '/assets/images/icons/DGNS_pain_item4.svg'; ?>" alt="">
                        <h3>Đánh giá thiếu minh bạch</h3>
                        <p>Tiêu chí không rõ ràng, phản hồi thiếu cụ thể làm giảm niềm tin và động lực phát triển</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="DGNS-thietlap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title-section">Thiết lập tiêu chí đánh giá năng lực nhân sự <br/>linh hoạt theo từng vị trí</h2>
                <div class="tabs-wrapper">
                    <?php get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'DGNS-thietlap-tabs', 'tabs' => array(
                        [
                            'content_tab' => '
                                <h3>Thiết lập khung năng lực theo từng vị trí</h3>
                                <p>Xây dựng khung năng lực riêng cho từng chức danh, xác định rõ nhóm năng lực, tiêu chí đánh giá và mức độ yêu cầu theo từng vai trò công việc</p>
                            ',
                            'content_panel' => '<img src="'.get_template_directory_uri() . '/assets/images/demo/DGNS_thietlap_1.svg" alt="demo">',
                        ],
                        [
                            'content_tab' => '
                                <h3>Cấu hình thang điểm và mức độ năng lực</h3>
                                <p>Thiết lập thang điểm chi tiết cho từng tiêu chí trong khung năng lực, mô tả rõ từng mức đánh giá giúp đảm bảo tính nhất quán và giảm cảm tính khi chấm điểm</p>
                                ',
                            'content_panel' => '<img src="'.get_template_directory_uri() . '/assets/images/demo/DGNS_thietlap_2.svg" alt="demo">',
                        ],
                        [
                            'content_tab' => '
                                <h3>Áp dụng khung năng lực vào mẫu đánh giá </h3>
                                <p>Gắn khung năng lực vào các mẫu đánh giá theo vị trí, thiết lập trọng số và điểm yêu cầu, đảm bảo việc đánh giá bám sát đúng năng lực cốt lõi của từng vai trò</p>
                                ',
                            'content_panel' => '<img src="'.get_template_directory_uri() . '/assets/images/demo/DGNS_thietlap_3.svg" alt="demo">',
                        ],
                ))); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="DGNS-hethong">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Hệ thống chấm điểm và đánh giá năng lực tự động</h1>
                <div class="tabs-wrapper">
                    <?php get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'DGNS-hethong-tabs', 'tabs' => array(
                        [
                            'content_tab' => '<p>Hỗ trợ nhiều phương thức đánh giá</p>',
                            'content_panel' => '
                                <div class="content">
                                   <p>Hỗ trợ nhiều hình thức đánh giá như tự đánh giá, <br/>quản lý đánh giá, đánh giá 360 độ từ nhiều cấp, <br/>phù hợp với từng mô hình tổ chức</p>
                                </div>
                                <div class="image">
                                    <img src="'.get_template_directory_uri() . '/assets/images/demo/DGNS_hethong_1.svg" alt="demo">
                                </div>
                            ',
                        ],
                        [
                            'content_tab' => '<p>Phiếu đánh giá chi tiết theo tiêu chí</p>',
                            'content_panel' => '
                                <div class="content">
                                   <p>Mỗi phiếu đánh giá hiển thị đầy đủ tiêu chí, thang <br/>điểm và mức độ yêu cầu, giúp người đánh giá chấm <br/>điểm rõ ràng, nhất quán</p>
                                </div>
                                <div class="image">
                                    <img src="'.get_template_directory_uri() . '/assets/images/demo/DGNS_hethong_2.svg" alt="demo">
                                </div>
                            ',
                        ],
                        [
                            'content_tab' => '<p>Chấm điểm và xếp hạng tự động</p>',
                            'content_panel' => '
                                <div class="content">
                                   <p>Hệ thống tự động tổng hợp điểm theo tiêu chí, <br/>trọng số và người đánh giá, giảm thao tác thủ công <br/>và hạn chế sai sót</p>
                                </div>
                                <div class="image">
                                    <img src="'.get_template_directory_uri() . '/assets/images/demo/DGNS_hethong_3.svg" alt="demo">
                                </div>
                            ',
                        ],
                        [
                            'content_tab' => '<p>Trực quan hóa kết quả đánh giá</p>',
                            'content_panel' => '
                                <div class="content">
                                   <p>Hiển thị kết quả đánh giá bằng bảng tổng hợp và <br/>biểu đồ năng lực, giúp HR và quản lý nhanh chóng <br/>nắm bắt mức độ đáp ứng của từng nhân sự</p>
                                </div>
                                <div class="image">
                                    <img src="'.get_template_directory_uri() . '/assets/images/demo/DGNS_hethong_4.svg" alt="demo">
                                </div>
                            ',
                        ],
                ))); 
                get_template_part('template-parts/tabs/tab_navigation', null, array('icons' => array(
                    'prev' => '/assets/images/icons/chevron_white_l.svg', 
                    'next' => '/assets/images/icons/chevron_white_r.svg',
                )));
                ?>
                </div>
            </div>
        </div>
    </div>
</section >

<section class="DGNS-caithien">
    <div class="shadow-box"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Cải thiện hiệu quả đánh giá năng lực</h1>
                <div class="tabs-wrapper">
                <?php get_template_part('template-parts/tabs/animation_tab', null, array('name' => 'DGNS-caithien-tabs', 'tabs' => array(
                    [
                        'title' => 'Tích hợp đánh giá với KPI & OKR',
                        'content_panel' => '
                            <p>Kết nối kết quả đánh giá năng lực với KPI và OKR để phản ánh đầy đủ hiệu suất làm việc <br/>thực tế, không chỉ dựa trên kết quả đầu ra mà còn trên năng lực thực thi</p>
                            <button><p>TÌM HIỂU THÊM</p><div></div></button>
                            <img src="'.get_template_directory_uri() . '/assets/images/demo/DGNS_caithien_1.svg" alt="demo">
                            
                        ',
                    ],
                    [
                        'title' => 'Lộ trình phát triển cá nhân (IDP)',
                        'content_panel' => '
                            <p>Dựa trên kết quả đánh giá, hệ thống đề xuất lộ trình phát triển và đào tạo phù hợp cho <br/>từng nhân sự, gắn với mục tiêu công việc và định hướng phát triển dài hạn</p>
                            <button><p>TÌM HIỂU THÊM</p><div></div></button>
                            <img src="'.get_template_directory_uri() . '/assets/images/demo/DGNS_caithien_2.svg" alt="demo">
                            
                        ',
                    ],
                ))); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="DGNS-danhgia">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box-content">                
                    <h1 class="title-section">Đánh giá năng lực dựa trên dữ liệu</h1>
                    <div class="content">
                        <div class="item">
                            <img src="<?= get_template_directory_uri() . '/assets/images/icons/DGNS_danhgia_item1.svg' ?>" alt="icon">
                            <div>
                                <h3>Chuẩn hóa khung năng lực</h3>
                                <p>Đánh giá nhân sự dựa trên khung năng lực rõ ràng cho từng vị trí và vai trò <br/>công việc. Giảm cảm tính trong đánh giá, chuẩn hóa tiêu chí và duy trì tính <br/>nhất quán trên toàn tổ chức</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri() . '/assets/images/icons/DGNS_danhgia_item2.svg' ?>" alt="icon">
                            <div>
                                <h3>Phân tích kết quả đánh giá với AI</h3>
                                <p>AI tự động tổng hợp, phân tích và trực quan hóa kết quả đánh giá dưới <br/>dạng biểu đồ và dashboard. Cho phép so sánh năng lực, theo dõi xu hướng <br/>và ra quyết định dựa trên dữ liệu</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri() . '/assets/images/icons/DGNS_danhgia_item3.svg' ?>" alt="icon">
                            <div>
                                <h3>Đánh giá đa chiều, minh bạch</h3>
                                <p>Hỗ trợ nhiều góc nhìn đánh giá từ quản lý, đồng nghiệp và các phòng ban <br/>liên quan. Quy trình được thiết kế minh bạch, phân quyền rõ ràng, phù hợp <br/>cho quản trị và theo dõi tập trung</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri() . '/assets/images/icons/DGNS_danhgia_item4.svg' ?>" alt="icon">
                            <div>
                                <h3>Gán đánh giá với hiệu suất thực tế</h3>
                                <p>Kết nối kết quả đánh giá năng lực với KPI, OKR và mục tiêu công việc. Phản <br/>ánh chính xác năng lực thực thi, làm cơ sở cho phân công, đào tạo và phát <br/>triển nhân sự</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="image-right" src="<?= get_template_directory_uri() . '\assets\images\DGNS_danhgia.svg' ?>" alt="image">
            </div>
        </div>
    </div>
</section>

<?php 
$slider_data_source = require get_template_directory() . '/data/slider_data.php';
get_template_part('template-parts/callout_parts/tintuong_slider', null, $slider_data_source['data3']); 
?>

<section class="top-footer center">
    <img class="top-footer-bg" src="<?= get_template_directory_uri() . '/assets/images/ai_light_bg_tear.svg' ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="content">
                <h1 class="title-section">Đánh giá năng lực nhân sự dựa trên dữ liệu, quản trị <br/>và phát triên nhân sự hiệu quả hơn</h1>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template') ?>
            </div>
        </div>
    </div>
</section>





</div>
<?php get_footer(); ?>