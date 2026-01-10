<?php

/**
 * Template Name: Process 1Office Next
 */

get_header();
?>
<div class="process-page">

    <section class="process-hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title-section">Tự động hoá toàn diện quy trình nghiệp vụ</h1>
                    <p class="sub-title-section">Xây dựng luồng xử lý linh hoạt, tăng tốc phê duyệt, minh bạch trách nhiệm và đảm bảo <br/>mọi quy trình được thực thi liền mạch</p>
                    <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'button'); ?>
                    <div class="demo">
                        <?php echo file_get_contents(get_stylesheet_directory() . '/assets/images/for-animated/process_hero.svg'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="process-diemnghen">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title-section">Khi những điểm nghẽn trong quy trình đang âm thầm <br/>kéo lùi hiệu suất vận hành</h1>
                    <div class="content-container">
                        <div class="content-item">
                            <div class="flex-center">
                                <h2>Trước đây</h2>
                                <div class="content">
                                    <p><img src="<?= get_template_directory_uri() ?>/assets/images/icons/X_icon_red.svg" alt="">Công việc rời rạc, không có quy trình chuẩn</p>
                                    <p><img src="<?= get_template_directory_uri() ?>/assets/images/icons/X_icon_red.svg" alt="">Các phòng ban thiếu kết nối, trách nhiệm mơ hồ</p>
                                    <p><img src="<?= get_template_directory_uri() ?>/assets/images/icons/X_icon_red.svg" alt="">Thiếu hệ thống quản lý, công việc dễ quên sót</p>
                                    <p><img src="<?= get_template_directory_uri() ?>/assets/images/icons/X_icon_red.svg" alt="">Không biết công việc đang ở đâu, do ai xử lý</p>
                                    <p><img src="<?= get_template_directory_uri() ?>/assets/images/icons/X_icon_red.svg" alt="">Lãng phí tài nguyên, hiệu quả làm việc thấp</p>
                                </div>
                                <img class="img-content" src="<?= get_template_directory_uri() ?>/assets/images/process_diemnghen_img1.svg" alt="">
                            </div>  
                        </div>
                        <div class="content-item">
                            <div class="flex-center">
                                <h2 class="right">Thay đổi với 1Process</h2>
                                <div class="content">
                                    <p><img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_icon_green.svg" alt="">Chuẩn hoá quy trình, phòng ban phối hợp nhịp nhàng</p>
                                    <p><img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_icon_green.svg" alt="">Dữ liệu tập trung, kiểm soát trách nhiệm chặt chẽ</p>
                                    <p><img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_icon_green.svg" alt="">Theo dõi tiến trình realtime, phát hiện điểm nghẽn kịp thời</p>
                                    <p><img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_icon_green.svg" alt="">Tự động hoá tác vụ thủ công, tăng tốc độ xử lý công việc</p>
                                    <p><img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_icon_green.svg" alt="">Phân tích và tối ưu quy trình giúp cải thiện hiệu suất</p>
                                </div>
                                <img class="img-content" src="<?= get_template_directory_uri() ?>/assets/images/process_diemnghen_img2.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="content-bottom">
                        <div class="left">
                            <h2>Nhanh, chính xác <br/>và hiệu quả hơn</h2>
                        </div>
                        <div class="right">
                            <div class="item">
                                <h1 class="title-section">85%</h1>
                                <p>Xử lý công việc nhanh hơn</p>
                            </div>
                            <div class="item">
                                <h1 class="title-section">90%</h1>
                                <p>Giảm thao tác thủ công</p>
                            </div>
                            <div class="item">
                                <h1 class="title-section">60%</h1>
                                <p>Tăng tốc độ phê duyệt</p>
                            </div>
                            <div class="item">
                                <h1 class="title-section">96%</h1>
                                <p>Vận hành liền mạch hơn</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="process-sohoa">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title-section">Số hoá và tự động hoá các quy trình phức tạp một cách dễ dàng</h1>
                    <div class="tabs-panel">
                    <?php get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'sohoa', 'tabs' => array(
                        [
                            'content_tab' =>'
                                <div class="tab-item">
                                    <h2>Thiết lập quy trình trực quan, kéo thả dễ dàng</h2>
                                    <div class="content c1">
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Dễ dàng xây dựng luồng công việc với giao diện kéo-thả</p></div>
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>AI phân tích dữ liệu và tự động xây dựng quy trình thông minh</p></div>
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Thiết lập quy trình động, gồm nhiều bước, điều kiện, rẽ nhánh,...</p></div>
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Kiểm soát quyền truy cập, gán bộ phận và cá nhân cụ thể</p></div>
                                    </div>
                                </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/process_sohoa_1.svg" alt="">
                            ',
                        ],
                        [
                            'content_tab' =>'
                                <div class="tab-item">
                                    <h2>Quản lý & giám sát theo thời gian thực</h2>
                                    <div class="content c2">
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Hiển thị trạng thái của từng bước trong quy trình, ai xử lý, mất bao lâu</p></div>
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Tích hợp AI giúp giám sát, cảnh báo và tư vấn tối ưu các quy trình</p></div>
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Báo cáo thời gian hoàn thành, tích hợp KPI & OKR đánh giá hiệu suất</p></div>
                                    </div>
                                </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/process_sohoa_2.svg" alt="">
                            ',
                        ],
                        [
                            'content_tab' =>'
                                <div class="tab-item">
                                    <h2>Tự động hoá với các Node mạnh mẽ</h2>
                                    <div class="content c3">
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Node Điều kiện: Thiết lập điều kiện rẽ nhánh từ giá trị đầu vào</p></div>
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Node Tích hợp: Kết nối với hệ thống ngoài như CRM, ERP, HRM,...</p></div>
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Node Var: Tạo biến động để sử dụng trong quy trình</p></div>
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Node Form Design: Thiết lập các biểu mẫu điện tử</p></div>
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Node Nhắc nhở & Cảnh báo: Cảnh báo khi quy trình bị chậm trễ</p></div>
                                    </div>
                                </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/process_sohoa_3.svg" alt="">
                            ',
                        ],
                        [
                            'content_tab' =>'
                                <div class="tab-item">
                                    <h2>Tích hợp ký số ngay trên quy trình</h2>
                                    <div class="content c4">
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Tích hợp với mọi loại chữ ký số và tất cả nhà cung cấp</p></div>
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Cài đặt điều kiện ký linh hoạt, thao tác ký đơn giản trên quy trình</p></div>
                                        <div><img src="' . get_template_directory_uri() . '/assets/images/icons/V_icon_green.svg" alt=""><p>Trình và Ký một lúc nhiều file, đính kèm file vào quy trình/ đối tượng</p></div>
                                    </div>
                                </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/process_sohoa_4.svg" alt="">
                            ',
                        ],
                    ))); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="process-thietke">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title-section">Thiết kế mọi mẫu form với Form design</h1>
                    <div class="tabs-panel">
                    <?php get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'thietke', 'tabs' => array(
                        [
                            'content_tab' =>'
                                <div class="tab-item">
                                    <h2>Tuỳ chỉnh linh hoạt</h2>
                                    <p>Tùy chỉnh, kéo - thả và sắp xếp các trường dữ liệu theo nhu cầu, giúp tạo form nhanh chóng</p>
                                </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/process_thietke_1.svg" alt="">
                            ',
                        ],
                        [
                            'content_tab' =>'
                                <div class="tab-item">
                                    <h2>Liên thông dữ liệu</h2>
                                    <p>Liên kết trực tiếp với các đối tượng có sẵn trong 1Office như khách hàng, nhân sự, phòng ban,…</p>
                                </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/process_thietke_2.svg" alt="">
                            ',
                        ],
                        [
                            'content_tab' =>'
                                <div class="tab-item">
                                    <h2>Định nghĩa “từ khoá”</h2>
                                    <p>Định nghĩa “Từ khóa” để tổng hợp báo cáo, ký số hoặc tự động điền dữ liệu vào các bước quy trình</p>
                                </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/process_thietke_3.svg" alt="">
                            ',
                        ],
                        [
                            'content_tab' =>'
                                <div class="tab-item">
                                    <h2>Cài đặt quyền hành động</h2>
                                    <p>Cấu hình quyền thực hiện tại từng Node, cho phép chỉ định người xử lý và giới hạn quyền hành động các bước tiếp theo</p>
                                </div>
                            ',
                            'content_panel' => '
                                <img src="' . get_template_directory_uri() . '/assets/images/demo/process_thietke_4.svg" alt="">
                            ',
                        ],
                    )))?>
                    </div>
            </div>
        </div>
    </section>
    <section class="process-workflow">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title-section">Xây dựng Workflow cho mọi nghiệp vụ, <br/>phối hợp liên phòng ban hiệu quả</h1>
                    <div class="content-container">
                        <div class="item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icons/process_workflow_item1.svg" alt="">
                            <div class="content">
                                <h2>Vận hành nội bộ</h2>
                                <p>Khai thác sức mạnh tự động hóa trong các tác vụ hành chính - vận hành. Chuẩn hóa luồng xử lý, giảm phụ thuộc thủ công và đảm bảo các bước thực hiện nhất quán trên toàn doanh nghiệp</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icons/process_workflow_item2.svg" alt="">
                            <div class="content">
                                <h2>Nhân sự</h2>
                                <p>Tạo trải nghiệm vận hành đồng nhất cho HR: tuyển dụng, Onboarding, đề xuất - phê duyệt, chấm công - lương. Thu thập và luân chuyển thông tin tự động, giảm lỗi và tăng tính minh bạch.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icons/process_workflow_item3.svg" alt="">
                            <div class="content">
                                <h2>Kinh doanh</h2>
                                <p>Đảm bảo dữ liệu khách hàng và giao dịch được xử lý chính xác ở từng bước. Tự động hóa quy trình chăm sóc, báo giá, phê duyệt… giúp đội ngũ kinh doanh phản hồi nhanh và không bỏ sót cơ hội.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icons/process_workflow_item4.svg" alt="">
                            <div class="content">
                                <h2>Chăm sóc và hỗ trợ</h2>
                                <p>Mang đến trải nghiệm dịch vụ nhất quán. Tự động nhận yêu cầu, phân loại, gán người xử lý và theo dõi tiến độ. Rút ngắn thời gian phản hồi và nâng cao mức độ hài lòng của khách hàng</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="process-luachon">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title-section">Vì sao doanh nghiệp nên lựa chọn 1Process?</h1>
                    <div class="content-container">
                        <div class="left">
                            <div class="item">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/icons/process_luachon_item1.svg" alt="">
                                <div class="content">
                                    <h2>Giao diện trực quan</h2>
                                    <p>Giao diện kéo-thả trực quan giúp mọi phòng ban tự thiết kế luồng công việc mà không cần IT. Dễ dàng chuẩn hóa và triển khai trong thời gian ngắn từ quy trình đơn giản đến phức tạp</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/icons/process_luachon_item2.svg" alt="">
                                <div class="content">
                                    <h2>Kết nối liền mạch</h2>
                                    <p>Kết nối và tích hợp sâu với toàn bộ hệ sinh thái 1Office và các hệ thống khác: CRM, HRM, Kế toán, bán hàng,... Dữ liệu được kết nối  tự động, loại bỏ nhập liệu lặp lại và sai sót.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/icons/process_luachon_item3.svg" alt="">
                                <div class="content">
                                    <h2>Tích hợp AI</h2>
                                    <p>AI theo dõi dữ liệu thực thi để nhận diện điểm nghẽn và gợi ý hướng cải tiến. Quy trình được tối ưu liên tục, giúp nhà quản lý đưa ra quyết định nhanh chóng và  nâng cao hiệu suất vận hành</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/icons/process_luachon_item4.svg" alt="">
                                <div class="content">
                                    <h2>Báo cáo realtime</h2>
                                    <p>Hệ thống báo cáo trực quan, đa chiều. Dữ liệu thực thi được tổng hợp realtime: thời gian xử lý, tắc nghẽn, SLA, hiệu suất từng bước,... từ đó đưa ra quyết định và hành động chính xác hơn</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/icons/process_luachon_item5.svg" alt="">
                                <div class="content">
                                    <h2>An toàn và bảo mật</h2>
                                    <p>Hệ thống kiểm soát quyền  truy cập chặt chẽ. Mọi thao tác, dữ liệu trên từng bước quy trình đều được ghi nhận, giúp duy trì mức độ an toàn cao và đảm bảo tính minh bạch tuyệt đối</p>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/process_luachon_img.svg" alt="">
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
        <img class="top-footer-bg" src="<?= get_template_directory_uri() . '/assets/images/ai_light_bg_tear.svg' ?>" alt="">
        <div class="container">
            <div class="row">
                <div class="content">
                    <h1 class="title-section">Vận hành liền mạch, tự động hoá hàng trăm <br/>quy trình với một nền tảng</h1>
                    <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template') ?>
                </div>
            </div>
        </div>
    </section>    


</div>
<?php get_footer(); ?>