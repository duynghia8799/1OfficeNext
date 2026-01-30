<?php
/**
 * Template Name: KPI 1OfficeNext
 */

get_header();?>
<div class="KPI-page">

<section class="KPI-hero"> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Hệ thống quản trị KPI minh bạch, tối ưu hiệu suất <br/>toàn doanh nghiệp</h1>
                <p class="sub-title-section">AI hỗ trợ xây dựng, gợi ý và phân tích mẫu KPI tự động, giúp doanh nghiệp thiết lập tiêu chí đánh giá <br/>chính xác, linh hoạt và phù hợp với thực tế vận hành</p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai','button')?>
                <img src="<?php echo get_template_directory_uri()?>/assets/images/demo/KPI_hero.svg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="KPI-theodoi">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Theo dõi và kiểm soát hiệu suất trên nền tảng <br/>dữ liệu thống nhất </h1>
                <div class="content">
                    <div class="item purple">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/KPI_theodoi_item1.svg" alt="">
                        <h3>Theo dõi hiệu suất tập trung</h3>
                        <p>Đo lường và theo dõi KPI của cá nhân, đội nhóm và phòng ban, giúp nhà quản lý nắm bắt hiệu suất tổng thể một cách minh bạch</p>
                    </div>
                    <div class="item red">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/KPI_theodoi_item2.svg" alt="">
                        <h3>Dự đoán và giảm thiểu rủi ro</h3>
                        <p>Phân tích dữ liệu KPI để nhận diện xu hướng, điểm bất thường và các vấn đề tiềm ẩn có thể ảnh hưởng đến hiệu suất trong tương lai</p>
                    </div>
                    <div class="item green">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/KPI_theodoi_item3.svg" alt="">
                        <h3>Ra quyết định dựa trên dữ liệu</h3>
                        <p>Mọi quyết định đều dựa trên dữ liệu thực tế, gắn chặt giữa hiệu suất vận hành và mục tiêu chiến lược của doanh nghiệp</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="KPI-tudong">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Tự động hóa quy trình kinh doanh</h1>
                <div class="tabs-wrapper">
                <?php get_template_part('template-parts/tabs/animation_tab',null, array('name' => 'KPI-tudong-tabs','tabs' => array(
                    [
                        'title' => 'Tiêu chí đánh giá',
                        'icon' => '',
                        'content_panel' => '
                            <div class="content-panel">
                                <h3>Chuẩn hóa đo lường hiệu suất theo từng vị trí</h3>
                                <div>
                                    <img src="'.get_template_directory_uri().'/assets/images/icons/V_original.svg" alt="">
                                    <p><span>Thiết lập tiêu chí KPI </span>theo từng vị trí, phòng ban hoặc vai trò, đảm bảo đo lường đúng yêu cầu công việc</p>
                                </div>
                                <div>
                                    <img src="'.get_template_directory_uri().'/assets/images/icons/V_original.svg" alt="">
                                    <p><span>Cho phép cấu hình linh hoạt </span>chỉ tiêu, trọng số và phương pháp đánh giá, phù hợp với định hướng quản trị</p>
                                </div>
                            </div>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/KPI_tudong_1.svg" alt="">
                        '
                    ],
                    [
                        'title' => 'Công thức đánh giá',
                        'icon' => '',
                        'content_panel' => '
                            <div class="content-panel">
                                <h3>Hỗ trợ viết công thức tính điểm cho từng kịch bản</h3>
                                <div>
                                    <img src="'.get_template_directory_uri().'/assets/images/icons/V_original.svg" alt="">
                                    <p><span>Thiết lập công thức tính điểm KPI </span>cho từng vị trí, phòng ban hoặc kịch bản đánh giá khác nhau trong doanh nghiệp</p>
                                </div>
                                <div>
                                    <img src="'.get_template_directory_uri().'/assets/images/icons/V_original.svg" alt="">
                                    <p><span>Tuỳ chỉnh cách tính điểm và trọng số </span>linh hoạt, đảm bảo kết quả đánh giá chính xác và nhất quán</p>
                                </div>
                            </div>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/KPI_tudong_2.svg" alt="">
                        '
                    ],
                    [
                        'title' => 'Mẫu đánh giá',
                        'icon' => '',
                        'content_panel' => '
                            <div class="content-panel">
                                <h3>Xây dựng thư viện mẫu đánh giá KPI với AI</h3>
                                <div>
                                    <img src="'.get_template_directory_uri().'/assets/images/icons/V_original.svg" alt="">
                                    <p><span>Xây dựng thư viện mẫu đánh giá KPI </span>theo từng nhóm chức danh hoặc phòng ban với sự hỗ trợ của AI</p>
                                </div>
                                <div>
                                    <img src="'.get_template_directory_uri().'/assets/images/icons/V_original.svg" alt="">
                                    <p><span>Cho phép tái sử dụng, điều chỉnh nhanh và áp dụng </span>linh hoạt cho nhiều kỳ đánh giá trong doanh nghiệp</p>
                                </div>
                            </div>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/KPI_tudong_3.svg" alt="">
                        '
                    ],
                    [
                        'title' => 'Kỳ đánh giá',
                        'icon' => '',
                        'content_panel' => '
                            <div class="content-panel">
                                <h3>Linh hoạt theo kỳ đánh giá</h3>
                                <div>
                                    <img src="'.get_template_directory_uri().'/assets/images/icons/V_original.svg" alt="">
                                    <p><span>Thiết lập kỳ đánh giá KPI theo tháng, quý, năm </span>hoặc theo chu kỳ riêng của từng doanh nghiệp</p>
                                </div>
                                <div>
                                    <img src="'.get_template_directory_uri().'/assets/images/icons/V_original.svg" alt="">
                                    <p><span>Tự động kích hoạt kỳ đánh giá, </span>theo dõi tiến độ và tổng hợp kết quả theo từng giai đoạn</p>
                                </div>
                            </div>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/KPI_tudong_4.svg" alt="">
                        '
                    ],
                    [
                        'title' => 'Quy trình duyệt',
                        'icon' => '',
                        'content_panel' => '
                            <div class="content-panel">
                                <h3>Kiểm soát quy trình đánh giá</h3>
                                <div>
                                    <img src="'.get_template_directory_uri().'/assets/images/icons/V_original.svg" alt="">
                                    <p><span>Cấu hình quy trình phê duyệt KPI </span>nhiều cấp theo cơ cấu tổ chức và mô hình quản trị của doanh nghiệp</p>
                                </div>
                                <div>
                                    <img src="'.get_template_directory_uri().'/assets/images/icons/V_original.svg" alt="">
                                    <p><span>Kết quả đánh giá được luân chuyển, </span>rà soát và phê duyệt trực tuyến, đảm bảo minh bạch và rõ ràng</p>
                                </div>
                            </div>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/KPI_tudong_5.svg" alt="">
                        '
                    ],
                )))?>
            </div>
        </div>
    </div>
