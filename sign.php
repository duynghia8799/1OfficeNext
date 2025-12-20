<?php
/**
 * Template Name: 1Sign 1Office Next
 * Template Post Type: page 
 */
get_header();
$data_file_path = get_template_directory() . '/data/sign_tabs_data.php';
$page_data = file_exists($data_file_path) ? require $data_file_path : [];
$tab1 = isset($page_data['ky_ket_data']) ? $page_data['ky_ket_data'] : [];

?>

<div class="sign-page">
<section class="sign-hero">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="content-container">
                    <h1 class="title-section">
                        1Sign<br/>
                        Ký số không chạm,<br/>
                        vận hành không giấy
                    </h1>
                    <p class="sub-title-section">Giải pháp ký số nhanh chóng, an toàn, lưu trữ<br/>và quản lý tài liệu tập trung</p>
                    <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template'); ?>
                </div>
                <div class="img-container">
                    <img class="laptop" src="<?= get_template_directory_uri(); ?>/assets/images/sign_hero_laptop.svg" alt="">
                    <img class="hand" src="<?= get_template_directory_uri(); ?>/assets/images/sign_hero_hand.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sign-bottom-hero">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="title">Giải quyết bài toán giao dịch điện tử và ký tá văn bản nội bộ</h2>
                <div class="content-container">
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/sign_bottom_hero_icon1.svg" alt="icon">
                        <h2>Tiết kiệm <span>80%</span> thời gian</h2>
                        <p>Ký tài liệu chỉ trong vài phút trên mọi thiết bị, thay vì<br/>mất nhiều ngày chờ đợi luân chuyển hồ sơ giấy</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/sign_bottom_hero_icon2.svg" alt="icon">
                        <h2>Giảm tới <span>90%</span> chi phí</h2>
                        <p>Giảm chi phí in ấn, chuyển phát, lưu trữ và quản lý<br/>chứng từ - giúp tối ưu ngân sách doanh nghiệp</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/sign_bottom_hero_icon3.svg" alt="icon">
                        <h2>Hạn chế <span>100%</span> rủi ro</h2>
                        <p>Giảm thiểu hoàn toàn rủi ro thất lạc và sai lệch dữ<br/>liệu, đảm bảo tính an toàn và bảo mật thông tin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work-quytrinh">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="title-process">Quy trình ký số và quản lý tài liệu<br>thuận tiện, nhanh chóng</h2>
                <div class="process-steps">
                    <div class="step-item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/sign_process_icon1.svg" alt="icon">
                        <div class="dot"></div>
                        <p>Kết nối<br>chứng thư số</p>
                    </div>
                    <div class="step-item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/sign_process_icon2.svg" alt="icon">
                        <div class="dot"></div>
                        <p>Tạo mẫu<br>chữ ký</p>
                    </div>
                    <div class="step-item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/sign_process_icon3.svg" alt="icon">
                        <div class="dot"></div>
                        <p>Chọn hoặc tạo<br>tài liệu cần ký</p>
                    </div>
                    <div class="step-item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/sign_process_icon4.svg" alt="icon">
                        <div class="dot"></div>
                        <p>Gán<br>người ký</p>
                    </div>
                    <div class="step-item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/sign_process_icon5.svg" alt="icon">
                        <div class="dot"></div>
                        <p>Thực hiện<br>ký số</p>
                    </div>
                    <div class="step-item last">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/sign_process_icon6.svg" alt="icon">
                        <div class="dot"></div>
                        <p>Lưu trữ và<br>quản lý tài liệu</p>
                    </div>
                    <div class="line"></div>
                    <div class="line-active"></div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<section class="work-quytrinh-bottom">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="comparison-wrapper">
                    <div class="comp-card before">
                        <h3>Trước đây</h3>
                        <ul>
                            <li><span class="icon dash"></span><p>Mất thời gian in ấn - ký tay - scan gửi lại</p></li>
                            <li><span class="icon dash"></span><p>Khó kiểm soát văn bản đã ký và chưa ký</p></li>
                            <li><span class="icon dash"></span><p>Không thể ký duyệt mọi lúc, mọi nơi</p></li>
                            <li><span class="icon dash"></span><p>Thiếu minh bạch, truy vết trong quy trình phê duyệt</p></li>
                            <li><span class="icon dash"></span><p>Giao nhận văn bản giấy giữa các phòng ban rêu</p></li>
                            <li><span class="icon dash"></span><p>Thiếu đồng bộ với các hệ thống văn bản, hợp đồng</p></li>
                        </ul>
                        <div class="img-container">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/sign_bottom_quytrinh1.svg" alt="img">
                        </div>
                    </div>
                    <div class="comp-card after">
                        <h3>Ký với 1SIGN</h3>
                        <ul>
                            <li><span class="icon check"></span><p>Ký kết từ xa, mọi lúc mọi nơi, mọi nền tảng</p></li>
                            <li><span class="icon check"></span><p>Lưu trữ, bảo mật và tra cứu tài liệu sau ký</p></li>
                            <li><span class="icon check"></span><p>Hỗ trợ ký số mọi loại hợp đồng, chứng từ</p></li>
                            <li><span class="icon check"></span><p>Soạn thảo, thảo luận và ký ngay trên hệ thống</p></li>
                            <li><span class="icon check"></span><p>Đảm bảo tính pháp lý điện tử theo quy định</p></li>
                            <li><span class="icon check"></span><p>Triển khai nhanh, chỉ trong 15 phút</p></li>
                        </ul>
                        <div class="img-container">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/sign_bottom_quytrinh2.svg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work-kyket">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Ký kết từ xa, mọi lúc mọi nơi trên đa nền tảng</h1>
                <?php get_template_part('template-parts/tabs/animation_tab', 'template', $tab1); ?>
            </div>
        </div>
    </div>
