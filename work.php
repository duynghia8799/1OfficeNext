<?php

/**
 * Template Name: Work 1OfficeNext
 * Template Post Type: page 
 */
get_header();
$data_file_path = get_template_directory() . '/data/work_tabs_data.php';
$page_data = file_exists($data_file_path) ? require $data_file_path : [];

$tab1 = isset($page_data['dieu_phoi_data']) ? $page_data['dieu_phoi_data'] : [];
$tab2 = isset($page_data['lien_ket_data']) ? $page_data['lien_ket_data'] : [];

?>

<section class="work-hero">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Giải pháp quản lý dự án và công việc</h1>
                <div class="line2">
                    <h1 class="title-section">thông minh giúp&nbsp;</h1>
                    <h1 class="title-section scroll">
                        <span>nâng cao hiệu xuất</span>
                        <span>đội nhóm linh hoạt</span>
                        <span>thúc đẩy công tác</span>
                    </h1>
                </div>
                <p class="sub-title-section">
                    <span><img src="<?= get_template_directory_uri() . '/assets/images/icons/V_circle_original.svg' ?>" alt="">Lập kế hoạch dự án</span>
                    <span><img src="<?= get_template_directory_uri() . '/assets/images/icons/V_circle_original.svg' ?>" alt="">Theo dõi công việc</span>
                    <span><img src="<?= get_template_directory_uri() . '/assets/images/icons/V_circle_original.svg' ?>" alt="">Cộng tác nhóm</span>
                    <span><img src="<?= get_template_directory_uri() . '/assets/images/icons/V_circle_original.svg' ?>" alt="">Giao việc hiệu quả</span>
                </p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai') ?>
                <img class="img-fluid" src="<?= get_template_directory_uri() . '/assets/images/demo/work_hero.svg' ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section class="work-benefits">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Giúp nhân sự duy trì nhịp làm việc<br>ổn định và năng suất dù ở bất kỳ đâu</h1>
                <div class="benefits-grid">
                    <div class="benefit-card">
                        <div class="icon"><img src="<?= get_template_directory_uri() . '/assets/images/icons/work_benefits_item1.svg' ?>" alt=""></div>
                        <div class="stat">32%</div>
                        <div class="desc">Giảm 32% tình trạng giao việc sai người, sai đầu việc, hỗ trợ phân bổ công việc theo năng lực, workload và tối ưu hóa nguồn lực trong đội nhóm.</div>
                    </div>
                    <div class="benefit-card">
                        <div class="icon"><img src="<?= get_template_directory_uri() . '/assets/images/icons/work_benefits_item2.svg' ?>" alt=""></div>
                        <div class="stat">41%</div>
                        <div class="desc">Giảm 41% tình trạng chồng chéo việc, mỗi việc gắn người phụ trách, deadline, tiến độ - loại bỏ đùn đẩy trách nhiệm và nhầm lẫn trong quá trình thực thi.</div>
                    </div>
                    <div class="benefit-card">
                        <div class="icon"><img src="<?= get_template_directory_uri() . '/assets/images/icons/work_benefits_item3.svg' ?>" alt=""></div>
                        <div class="stat">1.7x</div>
                        <div class="desc">Tăng 1.7 lần tỷ lệ hoàn thành công việc đúng hạn nhờ hệ thống theo dõi tiến độ theo thời gian thực, cảnh báo công việc/dự án có nguy cơ trễ hạn.</div>
                    </div>
                    <div class="benefit-card">
                        <div class="icon"><img src="<?= get_template_directory_uri() . '/assets/images/icons/work_benefits_item4.svg' ?>" alt=""></div>
                        <div class="stat">03h</div>
                        <div class="desc">Bình luận, chia sẻ tài liệu và checklist ngay trên đầu việc giúp tiết kiệm trung bình 3 giờ/tuần do không còn thất lạc thông tin qua email và chat rời rạc.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="work-comparison">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Công việc quá tải, thiếu dữ liệu quản lý?</h1>
                <div class="comparison-container">
                    <div class="comparison-card sad">
                        <h3 class="card-title">Thay vì...</h3>
                        <ul class="list">
                            <li><img src="<?= get_template_directory_uri() . '/assets/images/icons/icon_cross_red.svg' ?>" alt="">Công việc chồng chất, luôn trong tình trạng quá tải</li>
                            <li><img src="<?= get_template_directory_uri() . '/assets/images/icons/icon_cross_red.svg' ?>" alt="">Không ai nắm được tiến độ, dẫn đến bỏ sót, đùn đẩy</li>
                            <li><img src="<?= get_template_directory_uri() . '/assets/images/icons/icon_cross_red.svg' ?>" alt="">Chi phí, vật tư thất thoát do hệ thống quản lý rời rạc</li>
                            <li><img src="<?= get_template_directory_uri() . '/assets/images/icons/icon_cross_red.svg' ?>" alt="">Báo cáo thủ công, thiếu dữ liệu để ra quyết định</li>
                        </ul>
                        <div class="card-image">
                            <img src="<?= get_template_directory_uri() . '/assets/images/work_comparison_img1.svg' ?>" alt="Sad Worker">
                        </div>
                    </div>
                    <div class="comparison-card happy">
                        <h3 class="card-title">Với 1WORK</h3>
                        <ul class="list">
                            <li><img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">Hệ thống cảnh báo workload thông minh, tối ưu phân bổ nhân sự</li>
                            <li><img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">Theo dõi tiến độ theo deadline, giai đoạn và milestone</li>
                            <li><img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">Quản lý dự án đa chiều: nhân sự, vật tư, chi phí,... tập trung, minh bạch</li>
                            <li><img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">Dashboard & báo cáo tự động, tổng hợp dữ liệu realtime</li>
                        </ul>
                        <div class="card-image">
                            <img src="<?= get_template_directory_uri() . '/assets/images/work_comparison_img2.svg' ?>" alt="Happy Worker">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="work-dieuphoi">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Điều phối dự án và kiểm soát công việc hiệu quả</h1>
                <?php get_template_part('template-parts/tabs/animation_tab', 'template', $tab1); ?>
            </div>
        </div>
    </div>
