<?php

/**
 * Template Name: Social 1Office Next
 */

get_header(); ?>

<div class="social-page">

<section class="social-hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h1 class="title-section">Thúc đẩy truyền thông <br/>nội bộ và văn hoá <br/>doanh nghiệp</h1>
                    <p class="sub-title-section">Xây dựng văn hóa doanh nghiệp vững mạnh với Mạng <br/>nội bộ - giải pháp tối ưu truyền thông, tăng tương tác <br/>và thúc đẩy kết nối giữa mọi nhân viên</p>
                    <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template'); ?>
                </div>
                <div class="demo-container">
                    <img class="demo-img" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero.svg'; ?>" alt="demo">
                    <img class="img-part-1" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero2.svg'; ?>" alt="demo">
                    <img class="img-part-2" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero3.svg'; ?>" alt="demo">
                    <img class="img-part-3" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero4.svg'; ?>" alt="demo">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="social-hero-under">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="run-bar">
                    <img class="demo-img" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero_bar.svg'; ?>" alt="demo">                    
                    <img class="demo-img" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero_bar.svg'; ?>" alt="demo">
                </div>
                <div class="content-container">
                    <div class="item">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icons/social_hero_item1.svg'; ?>" alt="">
                        <h2>Kết nối đội ngũ</h2>
                        <p>Tăng tương tác và kết nối giữa các phòng ban, giúp nhân viên phối hợp <br/>nhanh chóng và hiệu quả</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icons/social_hero_item2.svg'; ?>" alt="">
                        <h2>Giảm tải email</h2>
                        <p>Tập trung trao đổi và thông báo nội bộ trên một nền tảng, hạn chế phân <br/>tán thông tin qua nhiều kênh</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icons/social_hero_item3.svg'; ?>" alt="">
                        <h2>Thông tin minh bạch</h2>
                        <p>Đảm bảo mọi thông tin, văn bản, quyết định quan trọng được truyền tải <br/>kịp thời, đầy đủ, tránh bỏ sót</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icons/social_hero_item4.svg'; ?>" alt="">
                        <h2>Xây dựng văn hóa</h2>
                        <p>Tạo bản sắc nội bộ, lan tỏa giá trị doanh nghiệp qua tin tức, sự kiện và <br/>hoạt động gắn kết nhân viên</p>
                    </div>
                </div>
                <div class="award-container">
                    <div class="stats">
                        <div class="item">
                            <h1>85%</h1>
                            <p>Tăng tốc độ truyền thông nội bộ</p>
                        </div>
                        <div class="item">
                            <h1>60%</h1>
                            <p>Giảm thời gian tìm kiếm thông tin</p>
                        </div>
                        <div class="item">
                            <h1>90%</h1>
                            <p>Tăng mức độ gắn kết và tương tác</p>
                        </div>
                        <div class="item">
                            <h1>75%</h1>
                            <p>Tối ưu hiệu quả phối hợp, cộng tác</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <h2><span>6.000+</span> khách hàng tin dùng thường xuyên</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="social-duytri">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Duy trì không gian làm việc kết nối mọi lúc, mọi nơi</h1>
                <?php
                // --- BUFFERING DUYTRI 1 ---
                ob_start();
                get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'duytri1', 'tabs' => array(
                    [
                        'content_tab' => '
                            <h2>Bảng tin</h2>
                            <p>Đăng thông báo, chia sẻ tin tức, ý tưởng và tạo không gian trao <br/>đổi mở giúp nhân viên tương tác, kết nối và phát triển môi trường <br/>làm việc thân thiện, chuyên nghiệp</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/social_duytri_1.svg" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <h2>Thông báo</h2>
                            <p>Cho phép doanh nghiệp truyền tải thông báo một cách thống <br/>nhất, nhân viên phản hồi trực tiếp và theo dõi luồng trao đổi minh <br/>bạch, giúp giảm hiểu lầm và tăng niềm tin trong nội bộ</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/social_duytri_2.svg" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <h2>Khảo sát</h2>
                            <p>Chia sẻ khảo sát, thu thập ý kiến, đánh giá mức độ gắn kết của tổ <br/>chức, tạo quy trình phản hồi tích cực và thu thập thông tin chuyên <br/>sâu hữu ích để đảm bảo nhân viên luôn có động lực và gắn kết</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/social_duytri_3.svg" alt="demo">
                        ',
                    ],
                )));
                $content_duytri1 = ob_get_clean();

                // --- BUFFERING DUYTRI 2 ---
                ob_start();
                get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'duytri2', 'tabs' => array(
                    [
                        'content_tab' => '
                            <h2>Soạn thảo</h2>
                            <p>Tạo đa dạng bài viết, chia sẻ thông tin lên bảng tin nội bộ với giao <br/>diện soạn thảo trực quan. Giúp bộ phận truyền thông và các <br/>phòng ban dễ dàng lan tỏa thông điệp đến toàn công ty</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/social_duytri_4.svg" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <h2>Bình luận</h2>
                            <p>Nhân viên có thể tương tác, trao đổi trực tiếp dưới từng bài đăng, <br/>đặt câu hỏi, hoặc đóng góp ý kiến. Duy trì luồng thảo luận mở, <br/>tăng sự tương tác và gắn kết giữa các cá nhân, phòng ban</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/social_duytri_5.svg" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <h2>Gắn thẻ</h2>
                            <p>Cho phép gắn thẻ cá nhân hoặc nhóm liên quan, làm rõ trách <br/>nhiệm và nhắc việc kịp thời. Đảm bảo thông tin quan trọng được <br/>truyền đạt đúng người và thúc đẩy phản hồi nhanh trong công việc</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/social_duytri_6.svg" alt="demo">
                        ',
                    ],
                )));
                $content_duytri2 = ob_get_clean();

                // --- BUFFERING DUYTRI 3 ---
                ob_start();
                get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'duytri3', 'tabs' => array(
                    [
                        'content_tab' => '
                            <h2>Nhóm chat</h2>
                            <p>Tạo các nhóm theo phòng ban, dự án hoặc chủ đề để trao đổi tập <br/>trung. Thành viên có thể trò chuyện, chia sẻ tài liệu, thảo luận và <br/>phối hợp xử lý công việc trên cùng một không gian thống nhất</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/social_duytri_7.svg" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <h2>Nhóm thảo luận</h2>
                            <p>Thiết lập các nhóm thảo luận theo nội dung hoặc mục tiêu cụ thể, <br/>giúp nhân viên dễ dàng đặt câu hỏi, chia sẻ quan điểm và trao đổi <br/>chuyên sâu. Mọi thông tin được tổ chức rõ ràng, hiệu quả</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/social_duytri_8.svg" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <h2>Chia sẻ</h2>
                            <p>Cho phép người dùng gửi nhanh bài viết, thông báo hoặc nội dung <br/>quan trọng tới cá nhân hoặc nhóm chat trên hệ thống. Giúp lan tỏa <br/>thông tin kịp thời, đảm bảo mọi người nhận được nội dung cần thiết</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/social_duytri_9.svg" alt="demo">
                        ',
                    ],
                )));
                $content_duytri3 = ob_get_clean();
                ?>

                <?php 
                // --- RENDER MAIN TAB 'DUYTRI' WITH BUFFERED CONTENT ---
                get_template_part('template-parts/tabs/animation_tab', null, array('name' => 'duytri', 'tabs' => array(
                    [
                        'title' => 'Truyền thông',
                        'icon' => '',
                        'content_panel' => $content_duytri1 
                    ],
                    [
                        'title' => 'Tương tác', // Assuming title based on content
                        'icon' => '',
                        'content_panel' => $content_duytri2
                    ],
                    [
                        'title' => 'Phối hợp', // Assuming title based on content
                        'icon' => '',
                        'content_panel' => $content_duytri3
                    ]
                )))
                ?>
            </div>
        </div>
    </div>
