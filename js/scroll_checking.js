
(function ($) {
    $(document).ready(function () {
        function scrollCheckingTudonghoa() {
            const observerOptions = {
                root: null,
                rootMargin: '-50% 0px -50% 0px',
                threshold: 0
            };

            const observerTitle = new IntersectionObserver(function (entries, observer) {
                if (entries.isIntersecting) {
                    $('.work-tudonghoa .content-container').removeClass('active');
                    $('.work-tudonghoa .content-container').first().addClass('active');
                    $('.work-tudonghoa .right img').removeClass('active');
                    $('.work-tudonghoa .right .img-1').addClass('active');
                }
            }, observerOptions);

            const observerContent = new IntersectionObserver(function (entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const $target = $(entry.target);
                        $('.work-tudonghoa .content-container').removeClass('active');
                        $target.addClass('active');
                        const imgId = $target.data('img');
                        $('.work-tudonghoa .right img').removeClass('active');
                        if (imgId) {
                            $('.work-tudonghoa .right .img-' + imgId).addClass('active');
                        }
                    }
                });
            }, observerOptions);

            observerTitle.observe($('.work-tudonghoa .title-section')[0]);
            $('.work-tudonghoa .content-container').each(function () {
                observerContent.observe(this);
            });
        }
        scrollCheckingTudonghoa();
    });
})(jQuery);