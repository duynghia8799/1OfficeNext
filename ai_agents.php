<?php

/**
 * Template Name: Ai-Agents 1OfficeNext
 * Template Post Type: page 
 */
get_header();
$data_tabs_file_path = get_stylesheet_directory() . '/data/ai_agents_tabs_data.php';
$page_data = file_exists($data_tabs_file_path) ? require $data_tabs_file_path : [];

$tab1 = isset($page_data['tang_toc_data']) ? $page_data['tang_toc_data'] : [];
$tab2 = isset($page_data['tich_hop_data']) ? $page_data['tich_hop_data'] : [];

$svg_hero = file_get_contents(get_template_directory() . '/assets/images/ai_agents_hero.svg');
if ($svg_hero === false) {
    $svg_hero = "<p style='color: red;'>Lỗi: Không tìm thấy file SVG.</p>";
}
$svg_hesinhthai = file_get_contents(get_template_directory() . '/assets/images/ai_agents_hesinhthai.svg');
if ($svg_hesinhthai === false) {
    $svg_hesinhthai = "<p style='color: red;'>Lỗi: Không tìm thấy file SVG.</p>";
}
?>

<section class="ai-agents-hero">
    <div class="container">
        <div class="row">
            <div class="content">
                <h1 class="title-section"><span class="br-line title-bold">AI Agents</span>
                    <span class="br-line">Giải phóng nguồn lực</span>
                    Tăng cường hiệu suất vận hành
                </h1>
                <p>Làm việc thông minh hơn với trợ lý AI dành cho doanh nghiệp của bạn.
                    Đơn giản hoá mọi tác vụ từ truy xuất, phân tích dữ liệu đến ra quyết định</p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template'); ?>
            </div>
            <div class="img-container">
                <?= $svg_hero ?>
            </div>
        </div>
    </div>
</section>

<section class="ai-agents-hesinhthai">
    <?= $svg_hesinhthai ?>
    <div class="container">
        <div class="row">
            <h1 class="title-section">Hệ sinh thái 1AI Agents</h1>
            <p class="sub-title-section">Kết nối dữ liệu, dự đoán xu hướng và đề xuất hành động tối ưu</p>
            <p class="content">Vận hành doanh nghiệp <span class="br-line">thông minh với AI Agents</span></p>
        </div>
    </div>
</section>

<section class="ai-agents-tangtoc">
    <div class="container">
        <div class="row">
            <div class="col tangtoc-col">
                <h1 class="title-section">Ra quyết định nhanh hơn, chính xác hơn, <span class="br-line">tăng tốc độ xử lý và
                    tối ưu hiệu quả công việc</span></h1>
                <?php get_template_part('template-parts/tabs/animation_tab', 'template', $tab1); ?>
            </div>
        </div>
    </div>
</section>

<section class="ai-agents-tichhop">
    <div class="container">
        <div class="row">
            <div class="col tichhop-col">
                <h1 class="title-section">Tích hợp AI vào quy trình làm việc. Giảm tải <span class="br-line">tác vụ lặp và
                        kiểm soát toàn diện hiệu quả đầu ra</span></h1>
                <?php get_template_part('template-parts/tabs/animation_tab', 'template', $tab2) ?>
            </div>
        </div>
    </div>
</section>

