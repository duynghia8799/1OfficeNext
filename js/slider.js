jQuery(document).ready(function ($) {
    function initCustomSlider() {
        const $slider = $('.custom-slider-container');
        if (!$slider.length) return;

        $slider.each(function () {
            const $container = $(this);
            const $wrapper = $container.find('.slider-wrapper');
            const $slides = $container.find('.slide-item');
            const $pagination = $container.find('.slider-pagination');

            const $dots = $pagination.find('.dot');
            let currentIndex = 0;
            const totalSlides = $slides.length;
            let slideInterval;

            if($dots.length > 0) {
                 $dots.eq(0).addClass('active');
            }

            function showSlide(index) {
                if (index < 0) index = totalSlides - 1;
                if (index >= totalSlides) index = 0;
                
                const translateValue = -index * 100;
                $wrapper.css('transform', 'translateX(' + translateValue + '%)');

                $dots.removeClass('active').eq(index).addClass('active');
                
                currentIndex = index;
            }

            $pagination.on('click', '.dot', function () {
                const index = $(this).data('index');
                showSlide(index);
                stopAutoSlide(); 
                startAutoSlide();
            });

            function startAutoSlide() {
                if (slideInterval) clearInterval(slideInterval);
                slideInterval = setInterval(function () {
                    showSlide(currentIndex + 1);
                }, 5000); 
            }

            function stopAutoSlide() {
                clearInterval(slideInterval);
            }
            startAutoSlide();
            $container.hover(stopAutoSlide, startAutoSlide);
        });
    }
    initCustomSlider();
});