</section>


<section class="sign-dashboard">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="title-section">Hệ thống Dashboard và báo cáo thống kê trực quan</h2>
                <div class="content-container">
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_white_bg_blue.svg" alt="">
                        <p>Ghi lại trạng thái, thời gian ký,<br/>người ký hỗ trợ truy vết, kiểm tra</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_white_bg_blue.svg" alt="">
                        <p>Thống kê nhanh hiệu suất ký,<br/>giúp đánh giá và tối ưu quy trình</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V_white_bg_blue.svg" alt="">
                        <p>Hiển thị số lượng và trạng thái<br/>tài liệu giúp theo dõi tiến độ xử lý</p>
                    </div>
                </div>
                <div class="dashboard-image">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/demo/sign_dashboard.svg" alt="Dashboard Ký số">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sign-luutru">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="title-section">Lưu trữ, số hóa và thay thế các loại hợp đồng giấy</h2>
                <div class="content-container">
                    <div class="left">
                        <h2>Sắp xếp, phân loại khoa học</h2>
                        <ul>
                            <li><img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V.svg" alt="check"><p>Lưu trữ và quản lý toàn bộ văn bản, hồ sơ trên một nền tảng duy nhất</p></li>
                            <li><img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V.svg" alt="check"><p>Phân loại một cách khoa học theo từng nhóm đối tượng liên quan</p></li>
                            <li><img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V.svg" alt="check"><p>Hỗ trợ tìm kiếm theo thời gian thực hiện, phòng ban, nghiệp vụ</p></li>
                            <li><img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V.svg" alt="check"><p>Trích xuất một hoặc nhiều chứng từ một cách dễ dàng, nhanh chóng</p></li>
                            <li><img src="<?= get_template_directory_uri(); ?>/assets/images/icons/V.svg" alt="check"><p>Giảm thiểu rủi ro bị phân tán tài liệu, bảo mật thông tin an toàn tuyệt đối</p></li>
                        </ul>
                    </div>
                    <div class="right">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/demo/sign_luutru.svg" alt="Lưu trữ số hóa">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php 
$slider_data_source = require get_template_directory() . '/data/slider_data.php';
get_template_part('template-parts/callout_parts/tintuong_slider', null, $slider_data_source['data2']); 
?>
<section class="sign-stats">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="stats-container">
                    <div class="stat-item">
                        <div class="number">1M+</div>
                        <div class="desc">Tài liệu ký số</div>
                    </div>
                    <div class="stat-item">
                        <div class="number">496K+</div>
                        <div class="desc">Tổng HĐ Lao động</div>
                    </div>
                    <div class="stat-item">
                        <div class="number">282K+</div>
                        <div class="desc">Hợp đồng bán hàng</div>
                    </div>
                    <div class="stat-item">
                        <div class="number">22.6K+</div>
                        <div class="desc">Tổng số files đính kèm</div>
                    </div>
                    <div class="stat-item">
                        <div class="number">15.6M+</div>
                        <div class="desc">Tổng số quy trình</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sign-dangky-ai">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Giảm 90% thời gian ký duyệt<br/>Triển khai ký số cho doanh nghiệp ngay hôm nay</h1>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template'); ?>
            </div>
        </div>
    </div>
