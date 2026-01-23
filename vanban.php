<?php

/**
 * Template Name: Văn bản 1OfficeNext
 */

get_header(); ?>
<div class="vanban_page">
<section class="vanban_hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Giải pháp số hoá 100% hệ thống <br/>văn bản trong doanh nghiệp</h1>
                <p class="sub-title-section">Quản lý, lưu trữ và thiết lập linh hoạt quy trình xử lý văn bản đến, <br/>văn bản đi cùng các văn bản nội bộ trong doanh nghiệp</p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template'); ?>
                <div class="demo-img">
                    <div class="vanban-frame">
                        <img src="<?= get_template_directory_uri() . '/assets/images/for-animated/vanban_hero_frame.svg'; ?>" alt="frame">
                        <div class="vanban-content-scroll">
                            <img src="<?= get_template_directory_uri() . '/assets/images/for-animated/vanban_hero_content.svg'; ?>" alt="content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vanban_hero_bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>6.000+ doanh nghiệp tin dùng</h2>
                <div class="run-bar">
                    <img class="demo-img" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero_bar.svg'; ?>" alt="demo">                    
                    <img class="demo-img" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero_bar.svg'; ?>" alt="demo">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vanban_luutru">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Lưu trữ và quản lý trọn vẹn vòng đời văn bản</h1>
                <div class="tabs-panel">
                    <?php get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'luutru', 'tabs' => array(
                        [   
                            'content_tab' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/icons/vanban_luutru_icon1.svg" alt="icon">
                                <div>
                                    <h3>Quản lý tập trung mọi loại văn bản</h3>
                                    <p>Tạo mới, lưu trữ và quản lý đầy đủ văn bản đến, văn bản đi và văn bản nội bộ trên một nền tảng duy nhất, giúp chuẩn hóa quy trình và tránh thất lạc thông tin</p>
                                </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/vanban_luutru_1.svg" alt="demo">
                            ',
                        ],
                        [   
                            'content_tab' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/icons/vanban_luutru_icon2.svg" alt="icon">
                                <div>
                                    <h3>Phân loại, tra cứu nhanh chóng</h3>
                                    <p>Tự động gắn số văn bản, lưu trữ điện tử và phân loại khoa học theo nhiều tiêu chí, cho phép tìm kiếm và truy xuất tài liệu chỉ trong vài giây</p>
                                </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/vanban_luutru_2.svg" alt="demo">
                            ',
                        ],
                        [   
                            'content_tab' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/icons/vanban_luutru_icon3.svg" alt="icon">
                                <div>
                                    <h3>Theo dõi trạng thái xử lý thời gian thực</h3>
                                    <p>Cập nhật liên tục trạng thái xử lý của từng văn bản theo thời gian thực, giúp nhà quản lý dễ dàng kiểm soát tiến độ và đảm bảo không bỏ sót công việc</p>
                                </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/vanban_luutru_3.svg" alt="demo">
                            ',
                        ],
                    ))); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vanban_tudonghoa">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Tự động hoá linh hoạt quy trình xử lý văn bản</h1>
                <div class="tabs-panel">
                    <?php get_template_part('template-parts/tabs/animation_tab', null, array('name' => 'tudonghoa', 'tabs' => array(
                        [   
                            'title' => 'Thiết lập quy trình linh hoạt',
                            'icon' => '',
                            'content_panel' => '
                                <div>
                                    <img src="' . get_template_directory_uri() . '/assets/images/icons/vanban_tudonghoa_item1.svg" alt="icon">
                                    <h3>Thiết lập quy trình linh hoạt</h3>
                                    <p>Dễ dàng <span>cấu hình các quy trình phát hành, phê <br/>duyệt và xử lý</span> văn bản theo phòng ban, loại văn bản <br/>và cấp độ xử lý khác nhau. Hệ thống cho phép tùy <br/>biến linh hoạt để phù hợp với đặc thù vận hành của <br/>từng doanh nghiệp, từ mô hình đơn giản đến tổ chức <br/>có nhiều cấp quản lý</p>
                                </div>
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/vanban_tudonghoa_1.svg" alt="demo">
                            ',
                        ],
                        [   
                            'title' => 'Tự động luân chuyển theo quy trình',
                            'icon' => '',
                            'content_panel' => '
                                <div>
                                    <img src="' . get_template_directory_uri() . '/assets/images/icons/vanban_tudonghoa_item2.svg" alt="icon">
                                    <h3>Tự động luân chuyển theo quy trình</h3>
                                    <p>Văn bản được hệ thống <span>tự động chuyển đến đúng <br/>người, đúng bước</span> theo quy trình đã thiết lập mà <br/>không cần can thiệp thủ công. Nhờ đó, luồng xử lý <br/>luôn liền mạch, hạn chế chậm trễ và đảm bảo mọi văn <br/>bản đều được xử lý đúng trình tự, đúng trách nhiệm</p>
                                </div>
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/vanban_tudonghoa_2.svg" alt="demo">',
                        ],
                        [
                            'title' => 'Hỗ trợ phê duyệt đa cấp bậc',
                            'icon' => '',
                            'content_panel' => '
                                <div>
                                    <img src="' . get_template_directory_uri() . '/assets/images/icons/vanban_tudonghoa_item3.svg" alt="icon">
                                    <h3>Hỗ trợ phê duyệt đa cấp bậc</h3>
                                    <p>Hỗ trợ <span>phê duyệt nhiều cấp, nhiều người cùng lúc <br/>hoặc theo thứ tự</span>, đáp ứng linh hoạt các yêu cầu kiểm <br/>soát và tuân thủ trong doanh nghiệp. Việc kết hợp <br/>phê duyệt điện tử và ký số ngay trên quy trình giúp <br/>tăng tốc độ xử lý mà vẫn đảm bảo tính minh bạch và <br/>chính xác</p>
                                </div>
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/vanban_tudonghoa_3.svg" alt="demo">
                            ',
                        ],
                    ))); ?>
                    <?php get_template_part('template-parts/tabs/tab_navigation', null, array('icons' => array(
                        'prev' => '/assets/images/icons/chevron_gray_l.svg',
                        'next' => '/assets/images/icons/chevron_gray_r.svg'
                    ))); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="vanban_giaoviec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Giao việc, quản lý tiến độ công việc từ các văn bản đến và đi</h1>
                <div class="tabs-panel">
                    <?php get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'giaoviec', 'tabs' => array(
                        [   
                            'content_tab' => '
                                <h3>Giao việc trực tiếp trên luồng xử lý văn bản</h3>
                                <p>Cho phép tạo và phân công công việc ngay trong quá trình <br/>xử lý văn bản, đảm bảo mỗi yêu cầu đều được giao đúng <br/>người, đúng thời điểm</p>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/vanban_giaoviec_1.svg" alt="demo">
                            ',
                        ],
                        [   
                            'content_tab' => '
                                <h3>Theo dõi tiến độ và nhắc việc tự động</h3>
                                <p>Quản lý tiến độ thực hiện theo thời gian thực, tự động nhắc <br/>việc cho người phụ trách, giúp công việc bám sát hạn xử lý <br/>và hạn chế tình trạng chậm trễ</p>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/vanban_giaoviec_2.svg" alt="demo">
                            ',
                        ],
                        [
                            'content_tab' => '
                                <h3>Liên kết đối tượng và thông tin liên quan</h3>
                                <p>Kết nối văn bản với các đối tượng liên quan như công việc, <br/>hồ sơ ký số hoặc văn bản khác, giúp tổng hợp đầy đủ ngữ <br/>cảnh và dễ dàng tra cứu trên một màn hình</p>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/vanban_giaoviec_3.svg" alt="demo">
                            ',
                        ],
                    ))); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vanban-linhhoat">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="left">
                    <h1 class="title-section">Xử lý và phát hành <br/>văn bản nhanh hơn, <br/>chính xác hơn</h1>
                    <img src=" <?= get_template_directory_uri() . '/assets/images/vanban_linhhoat_img.svg' ?>" alt="demo">
                </div>
                <div class="right">
                    <div class="item">
                        <img src=" <?= get_template_directory_uri() . '/assets/images/icons/V_circle_bg_orange.svg' ?>" alt="icon">
                        <div class="content">
                            <h3>AI bóc tách thông thông minh</h3>
                            <p>AI tự động bóc tách các trường thông tin quan trọng <br/>như số văn bản, ngày ban hành, gợi ý văn bản liên <br/>quan, giúp hạn chế nhập liệu thủ công và sai sót</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src=" <?= get_template_directory_uri() . '/assets/images/icons/V_circle_bg_orange.svg' ?>" alt="icon">
                        <div class="content">
                            <h3>Ký số ngay trong quy trình</h3>
                            <p>Tích hợp ký số cho phép ký và phát hành văn bản <br/>trực tiếp trên luồng xử lý, rút ngắn thời gian phê <br/>duyệt và phát hành</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src=" <?= get_template_directory_uri() . '/assets/images/icons/V_circle_bg_orange.svg' ?>" alt="icon">
                        <div class="content">
                            <h3>Tự động tiếp nhận đa nguồn</h3>
                            <p>Tự động nhận văn bản từ email, fax hoặc qua API tích <br/>hợp với các hệ thống khác, đảm bảo dữ liệu được tập <br/>trung và xử lý ngay từ đầu</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src=" <?= get_template_directory_uri() . '/assets/images/icons/V_circle_bg_orange.svg' ?>" alt="icon">
                        <div class="content">
                            <h3>Nâng cao độ chính xác và sự nhất quán</h3>
                            <p>Giảm sai lệch thông tin giữa các bộ phận nhờ dữ liệu <br/>được quản lý tập trung, đồng bộ xuyên suốt từ tiếp <br/>nhận đến phát hành văn bản</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src=" <?= get_template_directory_uri() . '/assets/images/icons/V_circle_bg_orange.svg' ?>" alt="icon">
                        <div class="content">
                            <h3>Tìm kiếm và truy xuất dễ dàng</h3>
                            <p>Hỗ trợ tìm kiếm theo toàn bộ nội dung và trích yếu <br/>văn bản, giúp truy xuất thông tin nhanh chóng và <br/>chính xác</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src=" <?= get_template_directory_uri() . '/assets/images/icons/V_circle_bg_orange.svg' ?>" alt="icon">
                        <div class="content">
                            <h3>Chuẩn hóa quy trình, đảm bảo tuân thủ</h3>
                            <p>Áp dụng thống nhất quy trình xử lý và phát hành văn <br/>bản theo quy định nội bộ, đảm bảo tính nhất quán, <br/>minh bạch và tuân thủ trong toàn hệ thống</p>
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
    <img class="top-footer-bg" src="<?= get_template_directory_uri() . '/assets/images/ai_light_bg_gray.svg' ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="content">
                <h1 class="title-section">Xây dựng hệ thống quản lý và xử văn bản <br/>chuyên nghiệp, tối ưu cho doanh nghiệp</h1>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template') ?>
            </div>
        </div>
    </div>
</section>



</div>
<?php get_footer(); ?>