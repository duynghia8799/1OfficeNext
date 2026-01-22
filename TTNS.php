<?php

/**
 * Template Name: Thông Tin Nhân Sự 1OfficeNext
 */

get_header(); ?>
<div class="TTNS-page">

<section class="TTNS-hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h1 class="title-section">Hệ thống quản lý và lưu trữ <br/>dữ liệu nhân sự tập trung, <br/>nhất quán</h1>
                    <p class="sub-title-section">Từ hồ sơ cá nhân, hợp đồng lao động đến lịch sử thay đổi và <br/>các quyết định liên quan, mọi thông tin được quản lý tập trung, <br/>đồng bộ và dễ dàng tra cứu</p>
                    <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'button'); ?>
                </div>
                <img src="<?= get_template_directory_uri() . '/assets/images/demo/TTNS_hero.svg'; ?>" alt="">
                <?php 
                    $svg_path = get_template_directory() . '/assets/images/for-animated/TTNS_animation_bluesky.svg';
                    if (file_exists($svg_path)) {
                        echo file_get_contents($svg_path);
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<section class="TTNS-hero_bottom1">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Được tin dùng từ <br/>hơn <span>6K tổ chức</span></h2>
                <div class="run-bar">
                    <img class="demo-img" src="<?= get_template_directory_uri() . '/assets/images/social_hero_bar.svg'; ?>" alt="demo">                    
                    <img class="demo-img" src="<?= get_template_directory_uri() . '/assets/images/social_hero_bar.svg'; ?>" alt="demo">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="TTNS-hero_bottom2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="content">
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/TTNS_hero_bottom_item1.svg" alt="">
                        <p>Lưu trữ dữ liệu nhân sự tập trung, khoa học</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/TTNS_hero_bottom_item2.svg" alt="">
                        <p>Quản lý chi tiết lịch sử và biến động nhân sự</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/TTNS_hero_bottom_item3.svg" alt="">
                        <p>Giảm thiểu tình trạng thất lạc và sai lệch thông tin</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/TTNS_hero_bottom_item4.svg" alt="">
                        <p>Chuẩn hoá quy trình phê duyệt và ký kết</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/TTNS_hero_bottom_item5.svg" alt="">
                        <p>Truy cập và tra cứu thông tin nhanh chóng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="TTNS-xaydung">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Xây dựng hệ thống dữ liệu nhân sự <br/>đồng bộ, minh bạch</h1>
                <div class="tabs-wrapper">
                <?php get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'TTNS-xaydung', 'tabs' => array(
                    [
                        'content_tab' => '
                            <h2>Số hoá và lưu trữ hồ sơ tập trung</h2>
                            <p>Số hoá toàn bộ hồ sơ nhân sự, bao gồm thông tin cá nhân, <br/>quá trình làm việc, hợp đồng, bảo hiểm và phúc lợi,...trên một <br/>hệ thống thống nhất</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/TTNS_xaydung_1.svg" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <h2>Quản lý hồ sơ nhân sự khoa học</h2>
                            <p>Sắp xếp, phân loại hồ sơ theo phòng ban, vị trí, trạng thái làm <br/>việc, hỗ trợ tra cứu nhanh và theo dõi thông tin nhân sự rõ <br/>ràng, nhất quán</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/TTNS_xaydung_2.svg" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <h2>Chỉnh sửa và cập nhật thông tin linh hoạt</h2>
                            <p>Cho phép cập nhật thông tin nhân sự nhanh chóng, ghi nhận <br/>lịch sử thay đổi và đảm bảo dữ liệu luôn chính xác trong suốt <br/>vòng đời làm việc</p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/TTNS_xaydung_3.svg" alt="demo">
                        ',
                    ],
                    [
                        'content_tab' => '
                            <h2>Tra cứu thông tin nhanh chóng, tức thời</h2>
                            <p>Tìm kiếm và truy xuất hồ sơ nhân sự chỉ trong vài thao tác, <br/>hỗ trợ HR quản lý khoa học, truy xuất thông tin hiệu quả hơn <br/>mỗi ngày </p>
                        ',
                        'content_panel' => '
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/TTNS_xaydung_4.svg" alt="demo">
                        ',
                    ],
                ))); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="TTNS-chuanhoa">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Chuẩn hóa quy trình ký kết và lưu trữ hợp đồng nhân sự</h1>
                <div class="tabs-wrapper">
                <?php get_template_part('template-parts/tabs/animation_tab', null, array('name' => 'TTNS-chuanhoa', 'tabs' => array(
                    [
                        'title' => 'Quản lý HĐ',
                        'icon' => '',
                        'content_panel' => '
                            <div>
                            <img src="' . get_template_directory_uri() . '/assets/images/icons/TTNS_chuanhoa_item1.svg" alt="icon">
                                <h2>Số hoá và lưu trữ hồ sơ tập trung</h2>
                                <p>Số hoá toàn bộ hồ sơ nhân sự, bao gồm thông tin cá nhân, <br/>quá trình làm việc, hợp đồng, bảo hiểm và phúc lợi,...trên một <br/>hệ thống thống nhất</p>
                            </div>
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/TTNS_chuanhoa_1.svg" alt="icon">
                        ',
                    ],
                    [
                        'title' => 'Chuẩn hóa QT',
                        'icon' => '',
                        'content_panel' => '
                            <div>
                                <img src="' . get_template_directory_uri() . '/assets/images/icons/TTNS_chuanhoa_item2.svg" alt="icon">
                                <h2>Chuẩn hóa quy trình ký kết hợp đồng</h2>
                                <p>Thiết lập quy trình ký hợp đồng rõ ràng theo từng bước, từ khởi <br/>tạo, phê duyệt đến hoàn tất, giúp HR và các bên liên quan phối <br/>hợp nhất quán, tuân thủ quy định nội bộ và đảm bảo tính chính <br/>xác trong toàn bộ quá trình</p>
                            </div>
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/TTNS_chuanhoa_2.svg" alt="icon">
                        ',
                    ],
                    [
                        'title' => 'Ký nhanh HĐ',
                        'icon' => '',
                        'content_panel' => '
                            <div>
                                <img src="' . get_template_directory_uri() . '/assets/images/icons/TTNS_chuanhoa_item3.svg" alt="icon">
                                <h2>Ký hợp đồng nhanh chóng với chữ ký số</h2>
                                <p>Hỗ trợ ký số hợp đồng lao động trực tiếp trên hệ thống, rút ngắn <br/>đáng kể thời gian xử lý, giảm phụ thuộc vào giấy tờ thủ công và <br/>giúp quá trình ký kết diễn ra nhanh chóng, thuận tiện nhưng vẫn <br/>đảm bảo tính pháp lý</p>
                            </div>
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/TTNS_chuanhoa_3.svg" alt="icon">
                        ',
                    ],
                    [
                        'title' => 'Cảnh báo HĐ',
                        'icon' => '',
                        'content_panel' => '
                            <div>
                                <img src="' . get_template_directory_uri() . '/assets/images/icons/TTNS_chuanhoa_item4.svg" alt="icon">
                                <h2>Cảnh báo hợp đồng sắp đến hạn</h2>
                                <p>Tự động theo dõi và nhắc nhở các mốc quan trọng như gia hạn, <br/>sắp hết hạn hoặc hết hiệu lực hợp đồng, giúp HR chủ động xử lý <br/>kịp thời, hạn chế bỏ sót và đảm bảo tính liên tục trong quản lý nhân sự</p>
                            </div>
                            <img src="' . get_template_directory_uri() . '/assets/images/demo/TTNS_chuanhoa_4.svg" alt="icon">
                        ',
                    ],
                ))); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="TTNS-luutru">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Lưu trữ và ban hành các quyết định nội bộ</h1>
                <div class="content">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/V_circle_white_bg_orange.svg" alt="icon">
                        <p>Lưu trữ tập trung các quyết định khen thưởng, kỷ luật, điều chuyển, bổ nhiệm,…</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/V_circle_white_bg_orange.svg" alt="icon">
                        <p>Dễ dàng kiểm soát quyết định đang chờ duyệt, đã duyệt theo từng thời điểm</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/V_circle_white_bg_orange.svg" alt="icon">
                        <p>Rút ngắn thời gian xử lý với quy trình phê duyệt và ký số ngay trên hệ thống</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/V_circle_white_bg_orange.svg" alt="icon">
                        <p>Nhanh chóng tìm kiếm, đối soát và kiểm tra lịch sử quyết định phục vụ quản lý</p>
                    </div>
                </div>
                <img class="demo" src="<?php echo get_template_directory_uri()?>/assets/images/demo/TTNS_luutru.svg" alt="demo">
            </div>
        </div>
    </div>
