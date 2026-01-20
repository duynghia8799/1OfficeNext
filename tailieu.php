<?php

/**
 * Template Name: Tài liệu 1OfficeNext
 */

get_header(); ?>

<div class="tailieu-page">

<section class="tailieu-hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section"><span>Số hoá và quản lý</span> tài liệu tập trung</h1>
                <p class="sub-title-section">Lưu trữ và quản lý tập trung toàn bộ tài nguyên ngay trên một phần mềm, giúp <br/>người dùng tiết kiệm thời gian tìm kiếm và hạn chế tối đa tình trạng thất lạc tài liệu</p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'button'); ?>  
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tailieu_hero.svg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="tailieu-hero-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tailieu_hero_item1.svg" alt="">
                        <h2>Hạn chế rủi ro thất lạc</h2>
                        <p>Mọi tài liệu nội bộ được lưu trữ tập trung, <br/>phân quyền chặt chẽ giúp đảm bảo an <br/>toàn và kiểm soát truy cập hiệu quả</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tailieu_hero_item2.svg" alt="">
                        <h2>Cập nhật nhanh chóng</h2>
                        <p>Cho phép chỉnh sửa, thảo luận và cập <br/>nhật tài liệu ngay trên hệ thống, giúp đội <br/>ngũ luôn làm việc với thông tin mới nhất</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tailieu_hero_item3.svg" alt="">
                        <h2>Kho tri thức tập trung</h2>
                        <p>Dễ dàng tìm kiếm, truy cập & sử dụng tài <br/>liệu theo đúng phòng ban, chủ đề hoặc <br/>danh mục đã được tổ chức khoa học</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tailieu_hero_item4.svg" alt="">
                        <h2>Đảm bảo tính nhất quán</h2>
                        <p>Các mẫu tài liệu, hướng dẫn và quy định <br/>được tập trung quản lý, giảm sai sót và <br/>giúp thống nhất quy trình làm việc</p>
                    </div>
                </div>
                <div class="bottom">
                    <div class="left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/awward_green.svg" alt="">
                        <p>Đảm bảo tính đồng bộ và bảo mật</p>
                    </div>
                    <p>Chia sẻ, lưu trữ và sử dụng tài liệu một cách khoa học, minh bạch và đồng bộ trên cùng một hệ thống.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tailieu-quanly">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Quản lý và lưu trữ tài liệu thống nhất toàn doanh nghiệp</h1>
                <?php get_template_part('template-parts/tabs/animation_tab', null, array(
                    'name' => 'tailieu-quanly',
                    'tabs' => array(
                        [
                            'title' => 'Thêm tài liệu',
                            'icon' => '/assets/images/icons/tailieu_quanly_item1.svg',
                            'content_panel' => '
                                <div class="content">
                                    <h2>Xây dựng kho tài liệu tập trung</h2>
                                    <div class="item">
                                        <img src="' . get_template_directory_uri() . '/assets/images/icons/V_yellow.svg" alt="">
                                        <p><span>Tạo thư mục theo phòng ban, dự án</span> hoặc chủ đề giúp doanh <br/>nghiệp xây dựng kho tài liệu chuẩn ngay từ đầu</p>
                                    </div>
                                    <div class="item">
                                        <img src="' . get_template_directory_uri() . '/assets/images/icons/V_yellow.svg" alt="">
                                        <p><span>Hỗ trợ đa định dạng file:</span> Word, Excel, PDF,... lưu trữ tài liệu từ công <br/>việc, dự án, khách hàng hoặc các nguồn khác trên hệ thống</p>
                                    </div>
                                </div>
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/tailieu_quanly_1.svg" alt="demo">
                            ',
                        ],
                        [
                            'title' => 'Quản lý',
                            'icon' => '/assets/images/icons/tailieu_quanly_item2.svg',
                            'content_panel' => '
                                <div class="content">
                                    <h2>Quản lý phiên bản và trạng thái tài liệu</h2>
                                    <div class="item">
                                        <img src="' . get_template_directory_uri() . '/assets/images/icons/V_yellow.svg" alt="">
                                        <p><span>Theo dõi hiệu lực, tình trạng cập nhật,</span> chỉnh sửa hoặc thay đổi để <br/>đảm bảo mọi người dùng luôn truy cập đúng phiên bản</p>
                                    </div>
                                    <div class="item">
                                        <img src="' . get_template_directory_uri() . '/assets/images/icons/V_yellow.svg" alt="">
                                        <p><span>Tuỳ chọn hiển thị tài liệu</span> theo dạng danh sách, lưới hoặc preview <br/>để phù hợp với nhu cầu từng người dùng</p>
                                    </div>
                                </div>
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/tailieu_quanly_2.svg" alt="demo">
                            ',
                        ],
                        [
                            'title' => 'Bảo mật',
                            'icon' => '/assets/images/icons/tailieu_quanly_item3.svg',
                            'content_panel' => '
                                <div class="content">
                                    <h2>Kiểm soát quyền truy cập và bảo mật dữ liệu</h2>
                                    <div class="item">
                                        <img src="' . get_template_directory_uri() . '/assets/images/icons/V_yellow.svg" alt="">
                                        <p><span>Cài đặt quyền xem, sửa, tải hoặc xóa</span> theo người dùng, phòng ban <br/>hoặc cấp quản lý</p>
                                    </div>
                                    <div class="item">
                                        <img src="' . get_template_directory_uri() . '/assets/images/icons/V_yellow.svg" alt="">
                                        <p><span>Tự động lưu người tạo, thời gian tạo</span> và loại tài liệu để thuận tiện <br/>cho quản lý và truy xuất sau này</p>
                                    </div>
                                </div>
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/tailieu_quanly_3.svg" alt="demo">
                            ',
                        ],
                        [
                            'title' => 'Tìm kiếm',
                            'icon' => '/assets/images/icons/tailieu_quanly_item4.svg',
                            'content_panel' => '
                                <div class="content">
                                    <h2>Tìm kiếm và truy xuất tài liệu nhanh chóng</h2>
                                    <div class="item">
                                        <img src="' . get_template_directory_uri() . '/assets/images/icons/V_yellow.svg" alt="">
                                        <p><span>Tìm tài liệu đa tiêu chí</span>, theo từ khóa tên, loại file, ngày tạo hoặc <br/>người cập nhật chỉ trong vài giây</p>
                                    </div>
                                    <div class="item">
                                        <img src="' . get_template_directory_uri() . '/assets/images/icons/V_yellow.svg" alt="">
                                        <p><span>Lọc theo trạng thái, nhóm tài liệu,</span> phòng ban giúp khoanh vùng <br/>nhanh thông tin cần thiết</p>
                                    </div>
                                </div>
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/tailieu_quanly_4.svg" alt="demo">
                            ',
                        ],
                    )
                )); ?>
            </div>
        </div>
    </div>