</section>

<section class="social-chiase">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Chia sẻ thông tin và lan toả văn hoá doanh nghiệp</h1>
                <div class="content-container">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/demo/social_chiase_demo.svg'; ?>" alt="">
                    <div class="content">
                        <div class="item">
                            <h2>Giao tiếp nội bộ trở nên dễ dàng hơn</h2>
                            <p>Tầm nhìn, định hướng và thông điệp quản trị được truyền tải, lan <br/>toả thống nhất trên một nền tảng chung, đảm bảo luồng thông <br/>tin luôn minh bạch và xuyên suốt</p>
                        </div>
                        <div class="item">
                            <h2>Kết nối và tương tác hai chiều</h2>
                            <p>Tạo kênh tương tác hai chiều, giúp nhà lãnh đạo, quản lý lắng <br/>nghe phản hồi, giải đáp kịp thời và duy trì sự kết nối gần gũi trong <br/>quá trình quản trị</p>
                        </div>
                        <div class="item">
                            <h2>Tăng cường sự gắn kết của nhân viên</h2>
                            <p>Nhân viên có không gian để chia sẻ kiến thức, trải nghiệm công <br/>việc và những khoảnh khắc đời sống cùng đồng nghiệp. Việc <br/>trao đổi diễn ra tự nhiên, chuyên nghiệp, tạo nên môi trường giao <br/>tiếp cởi mở và tin cậy</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>  
    </div>      
