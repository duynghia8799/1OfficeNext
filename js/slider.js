jQuery(document).ready(function ($) {
    function initCustomSlider() {
        const $slider = $('.custom-slider-container');
        if (!$slider.length) return;

        $slider.each(function () {
            const $container = $(this);
            const $wrapper = $container.find('.slider-wrapper');
            const $originalSlides = $container.find('.slide-item');
            const $pagination = $container.find('.slider-pagination');
            const $dots = $pagination.find('.dot');

            const totalSlides = $originalSlides.length;
            let currentIndex = 1; // Bắt đầu từ 1 vì có clone ở đầu
            let slideInterval;
            let isTransitioning = false;

            // ============================================
            // INFINITE LOOP: Clone slides
            // [clone-last, 1, 2, 3, clone-first]
            // ============================================
            const $firstClone = $originalSlides.first().clone().addClass('clone');
            const $lastClone = $originalSlides.last().clone().addClass('clone');

            $wrapper.append($firstClone);   // Thêm clone slide đầu vào cuối
            $wrapper.prepend($lastClone);   // Thêm clone slide cuối vào đầu

            // Cập nhật lại danh sách slides (bao gồm cả clone)
            const $allSlides = $container.find('.slide-item');
            const totalWithClones = $allSlides.length;

            // Set vị trí ban đầu (slide thật đầu tiên = index 1)
            setPosition(currentIndex, false);

            if ($dots.length > 0) {
                $dots.eq(0).addClass('active');
            }

            // ============================================
            // CORE FUNCTIONS
            // ============================================
            function setPosition(index, animate = true) {
                if (animate) {
                    $wrapper.css('transition', 'transform 0.5s ease-in-out');
                } else {
                    $wrapper.css('transition', 'none');
                }

                const translateValue = `calc(${-index * 100}% - ${index * 2}rem)`;
                $wrapper.css('transform', 'translateX(' + translateValue + ')');
            }

            function showSlide(index) {
                if (isTransitioning) return;
                isTransitioning = true;

                currentIndex = index;
                setPosition(currentIndex, true);

                // Cập nhật dots (tính theo index thật, không tính clone)
                let realIndex = currentIndex - 1; // Trừ 1 vì có clone ở đầu
                if (realIndex < 0) realIndex = totalSlides - 1;
                if (realIndex >= totalSlides) realIndex = 0;

                $dots.removeClass('active').eq(realIndex).addClass('active');
            }

            // Xử lý khi animation kết thúc - nhảy về slide thật nếu đang ở clone
            $wrapper.on('transitionend', function () {
                isTransitioning = false;

                // Nếu đang ở clone cuối (sau slide thật cuối cùng) -> nhảy về slide thật đầu tiên
                if (currentIndex >= totalWithClones - 1) {
                    currentIndex = 1;
                    setPosition(currentIndex, false);
                }
                // Nếu đang ở clone đầu (trước slide thật đầu tiên) -> nhảy về slide thật cuối cùng
                if (currentIndex <= 0) {
                    currentIndex = totalSlides;
                    setPosition(currentIndex, false);
                }
            });

            // ============================================
            // PAGINATION (Dots)
            // ============================================
            $pagination.on('click', '.dot', function () {
                const index = $(this).data('index');
                showSlide(index + 1); // +1 vì có clone ở đầu
                stopAutoSlide();
                startAutoSlide();
            });

            // ============================================
            // AUTO SLIDE
            // ============================================
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

            // ============================================
            // SWIPE / DRAG FUNCTIONALITY
            // ============================================
            let startX = 0;
            let startY = 0;
            let isDragging = false;
            let isHorizontal = null;
            const swipeThreshold = 50;

            // Touch events (mobile)
            $wrapper[0].addEventListener('touchstart', function (e) {
                startX = e.touches[0].clientX;
                startY = e.touches[0].clientY;
                isDragging = true;
                isHorizontal = null;
                stopAutoSlide();
            }, { passive: true });

            $wrapper[0].addEventListener('touchmove', function (e) {
                if (!isDragging) return;

                const diffX = Math.abs(e.touches[0].clientX - startX);
                const diffY = Math.abs(e.touches[0].clientY - startY);

                if (isHorizontal === null && (diffX > 10 || diffY > 10)) {
                    isHorizontal = diffX > diffY;
                }

                if (isHorizontal) {
                    e.preventDefault();
                }
            }, { passive: false });

            $wrapper[0].addEventListener('touchend', function (e) {
                if (!isDragging) return;
                if (isHorizontal) {
                    handleSwipe(e.changedTouches[0].clientX);
                } else {
                    isDragging = false;
                    startAutoSlide();
                }
            });

            // Mouse events (desktop)
            $wrapper[0].addEventListener('mousedown', function (e) {
                startX = e.clientX;
                isDragging = true;
                stopAutoSlide();
                $wrapper.css('cursor', 'grabbing');
            });

            $wrapper[0].addEventListener('mousemove', function (e) {
                if (!isDragging) return;
                e.preventDefault();
            });

            $wrapper[0].addEventListener('mouseup', function (e) {
                if (!isDragging) return;
                handleSwipe(e.clientX);
                $wrapper.css('cursor', 'grab');
            });

            $wrapper[0].addEventListener('mouseleave', function (e) {
                if (!isDragging) return;
                handleSwipe(e.clientX);
                $wrapper.css('cursor', 'grab');
            });

            function handleSwipe(endX) {
                isDragging = false;
                const diffX = startX - endX;

                if (Math.abs(diffX) > swipeThreshold) {
                    if (diffX > 0) {
                        showSlide(currentIndex + 1);
                    } else {
                        showSlide(currentIndex - 1);
                    }
                }
                startAutoSlide();
            }

            $wrapper.css('cursor', 'grab');
        });
    }
    initCustomSlider();
});
