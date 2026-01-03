<?php

/**
 * Template Name: Social 1Office Next
 */

get_header(); ?>

<div class="social-page">

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
                        'title' => 'phối hợp', // Assuming title based on content
                        'icon' => '',
                        'content_panel' => $content_duytri3
                    ]
                )))
                ?>
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


</div>


<?php get_footer(); ?>