</section>

<section class="social-hatnhan">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Mỗi nhân sự đều là một “hạt nhân” quan trọng của tổ chức</h1>
                <?php 
                    $hatnhan_svg = get_template_directory() . '/assets/images/for-animated/social_hatnhan_1_frame.svg';
                    $hatnhan_svg2 = get_template_directory() . '/assets/images/for-animated/social_hatnhan_2_frame.svg';
                ?>
                <div class="social-hatnhan-content">
                    <?php get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'duytri3', 'tabs' => array(
                    [
                        'content_tab' => '
                            <h2>Lộ trình thăng tiến</h2>
                            <p>Hiển thị rõ ràng các vị trí, năng lực & tiêu chí phát triển cho từng <br/>nhân sự. Giúp nhân viên định hình mục tiêu nghề nghiệp, đồng <br/>thời hỗ trợ doanh nghiệp xây dựng chiến lược kế thừa minh <br/>bạch và bền vững</p>
                        ',
                        'content_panel' => file_exists($hatnhan_svg) ? file_get_contents($hatnhan_svg) : '',
                    ],
                    [
                        'content_tab' => '
                            <h2>Quá trình làm việc</h2>
                            <p>Tổng hợp toàn bộ hành trình công tác của từng nhân viên: Lịch <br/>sử vị trí, đánh giá, thành tích và kết quả đào tạo. Doanh nghiệp <br/>có cái nhìn toàn diện để đưa ra quyết định nhân sự chính xác và <br/>công bằng</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/social_hatnhan_2.svg" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <h2>Sơ đồ tổ chức</h2>
                            <p>Trực quan hóa cấu trúc doanh nghiệp theo phòng ban, chức vụ <br/>giúp nhân viên hiểu rõ hơn về vai trò & trách nghiệm của mình <br/>trong tổ chức. BLĐ có cái nhìn tổng quan để quản lý nhân sự <br/>hiệu quả</p>
                        ',
                        'content_panel' =>  file_exists($hatnhan_svg2) ? file_get_contents($hatnhan_svg2) : '',
                    ],
                    )))?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="social-moitruong">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Môi trường làm việc số cho mọi thành viên</h1>
                <div class="social-expand-container">
                    <div class="expand-item active bg1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/social_item_1.svg');">
                        <div class="content">
                            <h2>Nhân sự</h2>
                            <p>Mạng nội bộ trở thành trung tâm thông tin giúp nhân viên cập nhật <br/>tin tức, trao đổi dễ dàng và tiếp cận tài nguyên làm việc mọi lúc</p>
                        </div>
                    </div>
                    <div class="expand-item bg2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/social_item_2.svg');">
                        <div class="content">
                            <h2>Quản lý cấp trung</h2>
                            <p>Hỗ trợ quản lý nắm bắt nhanh tình hình đội ngũ, theo dõi <br/>luồng thông tin và tương tác hai chiều với nhân viên</p>
                        </div>
                    </div>
                    <div class="expand-item bg3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/social_item_3.svg');">
                        <div class="content">
                            <h2>Lãnh đạo & CxO</h2>
                            <p>Cung cấp góc nhìn toàn cảnh về tổ chức, văn hóa, mức độ gắn kết <br/>của nhân và truyền tải thông điệp quan trọng hiệu quả</p>
                        </div>
                    </div>
                    <div class="expand-item bg4" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/social_item_4.svg');">
                        <div class="content">
                            <h2>Doanh nghiệp</h2>
                            <p>Tạo ra không gian làm việc số chuyên nghiệp, tập trung mọi thông tin, <br/>tài nguyên, giúp vận hành hiệu quả và xây dựng văn hóa bền vững</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
$slider_data_source = require get_template_directory() . '/data/slider_data.php';
get_template_part('template-parts/callout_parts/tintuong_slider', null, $slider_data_source['data1']); 
?>

<section class="top-footer center">
    <img class="top-footer-bg" src="<?= get_template_directory_uri() . '/assets/images/ai_light_bg_blackpurple.svg' ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="content">
                <h1 class="title-section">Cải thiện giao tiếp nội bộ, xây dựng văn hóa <br/>doanh nghiệp bền vững hơn</h1>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template') ?>
            </div>
        </div>
    </div>
</section>

</div>


<?php get_footer(); ?>