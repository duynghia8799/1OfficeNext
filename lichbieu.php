<?php

/**
 * Template Name: Lịch Biểu 1Office Next
 */

get_header();
?>
<div class="lichbieu-page">
<section class="lichbieu-hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Giải pháp quản lý lịch biểu trực tuyến</h1>
                <p class="sub-title-section">Công cụ hỗ trợ nhắc nhớ sự kiện, cuộc họp và lịch làm việc phát sinh. Chủ động sắp xếp <br>và theo dõi các đầu công việc ưu tiên với tính năng đồng bộ lịch biểu tự động</p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'btn'); ?>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/lichbieu_hero.svg" alt="bg">
            </div>
        </div>
    </div>
</section>

<section class="lichbieu-luachon">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Sẽ là lựa chọn phù hợp cho doanh nghiệp muốn…</h1>
                <div class="content">
                    <div class="item start">
                        <p><span>Lịch làm việc tập trung</span>, quản lý nhiệm vụ, cuộc họp và sự kiện trên một giao diện thống nhất, đảm bảo mọi thành viên luôn nắm bắt kế hoạch kịp thời và chính xác</p>                        
                    </div>
                    <div class="item center">
                        <p><span>Mọi lịch trình được đồng bộ liền mạch</span>, tính năng nhắc việc thông minh và hiển thị ưu tiên rõ ràng, giúp ngày làm việc luôn được sắp xếp khoa học</p>
                    </div>
                    <div class="item end">
                        <p><span>Loại bỏ sự rời rạc trong quản lý thời gian</span> <br/>khi phải dùng nhiều công cụ khác nhau, giúp quy trình làm việc liền mạch hơn & giảm thiểu nguy cơ bỏ sót thông tin quan trọng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lichbieu-quanly">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Quản lý toàn bộ lịch làm việc tại một nơi duy nhất</h1>
                <div class="lichbieu-tabs-wrapper">
                    <?php get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'quanly', 'tabs' => array(
                        [
                            'content_tab' => '
                            <div class="header-item">
                                <img src="' . get_template_directory_uri() . '/assets/images/icons/lichbieu_quanly_icon1.svg" alt="icon">
                                <h2>Quản lý lịch làm việc tập trung</h2>
                            </div>
                            <div class="content-item">
                                <p>Theo dõi lịch cá nhân và lịch phòng ban trên cùng một giao diện. Giúp kiểm soát công việc, cuộc họp và sự kiện mà không lo trùng lịch hoặc bỏ sót thông tin</p>
                            </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/lichbieu_quanly_1.svg" alt="demo">
                            ',
                        ],
                        [
                            'content_tab' => '
                            <div class="header-item">
                                <img src="' . get_template_directory_uri() . '/assets/images/icons/lichbieu_quanly_icon2.svg" alt="icon">
                                <h2>Tạo và chỉnh sửa linh hoạt</h2>
                            </div>
                            <div class="content-item line-4">
                                <p>Tạo lịch bằng thao tác click hoặc kéo-thả. Hỗ trợ đầy đủ các loại lịch: họp, công tác, phỏng vấn, gặp khách hàng, lịch nghỉ… kèm mô tả, tệp đính kèm và người tham gia</p>
                            </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/lichbieu_quanly_2.svg" alt="demo">
                            ',
                        ],
                        [
                            'content_tab' => '
                            <div class="header-item">
                                <img src="' . get_template_directory_uri() . '/assets/images/icons/lichbieu_quanly_icon3.svg" alt="icon">
                                <h2>Gửi lời mời và nhắc việc tự động</h2>
                            </div>
                            <div class="content-item">
                                <p>Tự động gửi lời mời họp, thông báo và nhắc nhở trước sự kiện giúp hạn chế quên việc, trễ họp và đảm bảo mọi thành viên đều cập nhật kịp thời</p>
                            </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/lichbieu_quanly_3.svg" alt="demo">
                            ',
                        ],
                        [
                            'content_tab' => '
                            <div class="header-item">
                                <img src="' . get_template_directory_uri() . '/assets/images/icons/lichbieu_quanly_icon4.svg" alt="icon">
                                <h2>Theo dõi phòng họp/phương tiện</h2>
                            </div>
                            <div class="content-item">
                                <p>Xem nhanh tình trạng sử dụng, trống/bận của từng phòng họp và phương tiện theo thời gian thực, giúp tránh trùng lịch và rút ngắn thời gian lên lịch họp</p>
                            </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/lichbieu_quanly_4.svg" alt="demo">
                            ',
                        ],
                    )));?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lichbieu-lamchu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Làm chủ lịch trình với tính năng đồng bộ và tích hợp mạnh mẽ</h1>
                <?php get_template_part('template-parts/tabs/animation_tab', null, array('name' => 'lamchu', 'tabs' => array(
                    [
                        'title'         => 'Đồng bộ linh hoạt',
                        'icon'          => '/assets/images/icons/lichbieu_lamchu_icon1.svg',
                        'content_panel' => '
                        <p>Tích hợp và đồng bộ với các lịch công việc như: Lịch họp dự án, <br/>lịch phỏng vấn, lịch gặp khách hàng, lịch nghỉ phép,...</p>
                        <img src="' . get_template_directory_uri() . '/assets/images/demo/lichbieu_lamchu_1.svg" alt="demo">
                        ',
                    ],
                    [
                        'title'         => 'Tích hợp liền mạch',
                        'icon'          => '/assets/images/icons/lichbieu_lamchu_icon2.svg',
                        'content_panel' => '
                        <p>Kết nối liền mạch với Google Calendar, Google Meet, Outlook, Microsoft 365, Zoom Online, <br/>giúp hợp nhất lịch cá nhân và lịch công việc chỉ trong một giao diện duy nhất</p>
                        <img src="' . get_template_directory_uri() . '/assets/images/demo/lichbieu_lamchu_2.svg" alt="demo">
                        ',
                    ],
                    [
                        'title'         => 'Kiểu xem đa dạng',
                        'icon'          => '/assets/images/icons/lichbieu_lamchu_icon3.svg',
                        'content_panel' => '
                        <p>Hiển thị linh hoạt theo ngày, tuần, tháng hoặc danh sách sự kiện. Cho phép lọc và <br/>tùy chỉnh màu sắc, giúp người dùng quan sát lịch biểu rõ ràng và khoa học hơn</p>
                        <img src="' . get_template_directory_uri() . '/assets/images/demo/lichbieu_lamchu_3.svg" alt="demo">
                        ',
                    ],
                )));?>
            </div>
        </div>
    </div>
