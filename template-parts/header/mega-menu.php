<div class="mega-menu">
    <div class="menu-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="menu-module nav">
                        <li class="nav-item">
                            <a class="info-item">
                                <span class="title">1WORK</span>
                                <span class="desc">Quản lý công việc, dự án và quy trình DN</span>
                            </a>
                            <span class="arrow" data-bs-toggle="pill" data-bs-target="#mega-1work">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/Chevron_blue_right.svg" alt="icon">
                            </span>
                        </li>
                        <li class="nav-item">
                            <a class="info-item">
                                <span class="title">1HRM</span>
                                <span class="desc">Quản lý nhân sự, công, lương và hiệu suất</span>
                            </a>
                            <span class="arrow" data-bs-toggle="pill" data-bs-target="#mega-1hrm">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/Chevron_blue_right.svg" alt="icon">
                            </span>
                        </li>
                        <li class="nav-item">
                            <a class="info-item">
                                <span class="title">1CRM</span>
                                <span class="desc">Quản lý khách hàng và hoạt động KD</span>
                            </a>
                            <span class="arrow" data-bs-toggle="pill" data-bs-target="#mega-1crm">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/Chevron_blue_right.svg" alt="icon">
                            </span>
                        </li>
                        <li class="nav-item">
                            <a class="info-item">
                                <span class="title">1SIGN</span>
                                <span class="desc">Ký số & duyệt tài liệu điện tử nhanh chóng</span>
                            </a>
                            <span class="arrow" data-bs-toggle="pill" data-bs-target="#mega-1sign">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/Chevron_blue_right.svg" alt="icon">
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="menu-content tab-content">
                        <div class="tab-pane fade show active" id="mega-1work">
                            Content 1Work
                        </div>
                        <div class="tab-pane fade" id="mega-1hrm">
                            Content 1HRM
                        </div>
                        <div class="tab-pane fade" id="mega-1crm">
                            Content 1CRM
                        </div>
                        <div class="tab-pane fade" id="mega-1sign">
                            Content 1SIGN
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php /*
<div class="container">
 <div class="row">
     <div class="mega_menu_content">
         <div class="col-xl-3">
             <div class="mega_menu_cat_container">
                 <div class='mega_menu_cat nav nav-tabs'>

                     <div class="mega_menu_cat_btn cat_1work">
                         <a href="#">
                             <h2 class="title">1WORK</h2>
                             <p class="desc">Quản lý công việc, dự án và quy trình DN</p>
                         </a>
                         <button class='nav-link' id="work_tab" data-bs-toggle="tab" data-bs-target="#work_panel"
                             role="tab">
                             <img class="chevron_right "
                                 src="<?= get_template_directory_uri() ?> '/assets/images/Chevron_blue_right.svg'"
                                 alt="icon">
                         </button>
                     </div>
                     <div class="mega_menu_cat_btn cat_1hrm">
                         <a href="#">
                             <h2 class="title">1HRM</h2>
                             <p class="desc">Quản lý nhân sự, công, lương và hiệu suất</p>
                         </a>
                         <button class='nav-link' id="hrm_tab" data-bs-toggle="tab" data-bs-target="#hrm_panel"
                             role="tab">
                             <img class="chevron_right "
                                 src="<?= get_template_directory_uri() ?> '/assets/images/Chevron_blue_right.svg'"
                                 alt="icon">
                         </button>
                     </div>
                     <div class="mega_menu_cat_btn cat_1crm">
                         <a href="#">
                             <h2 class="title">1CRM</h2>
                             <p class="desc">Quản lý khách hàng và hoạt động KD</p>
                         </a>
                         <button class='nav-link' id="crm_tab" data-bs-toggle="tab" data-bs-target="#crm_panel"
                             role="tab">
                             <img class="chevron_right "
                                 src="<?= get_template_directory_uri() ?> '/assets/images/Chevron_blue_right.svg'"
                                 alt="icon">
                         </button>
                     </div>

                     <div class="mega_menu_cat_btn cat_1sign">
                         <a href="#">
                             <h2 class="title">1SIGN</h2>
                             <p class="desc">Ký số & duyệt tài liệu điện tử nhanh chóng</p>
                         </a>
                         <button>
                             <img class="chevron_right "
                                 src="<?= get_template_directory_uri() ?> '/assets/images/Chevron_blue_right.svg'"
                                 alt="icon">
                         </button>
                     </div>

                 </div>
                 <div class="line"></div>
             </div>
         </div>
         <div class="col-xl-9">
             <div class="tab-content">
                 <!--1work mega menu-->
                 <div class='container_items items_1work tab-pane' id="work_panel" role="tabpanel"
                     aria-labelledby="work_tab">
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/duan.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/duan_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Dự án</h2>
                         <p>Quản lý tiến độ, nhân lực, dòng tiền dự án</p>
                     </a>

                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/congviec.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/congviec_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Công việc</h2>
                         <p>Giao việc, giám sát và đánh giá kết quả</p>
                     </a>

                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/quytrinh.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/quytrinh_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Quy trình</h2>
                         <p>Số và tự động hóa 100% quy trình DN</p>
                     </a>

                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/vanban.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/vanban_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Văn bản</h2>
                         <p>Quản lý công văn đi, đến nội bộ</p>
                     </a>

                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/tailieu.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/tailieu_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Tài liệu</h2>
                         <p>Lưu trữ, chia sẻ và quản lý tài liệu</p>
                     </a>

                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/lichbieu.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/lichbieu_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Lịch biểu</h2>
                         <p>Lịch làm việc công ty, phòng ban</p>
                     </a>

                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/taisan.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/taisan_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Tài sản</h2>
                         <p>Thông tin, quá trình sử dụng tài sản</p>
                     </a>

                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/mangnoibo.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/mangnoibo_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Mạng nội bộ</h2>
                         <p>Truyền thông nội bộ và văn hoá doanh nghiệp</p>
                     </a>

                     <div class="foot_menu_row">
                         <a class="bookademo" href="#">
                             Book a demo
                             <img src="<?= get_template_directory_uri() ?>/assets/images/Chevron_right.svg"
                                 alt="icon">
                             <img class="hover"
                                 src="<?= get_template_directory_uri() ?>/assets/images/Chevron_blue_right.svg"
                                 alt="icon">
                         </a>
                         <div class="line"></div>
                         <a class="truycap" href="#">
                             Truy cập 1Work
                             <img src="<?= get_template_directory_uri() ?>/assets/images/Chevron_right.svg"
                                 alt="icon">
                             <img class="hover"
                                 src="<?= get_template_directory_uri() ?>/assets/images/Chevron_blue_right.svg"
                                 alt="icon">
                         </a>
                     </div>
                 </div>

                 <!--1hrm mega menu-->
                 <div class='container_items items_1hrm tab-pane' id="hrm_panel" role="tabpanel"
                     aria-labelledby="hrm_tab">
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/tuyendung.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/tuyendung_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Tuyển dụng</h2>
                         <p>Xây dựng, quản lý quy trình tuyển dụng</p>
                     </a>

                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/nhansu.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/nhansu_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Nhân sự</h2>
                         <p>Hồ sơ, hợp đồng, bảo hiểm nhân sự</p>
                     </a>

                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/chamcong.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/chamcong_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Chấm công</h2>
                         <p>Quản lý công, phép, làm thêm, nghỉ bù</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/tienluong.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/tienluong_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Tiền lương</h2>
                         <p>Tính và trả lương trực tiếp qua MBbank</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/danhgia.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/danhgia_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Đánh giá</h2>
                         <p>Quản lý đánh giá nhân sự định kỳ</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/quanlykpi.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/quanlykpi_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Quản lý KPI</h2>
                         <p>Quản lý đánh giá chỉ tiêu KPI</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/quantriokr.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/quantriokr_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Quản trị OKR</h2>
                         <p>Quản trị mục tiêu OKR</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/daotao.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/daotao_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Đào tạo</h2>
                         <p>Quản lý các khóa đào tạo nội bộ</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/dontu.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/dontu_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Đơn từ</h2>
                         <p>Số hóa đơn từ và quy trình duyệt</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/baohiem.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/baohiem_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Bảo hiểm</h2>
                         <p>Tiện ích và liên kết với BHXH</p>
                     </a>
                     <div class="foot_menu_row">
                         <a class="bookademo" href="">
                             Book a demo
                             <img src="<?= get_template_directory_uri() ?>/assets/images/Chevron_right.svg"
                                 alt="icon">
                             <img class="hover"
                                 src="<?= get_template_directory_uri() ?>/assets/images/Chevron_blue_right.svg"
                                 alt="icon">
                         </a>
                         <div class="line"></div>
                         <a class="truycap" href="#">
                             Truy cập 1HRM
                             <img src="<?= get_template_directory_uri() ?>/assets/images/Chevron_right.svg"
                                 alt="icon">
                             <img class="hover"
                                 src="<?= get_template_directory_uri() ?>/assets/images/Chevron_blue_right.svg"
                                 alt="icon">
                         </a>
                     </div>
                 </div>

                 <!--1crm mega menu-->
                 <div class='container_items items_1crm tab-pane' id="crm_panel" role="tabpanel"
                     aria-labelledby="crm_tab">
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/taichinh.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/taichinh_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Tài chính</h2>
                         <p>Quản lý và quy trình duyệt thu chi</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/marketing.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/marketing_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Marketing</h2>
                         <p>Quản lý, đo lường chiến dịch Marketing</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/banhang.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/banhang_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Bán hàng</h2>
                         <p>Quản lý và kiếm soát quy trình bán hàng</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/khachhang.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/khachhang_hover.svg' ?>"
                                 alt="icon">
                         </div>

                         <h2>Khách hàng</h2>
                         <p>Lưu trữ, chăm sóc, cơ hội khách hàng</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/khohang.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/khohang_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Kho hàng</h2>
                         <p>Quản lý xuất, nhập, và tồn kho</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/muahang.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/muahang_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Mua hàng</h2>
                         <p>Quản lý, giám sát quá trình mua hàng</p>
                     </a>
                     <a href="#" class="mega_menu_item">
                         <div class="imgbox">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/khuyenmai.svg' ?>"
                                 alt="icon">
                         </div>
                         <div class="imgbox_hover">
                             <img src="<?= get_template_directory_uri() . '/assets/images/headermenu/khuyenmai_hover.svg' ?>"
                                 alt="icon">
                         </div>
                         <h2>Khuyến mãi</h2>
                         <p>Quản lý các tiện ích và chương trình KM</p>
                     </a>
                     <div class="foot_menu_row">
                         <a class="bookademo" href="">
                             Book a demo
                             <img src="<?= get_template_directory_uri() ?>/assets/images/Chevron_right.svg"
                                 alt="icon">
                             <img class="hover"
                                 src="<?= get_template_directory_uri() ?>/assets/images/Chevron_blue_right.svg"
                                 alt="icon">
                         </a>
                         <div class="line"></div>
                         <a class="truycap" href="#">
                             Truy cập 1CRM
                             <img src="<?= get_template_directory_uri() ?>/assets/images/Chevron_right.svg"
                                 alt="icon">
                             <img class="hover"
                                 src="<?= get_template_directory_uri() ?>/assets/images/Chevron_blue_right.svg"
                                 alt="icon">
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
<div class="foot_menu">
</div>

*/ ?>
</div>

<ul class="nav">
    <li class="nav-item">
        <button class=" active" data-bs-toggle="pill" data-bs-target="#pills-home">Home</button>
    </li>
    <li class="nav-item">
        <button class="" data-bs-toggle="pill" data-bs-target="#pills-profile">Profile</button>
    </li>
    <li class="nav-item">
        <button class="" data-bs-toggle="pill" data-bs-target="#pills-contact">Contact</button>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home">Content hehe 1</div>
    <div class="tab-pane fade" id="pills-profile">Content hehe 2</div>
    <div class="tab-pane fade" id="pills-contact">Content hehe 3</div>
</div>