</section>

<section class="tailieu-tangtoc">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Tăng tốc tra cứu, đối chiếu và phân tích tài liệu với AI</h1>
                <div class="content">
                    <div class="item">
                        <h3>Truy xuất thông tin tức thì</h3>
                        <p>Tự động quét toàn bộ tài liệu, quy trình và dữ <br/>liệu liên quan để trả lời chính xác các câu hỏi, <br/>giúp người dùng tìm thông tin mà không cần <br/>mở từng file</p>
                    </div>
                    <div class="item">
                        <h3>Đối chiếu dữ liệu thông minh</h3>
                        <p>So sánh nội dung tài liệu với dữ liệu thực tế <br/>hoặc chính sách áp dụng, nhanh chóng phát <br/>hiện sai lệch và đưa ra nhận định trung thực <br/>giúp người dùng quyết đinh chuẩn xác</p>
                    </div>
                    <div class="item">
                        <h3>Tóm tắt tài liệu theo ngữ cảnh</h3>
                        <p>Phân tích nội dung dài, trích xuất các điểm <br/>quan trọng và trình bày ngắn gọn theo đúng <br/>nhu cầu người dùng, hỗ trợ đọc - hiểu tài liệu <br/>chỉ trong vài giây</p>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tailieu_tangtoc.svg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="tailieu-kho">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="content">
                    <h1 class="title-section">Kho tài liệu trực tuyến <br/>dành cho mọi phòng ban</h1>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/V_circle_white_bg_orange.svg" alt="">
                        <p>Giao diện trực quan</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/V_circle_white_bg_orange.svg" alt="">
                        <p>Sắp xếp và phân loại khoa học</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/V_circle_white_bg_orange.svg" alt="">
                        <p>Truy xuất nhanh chóng</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/V_circle_white_bg_orange.svg" alt="">
                        <p>Phân quyền chặt chẽ</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/V_circle_white_bg_orange.svg" alt="">
                        <p>Theo dõi lịch sử thao tác</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/V_circle_white_bg_orange.svg" alt="">
                        <p>Lưu trữ tài liệu đa nguồn</p>
                    </div>
                    <div class="buttons">
                        <button><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tailieu_phone_btn1.svg" alt=""></button>
                        <button><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tailieu_phone_btn2.svg" alt=""></button>
                    </div>
                </div>
                <img class="phones" src="<?php echo get_template_directory_uri(); ?>/assets/images/tailieu_phone.svg" alt="">
            </div>
        </div>
    </div>
</section>

<?php 
$slider_data_source = require get_template_directory() . '/data/slider_data.php';
get_template_part('template-parts/callout_parts/tintuong_slider', null, $slider_data_source['data1']); 
?>


<section class="top-footer">
    <img class="top-footer-bg" src="<?= get_template_directory_uri() . '/assets/images/ai_light_bg_darkgreen.svg' ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="content">
                <h1 class="title-section">Chuẩn hoá kho tài liệu, truy xuất nhanh chóng <br/>và quản lý hiệu quả hơn</h1>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template') ?>
            </div>
        </div>
    </div>
</section>



</div>

<?php get_footer(); ?>