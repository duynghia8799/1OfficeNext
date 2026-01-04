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

        // Animation cho Social Hero
        function initSocialHeroAnimation() {
            const $parts = [
                $('.img-part-1'),
                $('.img-part-2'),
                $('.img-part-3')
            ];
            
            let step = 0; // 0: none, 1: part1, 2: part2, 3: part3

            setInterval(function() {
                step++;
                if (step > 3) step = 0;

                // Reset all
                $parts.forEach(function($el) {
                    $el.removeClass('active');
                });

                // Set active
                if (step > 0) {
                    $parts[step - 1].addClass('active');
                }
            }, 5000);
        }

        initSocialHeroAnimation();
    });
})(jQuery);
