<?php

/**
 * Template Name: Tài sản 1OfficeNext
 */

get_header(); ?>

<div class="taisan-page">

<section class="taisan-hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Giải pháp quản lý tài sản tập trung và minh bạch</h1>
                <p class="sub-title-section">Quản lý xuyên suốt từ khâu mua sắm, cấp phát, sử dụng đến thu hồi tài sản, đảm bảo <br/>dữ liệu nhất quán, minh bạch và dễ dàng kiểm soát</p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'button'); ?>  
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/taisan_hero.svg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="taisan-hero-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>6.000+ doanh nghiệp tin dùng</h2>
                <div class="run-bar">
                    <img class="demo-img" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero_bar.svg'; ?>" alt="demo">                    
                    <img class="demo-img" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero_bar.svg'; ?>" alt="demo">
                </div>
                <div class="content">
                    <div class="item">
                        <img src="" alt="icon">
                        <h2>Quản lý tập trung</h2>
                        <p>Lưu trữ, theo dõi và phân loại tất cả tài sản (máy móc, thiết bị, dụng cụ…) <br/>trên hệ thống, dễ tra cứu và thống kê nhanh chóng</p>
                    </div>
                    <div class="item">
                        <img src="" alt="icon">
                        <h2>Vòng đời tài sản rõ ràng</h2>
                        <p>Theo dõi chi tiết quá trình cấp phát, thu hồi, báo hỏng/mất, bảo hành, <br/>giúp giảm thất thoát và sử dụng hiệu quả hơn</p>
                    </div>
                    <div class="item">
                        <img src="" alt="icon">
                        <h2>Giảm thất thoát, sai sót</h2>
                        <p>Đồng nhất thông tin giữa các phòng ban và cập nhật tình trạng sử dụng tài <br/>sản, giảm sai sót do quản lý thủ công</p>
                    </div>
                    <div class="item">
                        <img src="" alt="icon">
                        <h2>Truy xuất thông tin nhanh chóng</h2>
                        <p>Dashboard tổng quan và bộ lọc linh hoạt giúp truy xuất, kiểm kê và <br/>theo dõi dữ liệu nhanh chóng, chính xác</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="taisan-quanly">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Quản lý, theo dõi và phân loại toàn bộ tài sản, <br/>giúp giảm thiểu thất thoát</h1>
                <?php get_template_part('template-parts/tabs/animation_tab', null, array('name' => 'taisan-quanly', 'tabs' => array(
                    [
                        'title' => 'Quản lý tài sản',
                        'icon' => '',
                        'content_panel' => '
                            <div>
                                <p>Quản lý toàn bộ danh sách tài sản doanh nghiệp trên một hệ thống, hiển thị đầy đủ <br/>thông tin từ mã tài sản, loại, nguyên giá, vị trí đến tình trạng sử dụng,...</p>
                                <img src="' . get_template_directory_uri() . '" alt="icon">
                            </div>
                        ',
                    ],
                    [
                        'title' => 'Phân loại tài sản',
                        'icon' => '',
                        'content_panel' => '
                            <div>
                                <p>Quản lý toàn bộ danh sách tài sản doanh nghiệp trên một hệ thống, hiển thị đầy đủ <br/>thông tin từ mã tài sản, loại, nguyên giá, vị trí đến tình trạng sử dụng,...</p>
                                <img src="' . get_template_directory_uri() . '" alt="icon">
                            </div>
                        ',
                    ],
                    [
                        'title' => 'Thống kê trạng thái',
                        'icon' => '',
                        'content_panel' => '
                            <div>
                                <p>Quản lý toàn bộ danh sách tài sản doanh nghiệp trên một hệ thống, hiển thị đầy đủ <br/>thông tin từ mã tài sản, loại, nguyên giá, vị trí đến tình trạng sử dụng,...</p>
                                <img src="' . get_template_directory_uri() . '" alt="icon">
                            </div>
                        ',
                    ],
                ))); ?>
            </div>
        </div>
    </div>
</section>

<section class="taisan-chuanhoa">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Chuẩn hoá quy trình cấp phát và thu hồi tài sản</h1>
                <?php get_template_part('template-parts/animation_tab2', null, array('name' => 'taisan-chuanhoa', 'tabs' => array(
                    [
                        'content_tab' => '
                            <img src="' . get_template_directory_uri() . '" alt="icon">
                            <div>
                                <h2>Cấp phát tài sản</h2>
                                <p>Thực hiện cấp phát tài sản cho nhân sự hoặc phòng <br/>ban theo quy trình rõ ràng, ghi nhận đầy đủ thông tin <br/>người nhận, thời gian, số lượng và tình trạng,...</p>
                            </div>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <img src="' . get_template_directory_uri() . '" alt="icon">
                            <div>
                                <h2>Thu hồi tài sản</h2>
                                <p>Quản lý quá trình thu hồi tài sản khi nhân sự thay đổi vị <br/>trí, nghỉ việc hoặc kết thúc nhu cầu sử dụng, giúp kiểm <br/>soát chặt chẽ tài sản quay vòng và tránh thất thoát</p>
                            </div>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <img src="' . get_template_directory_uri() . '" alt="icon">
                            <div>
                                <h2>Khấu hao tài sản</h2>
                                <p>Theo dõi khấu hao tài sản tự động theo thời gian sử <br/>dụng, hỗ trợ doanh nghiệp nắm rõ giá trị còn lại của tài <br/>sản và phục vụ hiệu quả cho công tác kế toán, báo cáo</p>
                            </div>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <img src="' . get_template_directory_uri() . '" alt="icon">
                            <div>
                                <h2>Báo hỏng, mất</h2>
                                <p>Ghi nhận nhanh các trường hợp tài sản hư hỏng hoặc <br/>thất lạc, cập nhật trạng thái tài sản và lịch sử xử lý, từ <br/>đó chủ động kiểm soát rủi ro và chi phí phát sinh</p>
                            </div>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '" alt="demo">
                        ',
                    ],
                ))); ?>
            </div>
        </div>
    </div>
</section>

<section class="taisan-tonghop">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <h1 class="title-section">Tổng hợp và truy xuất thông tin <br/>tài sản dễ dàng, tức thì</h1>
                    <div class="content">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/" alt="">
                            <p><span>Tổng hợp nhanh tình hình tài sản</span> trên một màn hình trực quan: <br/>tổng số tài sản, tài sản đang sử dụng, tồn kho, hỏng/mất,...</p>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/" alt="">
                            <p><span>Hệ thống báo cáo theo thời gian, loại tài sản</span>, phòng ban và tình <br/>trạng sử dụng, hỗ trợ theo dõi biến động, đánh giá hiệu quả quản lý</p>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/" alt="">
                            <p><span>Bộ lọc thông minh, linh hoạt theo thời gian</span>, loại tài sản, phòng ban, <br/>trạng thái sử dụng… giúp truy xuất đúng dữ liệu chỉ trong vài giây</p>
                        </div>
                    </div>
                </div>
                <img class="demo" src="<?php echo get_template_directory_uri(); ?>/assets/images/" alt="">
            </div>
        </div>
    </div>
</section>



</div>


<?php get_footer(); ?>