</section>

<section class="sign-faq">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="faq-container">
                    <div class="faq-item">
                        <div class="header">
                            <h3>Chi phí của chữ ký số 1Office thanh toán các gói như thế nào?</h3>
                            <div class="icon">
                                <img class="icon-plus" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus_gray.svg" alt="plus">
                                <img class="icon-minus" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/minus_gray.svg" alt="minus">
                            </div>
                        </div>
                        <div class="body">
                            <div class="content">
                                <p>Chi phí của Chữ ký số 1CA của 1Office phụ thuộc vào nhu cầu sử dụng của khách hàng. Các gói dịch vụ chính sẽ có mức phí khác nhau theo năm hoặc lượt ký.</p>
                                <p>Xem chi tiết <a href="#">bảng giá chữ ký số 1SIGN</a></p>
                                <p>Để nhận báo giá tốt nhất, doanh nghiệp liên hệ trực tiếp tới tư vấn viên: <strong>0834 838 888</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="header">
                            <h3>Các thủ tục đăng ký chữ ký số 1Office như thế nào, cần chuẩn bị gì?</h3>
                            <div class="icon">
                                <img class="icon-plus" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus_gray.svg" alt="plus">
                                <img class="icon-minus" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/minus_gray.svg" alt="minus">
                            </div>
                        </div>
                        <div class="body">
                            <div class="content">
                                <p>Để làm thủ tục đăng ký chữ ký số 1Office, doanh nghiệp, tổ chức, cá nhân có nhu cầu cần chuẩn bị hồ sơ bao gồm:</p>
                                <p>a) Đối với tổ chức, doanh nghiệp, để đăng ký chữ ký số, doanh nghiệp cần chuẩn bị đầy đủ các giấy tờ sau:</p>
                                <ul>
                                    <li>Bản sao có công chứng giấy phép đăng ký kinh doanh hoặc bản sao có công chứng giấy phép hoạt động</li>
                                    <li>Bản sao có công chứng chứng minh thư nhân dân của người đại diện pháp lý (hoặc hộ chiếu)</li>
                                </ul>
                                <p>b) Đối với các nhân chỉ cần bản sao công chứng CMND hoặc hộ chiếu của người sử dụng chữ ký số là có thể đăng ký được</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="header">
                            <h3>Chữ ký số có sử dụng được cho hợp đồng lao động không?</h3>
                            <div class="icon">
                                <img class="icon-plus" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus_gray.svg" alt="plus">
                                <img class="icon-minus" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/minus_gray.svg" alt="minus">
                            </div>
                        </div>
                        <div class="body">
                            <div class="content">
                                <p>Hiện nay, tất cả các nghiệp vụ trong doanh nghiệp đều có thể sử dụng chữ ký số 1Office: Hợp đồng lao động, hợp đồng thương mại, các chứng từ nội bộ trong doanh nghiệp (đề nghị tạm ứng, quyết định khen thưởng,...)</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="header">
                            <h3>Đối tác của DN không sử dụng 1Office thì có thể thực hiện ký số không?</h3>
                            <div class="icon">
                                <img class="icon-plus" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus_gray.svg" alt="plus">
                                <img class="icon-minus" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/minus_gray.svg" alt="minus">
                            </div>
                        </div>
                        <div class="body">
                            <div class="content">
                                <p>Hiện nay, tất cả các nghiệp vụ trong doanh nghiệp đều có thể sử dụng chữ ký số 1Office: Hợp đồng lao động, hợp đồng thương mại, các chứng từ nội bộ trong doanh nghiệp (đề nghị tạm ứng, quyết định khen thưởng,...)</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="header">
                            <h3>Sử dụng chữ ký số trên 1Office như thế nào?</h3>
                            <div class="icon">
                                <img class="icon-plus" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus_gray.svg" alt="plus">
                                <img class="icon-minus" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/minus_gray.svg" alt="minus">
                            </div>
                        </div>
                        <div class="body">
                            <div class="content">
                                <p>Sau khi tạo công việc từ Quy trình mẫu ký số, người dùng hoàn toàn có thể thực hiện thao tác ký ngay trên công việc quy trình. Người dùng có thể Upload file hoặc thực hiện ký trên File có sẵn.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<?php get_footer(); ?>

