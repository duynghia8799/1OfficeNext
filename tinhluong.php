<?php

/**
 * Template Name: Tính lương 1OfficeNext
 */

get_header(); ?>
<div class="tinhluong-page">

<section class="tinhluong-hero">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section"> Tự động hoá toàn diện quy trình tính và chi trả lương</h1>
                <p class="sub-title-section">Tính lương linh hoạt theo chính sách doanh nghiệp, tự động tổng hợp dữ liệu công - ca - thuế - bảo hiểm <br/>và tạo bảng lương chính xác mỗi kỳ</p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'button')?>
                <img src="<?= get_template_directory_uri()?>/assets/images/demo/tinhluong_hero.svg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="tinhluong-loaibo">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Loại bỏ hoàn toàn tình trạng dữ liệu rời rạc <br/>trong quản lý tiền lương</h1>
                <div class="content">
                    <div class="item">
                        <img src="<?= get_template_directory_uri()?>/assets/images/icons/tinhluong_loaibo_item1.svg" alt="">
                        <h3>Thủ công → <span>Tự động hóa</span></h3>
                        <p>Nói lời tạm biệt với việc tính lương thủ công tốn thời gian, công thức phức tạp và rủi ro sai sót kéo dài. Với một quy trình tính lương được tự động hóa và chuẩn hóa, bộ phận C&B có thể xử lý nhanh hơn, chính xác hơn và tập trung nhiều hơn vào các giá trị chiến lược</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri()?>/assets/images/icons/tinhluong_loaibo_item2.svg" alt="">
                        <h3>Phân tán → <span>Tập trung</span></h3>
                        <p>Chấm dứt tình trạng dữ liệu lương nằm rải rác ở nhiều file, nhiều hệ thống và nhiều bước đối soát rời rạc. Toàn bộ thông tin lương, thuế và bảo hiểm được tập trung trên một nền tảng thống nhất, việc quản lý trở nên liền mạch, rõ ràng và dễ kiểm soát hơn bao</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri()?>/assets/images/icons/tinhluong_loaibo_item3.svg" alt="">
                        <h3>Mơ hồ → <span>Minh bạch</span></h3>
                        <p>Không còn những băn khoăn xoay quanh cách tính lương và lịch sử thu nhập của nhân viên. Một trải nghiệm minh bạch cho phép mỗi cá nhân chủ động xem phiếu lương, hiểu rõ từng khoản chi trả, từ đó xây dựng niềm tin và sự gắn kết lâu dài</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tinhluong-tudonghoa">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Tự động hóa tính lương trên nền tảng <br/>dữ liệu tập trung</h1>
                <div class="tabs-wrapper">
                <?php get_template_part('template-parts/tabs/animation_tab', null, array('name' => 'tinhluong-tudonghoa-tabs','tabs' => array(
                    [
                        'title' => 'Liên thông và kế thừa dữ liệu',
                        'icon' => '',
                        'content_panel' => '
                            <p class="sub-title-section">Hệ thống tự động kế thừa dữ liệu từ chấm công, KPI, thưởng - phạt và các nguồn liên quan, <br/>đảm bảo dữ liệu tính lương luôn nhất quán</p>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/tinhluong_tudonghoa_1.svg" alt="">
                        '
                    ],
                    [
                        'title' => 'AI tự động cấu hình bảng lương',
                        'icon' => '',
                        'content_panel' => '
                            <p class="sub-title-section">AI phân tích dữ liệu, hỗ trợ xây dựng bảng lương tự động, đồng thời phát hiện sai lệch <br/>và đề xuất điều chỉnh công thức nhằm đảm bảo tính chính xác</p>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/tinhluong_tudonghoa_2.svg" alt="">
                        '
                    ],
                    [
                        'title' => 'Đa dạng phương thức tính lương',
                        'icon' => '',
                        'content_panel' => '
                            <p class="sub-title-section">Đáp ứng nhiều mô hình lương khác nhau như lương thời gian, lương khoán, lương sản xuất, <br/>lương kinh doanh theo KPI hoặc hoa hồng</p>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/tinhluong_tudonghoa_3.svg" alt="">
                        '
                    ],
                    [
                        'title' => 'Tự động tính thuế và bảo hiểm',
                        'icon' => '',
                        'content_panel' => '
                            <p class="sub-title-section">Hệ thống tự động tính toán thuế thu nhập cá nhân và các khoản bảo hiểm theo quy định, <br/>giảm sai sót và rủi ro trong quá trình xử lý lương</p>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/tinhluong_tudonghoa_4.svg" alt="">'
                    ],
                )))?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tinhluong-chitra">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Chi trả lương tự động, nhanh chóng và minh bạch</h1>
                <div class="tabs-wrapper">
                <?php get_template_part('template-parts/tabs/animation_tab2', null, array('name' => 'tinhluong-chitra-tabs','tabs' => array(
                    [
                        'content_tab' => '
                            <h3>Tự động sinh bảng lương định kỳ</h3>
                            <p>Hệ thống tự động tạo bảng lương theo chu kỳ hàng tháng hoặc theo cấu hình, giảm thao tác thủ công và đảm bảo tính nhất quán mỗi kỳ lương</p>
                        ',
                        'content_panel' => '
                            <img src="'.get_template_directory_uri().'/assets/images/demo/tinhluong_chitra_1.svg" alt="">
                        '
                    ],
                    [
                        'content_tab' => '
                            <h3>Tạo không giới hạn các loại bảng lương</h3>
                            <p>Cho phép thiết lập nhiều bảng lương khác nhau theo nhóm nhân sự, phòng ban hoặc mô hình làm việc, đáp ứng linh hoạt nhu cầu doanh nghiệp</p>
                        ',
                        'content_panel' => '
                            <img src="'.get_template_directory_uri().'/assets/images/demo/tinhluong_chitra_2.svg" alt="">
                        '
                    ],
                    [
                        'content_tab' => '
                            <h3>Duyệt lương online theo quy trình</h3>
                            <p>Cài đặt luồng duyệt lương theo cấp bậc, giúp phê duyệt nhanh chóng, minh bạch và dễ dàng kiểm soát trong suốt quá trình xử lý</p>
                        ',
                        'content_panel' => '
                            <img src="'.get_template_directory_uri().'/assets/images/demo/tinhluong_chitra_3.svg" alt="">
                        '
                    ],
                    [
                        'content_tab' => '  
                            <h3>Tích hợp ngân hàng để chi trả lương</h3>
                            <p>Kết nối trực tiếp với ngân hàng để chuyển lương hàng loạt, giảm rủi ro sai sót và tiết kiệm thời gian cho bộ phận C&B và tài chính</p>
                        ',
                        'content_panel' => '
                            <img src="'.get_template_directory_uri().'/assets/images/demo/tinhluong_chitra_4.svg" alt="">'
                    ],

                )))?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tinhluong-kiemsoat">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section">Kiểm soát quỹ lương rõ ràng với hệ thống báo cáo trực quan</h1>
                <div class="content">
                    <div class="item">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_out_white_border_orange.svg" alt="">
                        <p>Trực quan hóa dữ liệu quỹ lương theo thời gian thực trên Dashboard</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_out_white_border_orange.svg" alt="">
                        <p>Theo dõi tổng lương, thưởng, thuế và bảo hiểm theo từng kỳ</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_out_white_border_orange.svg" alt="">
                        <p>Phân tích chi phí tiền lương theo phòng ban, vị trí hoặc nhóm nhân sự</p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_out_white_border_orange.svg" alt="">
                        <p>Hỗ trợ xuất báo cáo phục vụ quản trị và ra quyết định nhanh chóng</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/assets/images/demo/tinhluong_kiemsoat.svg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="tinhluong-phieuluong">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="left">
                    <h1 class="title-section">Phiếu lương điện tử <br/>minh bạch cho nhân viên</h1>
                    <div class="content">
                        <div class="item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_out_blue_border_orange.svg" alt="">
                            <p>Tự động phát hành phiếu lương hàng tháng</p>
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_out_blue_border_orange.svg" alt="">
                            <p>Tra cứu phiếu lương trực tuyến mọi lúc, mọi nơi</p>
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_out_blue_border_orange.svg" alt="">
                            <p>Lưu trữ lịch sử phiếu lương, thuận tiện đối soát</p>
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icons/V_out_blue_border_orange.svg" alt="">
                            <p>Thông tin lương, thu nhập và khấu trừ hiển thị rõ ràng</p>
                        </div>
                    </div>
                    <div class="btn-container">
                        <button><img src="<?= get_template_directory_uri(); ?>/assets/images/applestore_btn.svg" alt=""></button>
                        <button><img src="<?= get_template_directory_uri(); ?>/assets/images/googlestore_btn.svg" alt=""></button>
                    </div>
                </div>
                <div class="right">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/demo/tinhluong_phieuluong.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
$slider_data_source = require get_template_directory() . '/data/slider_data.php';
get_template_part('template-parts/callout_parts/tintuong_slider', null, $slider_data_source['data3']); 
?>

<section class="top-footer">
    <img class="top-footer-bg" src="<?= get_template_directory_uri() . '/assets/images/ai_light_bg_darkblue.svg' ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="content">
                <h1 class="title-section">Kiểm soát quỹ lương hiệu quả, tự động hóa toàn bộ <br/>quy trình tính - duyệt - chi trên một nền tảng</h1>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template') ?>
            </div>
        </div>
    </div>
</section>




</div>
<?php get_footer()?>