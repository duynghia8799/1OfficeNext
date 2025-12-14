<?php

/**
 * Template Name: Work 1OfficeNext
 * Template Post Type: page 
 */
get_header();
$data_file_path = get_template_directory() . '/data/work_tabs_data.php';
$page_data = file_exists($data_file_path) ? require $data_file_path : [];

$tab1 = isset($page_data['dieu_phoi_data']) ? $page_data['dieu_phoi_data'] : [];

?>

<div class="void-box" style="background-color: #666666; width: 100%; height: 100vh;"></div>

<section class="work-dieuphoi">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Điều phối dự án và kiểm soát công việc hiệu quả</h1>
                <?php get_template_part('template_parts/tabs/animation_tab', 'template', $tab1); ?>
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

<div class="void-box" style="background-color: #666666; width: 100%; height: 100vh;"></div>

<?php get_footer();