</section>

<section class="lichbieu-tomtat">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Tóm tắt, tổng hợp và tạo biên bản họp nhanh chóng với AI</h1>
                <div class="content-section">
                    <div class="item">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/icons/V_circle_bluesky.svg" alt="">
                        <p>Tự động tổng hợp nội dung họp</p>
                    </div>
                    <div class="item">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/icons/V_circle_bluesky.svg" alt="">
                        <p>Tạo việc, lịch biểu, biên bản tự động</p>
                    </div>
                    <div class="item">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/icons/V_circle_bluesky.svg" alt="">
                        <p>Nhận diện & phân công công việc</p>
                    </div>
                    <div class="item">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/icons/V_circle_bluesky.svg" alt="">
                        <p>Highlight ý chính & đánh giá hiệu quả họp</p>
                    </div>
                </div>
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/lichbieu_tomtat.svg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="lichbieu-linhhoat">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="left">
                    <h1 class="title-section">Công cụ hỗ trợ điều phối, <br/>sắp xếp lịch làm việc</h1>
                    <div class="item">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/icons/lichbieu_linhhoat_icon1.svg" alt="">
                        <div class="content-item">
                            <h2>Hiển thị trực quan, dễ kiểm soát</h2>
                            <p>Nhiều chế độ xem linh hoạt với phân loại rõ ràng, giúp người dùng nắm bắt lịch làm việc một cách khoa học và chính xác</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/icons/lichbieu_linhhoat_icon2.svg" alt="">
                        <div class="content-item">
                            <h2>Hệ thống nhắc nhở thông minh</h2>
                            <p>Thông báo tự động trước sự kiện và khi có thay đổi, đảm bảo người dùng luôn cập nhật kịp thời và hạn chế trễ hẹn</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/icons/lichbieu_linhhoat_icon3.svg" alt="">
                        <div class="content-item">
                            <h2>Liên kết chặt chẽ với công việc</h2>
                            <p>Lịch họp, nhiệm vụ và sự kiện được đồng bộ xuyên suốt, hỗ trợ phối hợp đa bộ phận và giảm thời gian trao đổi thủ công</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/icons/lichbieu_linhhoat_icon4.svg" alt="">
                        <div class="content-item">
                            <h2>Đồng bộ đa nền tảng mượt mà</h2>
                            <p>Kết nối ổn định với các ứng dụng lịch phổ biến, giúp người dùng theo dõi lịch biểu thống nhất trên mọi thiết bị</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h1 class="title-section">Sử dụng linh hoạt, hiệu quả, mọi lúc mọi nơi</h1>
                    <img class="phone" src=" <?php echo get_template_directory_uri(); ?>/assets/images/lichbieu_linhhoat.svg" alt="">
                    <div class="app-container">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/app_btn_google.svg" alt="">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/app_btn_apple.svg" alt="">
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
    <img class="top-footer-bg" src="<?= get_template_directory_uri() . '/assets/images/ai_light_bg_bluesky.svg' ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="content">
                <h1 class="title-section">Bắt đầu sắp xếp lại lịch làm việc của bạn <br/>theo cách khoa học và hiệu quả hơn</h1>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template') ?>
            </div>
        </div>
    </div>
</section>

</div>
<?php get_footer(); ?>