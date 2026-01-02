(function($) {
    $(document).ready(function() {
        // Xử lý sự kiện click cho các box trong trang Social
        $('.social-expand-container .expand-item').on('click', function() {
            // Nếu item này chưa active -> kích hoạt nó
            if (!$(this).hasClass('active')) {
                // Xóa active hiện tại
                $(this).siblings().removeClass('active');
                // Thêm active cho cái mới
                $(this).addClass('active');
            }
        });
    });
})(jQuery);