</section>

<section class="TTNS-hethong">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Chuẩn hóa quy trình ký kết và lưu trữ hợp đồng nhân sự</h1>
                <p class="sub-title-section">Cung cấp cái nhìn tổng quan về nhân sự, hợp đồng và biến động nhân sự, hỗ trợ <br/>nhà quản lý kiểm soát rủi ro và ra quyết định chính xác hơn</p>
                <img class="demo" src="<?php echo get_template_directory_uri()?>/assets/images/demo/TTNS_hethong.svg" alt="demo">
                <?php 
                    $svg_path = get_template_directory() . '/assets/images/for-animated/TTNS_animation_smock.svg';
                    if (file_exists($svg_path)) {
                        echo file_get_contents($svg_path);
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<section class="TTNS-loaibo">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Loại bỏ hoàn toàn sai sót, chậm trễ trong <br/>phê duyệt, quản lý hồ sơ</h1>
                <div class="box-content">
                    <div class="content">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/TTNS_loaibo_item1.svg" alt="icon">
                            <div>
                                <h3>Cảnh báo thông minh</h3>
                                <p>Hệ thống tự động gửi cảnh báo về ngày hết hạn hợp đồng, bảo hiểm hoặc các mốc quan trọng, giúp bạn không bỏ lỡ bất kỳ thời hạn nào</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/TTNS_loaibo_item2.svg" alt="icon">
                            <div>
                                <h3>Cập nhật thông tin tự động</h3>
                                <p>Mọi thay đổi về chức danh, lương, bảo hiểm hay quyền lợi được tự động cập nhật vào hồ sơ, giữ dữ liệu luôn chính xác và đồng bộ</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/TTNS_loaibo_item3.svg" alt="icon">
                            <div>   
                                <h3>Kiểm soát quyền truy cập</h3>
                                <p>Thiết lập quyền xem, chỉnh sửa và chia sẻ hồ sơ, hợp đồng theo vai trò, đảm bảo an toàn dữ liệu và tuân thủ chính sách bảo mật</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/TTNS_loaibo_item4.svg" alt="icon">
                            <div>
                                <h3>Quy trình xử lý linh hoạt, xuyên suốt</h3>
                                <p>Hồ sơ nhân sự và hợp đồng lao động được xử lý xuyên suốt, từ tạo lập, phê duyệt đến ký số hoàn tất, rút ngắn thời gian xử lý và đảm bảo tính pháp lý</p>
                            </div>
                        </div>
                    </div>
                    <img class="demo" src="<?php echo get_template_directory_uri()?>/assets/images/demo/TTNS_loaibo.svg" alt="">
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="TTNS-truycap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top">
                    <h1 class="title-section">Truy cập thông tin hồ sơ nhân sự</h1>
                    <p class="sub-title-section">Giải pháp đồng bộ và quản lý dữ liệu nhân sự tập trung, hiệu quả</p>
                </div>
                <div class="bottom">
                    <img class="img1" src="<?php echo get_template_directory_uri()?>/assets/images/TTNS_truycap_1.svg" alt="">
                    <img class="img2" src="<?php echo get_template_directory_uri()?>/assets/images/TTNS_truycap_2.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="top-footer">
    <img class="top-footer-bg" src="<?php echo get_template_directory_uri()?>/assets/images/ai_lights_lightblue.svg" alt="">
    <div class="container">
        <div class="row">
            <div class="content">
                <h1 class="title-section">Hệ thống dữ liệu nhân sự tập trung, sẵn sàng <br>cho quản trị và tăng trưởng dài hạn</h1>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template') ?>
            </div>
        </div>
    </div>
</section>







</div>
<?php get_footer(); ?>