</section>

<section class="work-lienket">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Liên kết với KPI và OKR giúp đo lường hiệu suất tự động</h1>
                <?php get_template_part('template-parts/tabs/animation_tab', 'template', $tab2); ?>
            </div>
        </div>
    </div>
</section>

<section class="work-tudonghoa">
    <div class="container">
        <div class="row">
            <h1 class="title-section">Tích hợp AI giúp tự động hóa giao việc và báo cáo</h1>
            <div class="col">
                <div class="left">
                    <div class="content-container" data-img="1">
                        <h2 class="title">Tự động giao việc và tối ưu Workload</h2>
                        <div class="content">
                            <div class="item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">
                                <p>Tự động lắng nghe, tạo biên bản cuộc họp và giao việc dựa trên biên bản</p>
                            </div>
                            <div class="item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">
                                <p>Tự động phân tích sự kiện xảy ra để tự động giao việc cho người thực hiện</p>
                            </div>
                            <div class="item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">
                                <p>Đánh giá khối lượng công việc và năng lực để gợi ý người thực hiện tối ưu</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-container" data-img="2">
                        <h2 class="title">Hỗ trợ báo cáo công việc tự động</h2>
                        <div class="content">
                            <div class="item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">
                                <p>Cập nhật tiến độ công việc hoặc các báo cáo khác bằng giọng nói</p>
                            </div>
                            <div class="item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">
                                <p>Nắm bắt tình hình, số liệu công việc nhanh chóng theo thời gian thực</p>
                            </div>
                            <div class="item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">
                                <p>Tiết kiệm thời gian tổng hợp, nhập liệu và đảm bảo tính chính xác</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-container" data-img="3">
                        <h2 class="title">Cảnh báo thông minh khi có rủi ro</h2>
                        <div class="content">
                            <div class="item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">
                                <p>Nếu có công việc chậm tiến độ, AI dự đoán nguy cơ trễ hạn dự án</p>
                            </div>
                            <div class="item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">
                                <p>Hệ thống cảnh báo khi chi phí đội lên quá mức so với ngân sách</p>
                            </div>
                            <div class="item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>" alt="">
                                <p>AI phân tích dữ liệu để đề xuất cách tối ưu hóa quy trình làm việc</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img class="img-1" src="<?= get_template_directory_uri() . '/assets/images/demo/work_tudonghoa_1.svg' ?>" alt="demo">
                    <img class="img-2" src="<?= get_template_directory_uri() . '/assets/images/demo/work_tudonghoa_2.svg' ?>" alt="demo">
                    <img class="img-3" src="<?= get_template_directory_uri() . '/assets/images/demo/work_tudonghoa_3.svg' ?>" alt="demo">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="work-chuyendoi">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Chuyển đổi cách đội ngũ cộng tác và giao tiếp</h1>
                <div class="content-container">
                    <img class="img-fluid" src="<?= get_template_directory_uri() . '/assets/images/demo/work_chuyendoi.svg' ?>" alt="">
                    <div class="content">
                        <p>
                            <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>">
                            Cho phép tạo nhóm chat các phòng ban, vị trí hoặc chức vụ cụ thể
                        </p>
                        <p>
                            <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>">
                            Thêm các nhân sự liên quan đến công việc mà không cần phải tìm kiếm
                        </p>
                        <p>
                            <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>">
                            Trao đổi trực tiếp trên đầu việc giúp nắm bắt thông tin nhanh chóng
                        </p>
                        <p>
                            <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>">
                            Tự động lưu lại lịch sử thảo luận, dễ dàng tra cứu khi cần
                        </p>
                        <p>
                            <img src="<?= get_template_directory_uri() . '/assets/images/icons/congviec_vector_blue.svg' ?>">
                            Dễ dàng chia sẻ và đính kèm tài liệu trên thảo luận và đoạn chat
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="work-dashboard">
    <div class="top">
        <div class="container">
            <div class="row">   
                <div class="col">
                    <h1 class='title-section'>Dashboard trực quan và báo cáo đa dạng</h1>
                    <p class='sub-title-section'>Hệ thống Dashboard và báo cáo chi tiết từng hạng mục theo thời gian thực,<span class="br-line">cho phép tùy chỉnh theo nhu cầu doanh nghiệp</span></p>
                    <img src="<?= get_template_directory_uri() . '/assets/images/demo/work_dashboard.svg' ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row">   
                <div class="col">
                    <img src="<?= get_template_directory_uri() . '/assets/images/work_dashboard_content.svg' ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/callout_parts/tintuong_slider'); ?>

<section class="top-footer">
    <img class="top-footer-bg" src="<?= get_template_directory_uri() . '/assets/images/ai_light_bg_blue.svg' ?>" alt="">
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