<section class="ai-agents-chuyendoi">
    <img class="ai-agents-chuyendoi-bg" src="<?= get_template_directory_uri() . '/assets/images/ai_agents_chuyendoi_bg.svg' ?>" alt="">
    <div class="container">
        <div class="row">
            <h1 class="title-section">Chuyển đổi cách doanh nghiệp vận hành
                <span class="br-line">bằng bộ công cụ AI mạnh mẽ</span>
            </h1>
            <div class="content">
                <div class="item">
                    <img src="<?= get_template_directory_uri() . '/assets/images/icons/ai_agents_chuyendoi_item1.svg' ?>" alt="">
                    <h2>Khả năng tích hợp</h2>
                    <p>Tích hợp với toàn bộ quy trình vận hành <span class="br-line">của doanh nghiệp thông qua nền tảng <span class="br-line">All-in-one</span></span></p>
                </div>
                <div class="item">
                    <img src="<?= get_template_directory_uri() . '/assets/images/icons/ai_agents_chuyendoi_item2.svg' ?>" alt="">
                    <h2>Phối hợp đồng bộ</h2>
                    <p>Các AI Agents được tích hợp chung trên một nền tảng, phối hợp thực hiện các nhiệm vụ phức tạp một cách đồng bộ</p>
                </div>

                <div class="item">
                    <img src="<?= get_template_directory_uri() . '/assets/images/icons/ai_agents_chuyendoi_item3.svg' ?>" alt="">
                    <h2>Hiểu ngữ cảnh sâu</h2>
                    <p>Hiểu ngữ cảnh doanh nghiệp sâu nhờ khả năng tự động truy xuất và phân tích dữ liệu thông minh</p>
                </div>

                <div class="item">
                    <img src="<?= get_template_directory_uri() . '/assets/images/icons/ai_agents_chuyendoi_item4.svg' ?>" alt="">
                    <h2>Tự động hoá</h2>
                    <p>Không chỉ đưa ra gợi ý, 1AI Agents còn được giao quyền thay người dùng tự động xử lý tác vụ và quy trình</p>
                </div>

                <div class="item">
                    <img src="<?= get_template_directory_uri() . '/assets/images/icons/ai_agents_chuyendoi_item5.svg' ?>" alt="">
                    <h2>Bản địa hóa</h2>
                    <p>AI Agents 1Office được huấn luyện từ dữ liệu hàng ngàn doanh nghiệp Việt, nên thấu hiểu đặc thù quản trị và hành vi người dùng nội địa</p>
                </div>

                <div class="item">
                    <img src="<?= get_template_directory_uri() . '/assets/images/icons/ai_agents_chuyendoi_item6.svg' ?>" alt="">
                    <h2>Bảo mật</h2>
                    <p>Tuyệt đối bảo mật dữ liệu cá nhân và doanh nghiệp nhờ tích hợp sâu với quyền người dùng trên hệ thống</p>
                </div>
            </div>



        </div>
    </div>
</section>

<section class="ai-agents-kientao">
    <div class="container">
        <div class="row">
            <h1 class="title-section">Kiến tạo doanh nghiệp vận hành <span class="br-line">thông minh, tự động</span></h1>
            <div class="content">
                <div class="item">
                    <h1>80<span>%</span></h1>
                    <h2>Tiết kiệm chi phí</h2>
                    <p>Nền tảng AI Agents giúp loại bỏ chi phí cho các công cụ, phần mềm rời rạc, tối ưu nguồn lực và nâng cao hiệu suất toàn doanh nghiệp</p>
                </div>
                <div class="line"></div>
                <div class="item">
                    <h1>24<span>h</span></h1>
                    <h2>Tiết kiệm hàng tuần</h2>
                    <p>Với sự kết hợp của AI và No-code, 1Office giúp người dùng tiết kiệm thời gian bằng việc tự động hoá công việc và giảm tải các tác vụ lặp lại</p>
                </div>
                <div class="line"></div>
                <div class="item">
                    <h1>03<span>lần</span></h1>
                    <h2>Xử lý nhanh hơn</h2>
                    <p>Các tác vụ từ phê duyệt, truy xuất dữ liệu, báo cáo đến ra quyết định đều được xử lý tức thời nhờ hệ thống AI thông minh và khả năng tự động hoá liền mạch</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="top-footer">
    <img class="top-footer-bg" src="<?= get_template_directory_uri() . '/assets/images/ai_light_bg.svg' ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="content">
                <h1 class="title-section">Bứt tốc trong kỷ nguyên AI. Khai thác tối đa <span class="br-line">sức mạnh của tự động hoá</span></h1>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template') ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer();
