jQuery(document).ready(function($) {
    function playAnimation() {
        $('.sign-hero').removeClass('start-anim');
        void $('.sign-hero')[0].offsetWidth;
        $('.sign-hero').addClass('start-anim');
    }
    setTimeout(playAnimation, 100);
    $('.sign-hero').on('click', function() {
        playAnimation();
    });

    function initTimeline() {
        var $processSteps = $('.work-quytrinh .process-steps');
        var $line = $('.work-quytrinh .line');
        var $lineActive = $('.work-quytrinh .line-active');
        var $dots = $('.work-quytrinh .step-item .dot');
        var $items = $('.work-quytrinh .step-item');

        if (!$processSteps.length || !$line.length || !$dots.length) return;

        function getDotPositions() {
            var positions = [];
            var containerLeft = $processSteps.offset().left;
            $dots.each(function() {
                var $dot = $(this);
                var center = ($dot.offset().left + $dot.outerWidth() / 2) - containerLeft;
                positions.push(center);
            });
            return positions;
        }

        function setInitialPositions() {
            var positions = getDotPositions();
            var startX = positions[0];
            var endX = positions[positions.length - 1];
            var totalWidth = endX - startX;

            $line.css({
                'left': startX + 'px',
                'width': totalWidth + 'px'
            });

            $lineActive.css({
                'left': startX + 'px',
                'width': '0px'
            });

            return positions;
        }

        var dotCenters = setInitialPositions();

        const wait = (ms) => new Promise(resolve => setTimeout(resolve, ms));

        async function runAnimationLoop() {
            $items.removeClass('active');
            $lineActive.css({ 'width': '0', 'transition': 'none' }); 
            
            dotCenters = setInitialPositions(); 

            await wait(3000);

            $items.eq(0).addClass('active');
            await wait(1000);

            for (let i = 0; i < dotCenters.length - 1; i++) {
                let currentPos = dotCenters[i] - dotCenters[0];
                let nextPos = dotCenters[i+1] - dotCenters[0];
                
                $lineActive.css({
                    'transition': 'width 3s linear',
                    'width': nextPos + 'px'
                });

                await wait(3000); 

                $items.eq(i+1).addClass('active');

                if (i < dotCenters.length - 2) {
                    await wait(1000);
                }
                if (i < dotCenters.length - 2) {
                    await wait(1000);
                }
            }

            await wait(5000);

            $lineActive.css({ 'transition': 'none', 'width': '0' });
            $items.removeClass('active');
            runAnimationLoop();
        }

        runAnimationLoop();

        $(window).on('resize', function() {
           dotCenters = setInitialPositions();
        });
    }


    // FAQ Toggle
    $('.sign-faq .faq-item .header').on('click', function() {
        var $item = $(this).closest('.faq-item');
        var $body = $item.find('.body');
        
        $item.toggleClass('active');
        $body.slideToggle(300);
    });

    initTimeline();
});