</section>

<section class="KPI-ketnoi">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Kết nối KPI với mục tiêu chiến lược và <br/>chính sách lương thưởng</h1>
                <div class="tabs-wrapper">
                    <?php get_template_part('template-parts/tabs/animation_tab',null, array('name' => 'KPI-ketnoi-tabs','tabs' => array(
                        [
                            'title' => 'Liên kết OKR',
                            'icon' => '',
                            'content_panel' => '
                                <img src="'.get_template_directory_uri().'/assets/images/demo/KPI_ketnoi_1.svg" alt="">
                                <div class="content-panel">
                                    <p>Kết nối KPI với OKR của cá nhân, đội nhóm và doanh nghiệp, giúp nhân viên hiểu rõ đóng góp của mình vào mục tiêu chung. Nhà quản lý dễ dàng theo dõi mức độ hoàn thành OKR dựa trên dữ liệu hiệu suất thực tế</p>
                                    <button class="btn-hover-bg-LTR"><p>TÌM HIỂU THÊM</p><div></div></button>
                                </div>
                            '
                        ],
                        [
                            'title' => 'Liên kết bảng lương',
                            'icon' => '',
                            'content_panel' => '
                                <img src="'.get_template_directory_uri().'/assets/images/demo/KPI_ketnoi_2.svg" alt="">
                                <div class="content-panel">
                                    <p>Tự động liên kết kết quả KPI với tính lương, thưởng và phụ cấp, giúp doanh nghiệp chi trả công bằng, nhất quán và dựa trên dữ liệu. Giảm thao tác thủ công và hạn chế sai sót trong quá trình tính toán</p>
                                    <button class="btn-hover-bg-LTR"><p>TÌM HIỂU THÊM</p><div></div></button>
                                </div>
                            '
                        ],
                    )))
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="KPI-hethong">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Hệ thống báo cáo và tổng hợp kết quả đánh giá KPI trực quan</h1>
                <div class="content">
                    <div class="item">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_circle_white_bg_original.svg" alt="">
                        <div>
                            <h3>Báo cáo hiệu suất tổng hợp</h3>
                            <p>Theo dõi và phân tích kết quả KPI theo cá nhân, đội nhóm và phòng ban trên một hệ thống thống nhất</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_circle_white_bg_original.svg" alt="">
                        <div>
                            <h3>Tự động lấy dữ liệu KPI</h3>
                            <p>Đồng bộ kết quả KPI từ 1Office và các hệ thống bên ngoài như CRM, ERP, Google Sheets…</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_circle_white_bg_original.svg" alt="">
                        <div>
                            <h3>Cập nhật theo thời gian thực</h3>
                            <p>Nhân viên có thể theo dõi tiến độ KPI hàng ngày để kịp thời điều chỉnh và đảm bảo đạt mục tiêu</p>
                        </div>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/assets/images/demo/KPI_hethong.svg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="KPI-theodoi-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="left">
                    <h1 class="title-section">Theo dõi KPI theo thời gian thực</h1>
                    <p>Nhân viên luôn nắm rõ tiến độ KPI của mình theo ngày, theo tuần, theo giai đoạn. Dữ liệu được cập nhật liên tục, giúp chủ động điều chỉnh ưu tiên công việc, cải thiện hiệu suất và bám sát mục tiêu đã cam kết </p>
                    <div class="btn-container">
                        <button><img src="<?= get_template_directory_uri(); ?>/assets/images/applestore_btn.svg" alt=""></button>
                        <button><img src="<?= get_template_directory_uri(); ?>/assets/images/googlestore_btn.svg" alt=""></button>
                    </div>
                </div>
                <div class="right">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/demo/KPI_theodoi.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>
