<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Anita Silvi Ferdina - Personal Portfolio & Resume</title>
    <meta name="description" content="Show yourself brightly">
    <meta name="keywords"
        content="mix_design, resume, portfolio, personal page, cv, template, one page, responsive, html5, css3, creative, clean">
    <meta name="author" content="mix_design">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('assets/img/favicon/icon.svg') }}" type="{{ asset('assets/image/svg+xml') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/manifest.webmanifest') }}">

    <meta property="og:image:height" content="1200">
    <meta property="og:image:width" content="1200">
    <meta property="og:title" content="Personal Portfolio & Resume">
    <meta property="og:description" content="Show yourself brightly">

    <link rel="stylesheet" href="{{ asset('assets/css/loaders/loader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#dcdce7">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#111111">
    <meta name="msapplication-navbutton-color" content="#111111">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>

<body>
    {{-- <div id="loader" class="loader">
        <div id="loaderContent" class="loader__content">
            <div class="loader__shadow"></div>
            <div class="loader__box"></div>
        </div>
    </div> --}}

    @include('frontend.partials.header')

    <div class="gradient-background">
        <div class="blur"></div>
        <div class="blur"></div>
        <div class="blur"></div>
    </div>

    @yield('content')

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close link-s" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share link-s" title="Share"></button>
                    <button class="pswp__button pswp__button--fs link-s" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom link-s" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left link-s" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right link-s" title="Next (arrow right)"></button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

    @stack('scripts')
    <script src="{{ asset('assets/js/libs.min.js') }}"></script>
    <script>
        const randomX = random(-400, 400);
        const randomY = random(-200, 200);
        const randomDelay = random(0, 50);
        const randomTime = random(20, 40);
        const randomTime2 = random(5, 12);
        const randomAngle = random(-30, 150);

        const blurs = gsap.utils.toArray(".blur");
        blurs.forEach((blur) => {
            gsap.set(blur, {
                x: randomX(-1),
                y: randomX(1),
                rotation: randomAngle(-1)
            });

            moveX(blur, 1);
            moveY(blur, -1);
            rotate(blur, 1);
        });

        function rotate(target, direction) {
            gsap.to(target, randomTime2(), {
                rotation: randomAngle(direction),
                ease: Sine.easeInOut,
                onComplete: rotate,
                onCompleteParams: [target, direction * -1]
            });
        }

        function moveX(target, direction) {
            gsap.to(target, randomTime(), {
                x: randomX(direction),
                ease: Sine.easeInOut,
                onComplete: moveX,
                onCompleteParams: [target, direction * -1]
            });
        }

        function moveY(target, direction) {
            gsap.to(target, randomTime(), {
                y: randomY(direction),
                ease: Sine.easeInOut,
                onComplete: moveY,
                onCompleteParams: [target, direction * -1]
            });
        }

        function random(min, max) {
            const delta = max - min;
            return (direction = 1) => (min + delta * Math.random()) * direction;
        }
    </script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/gallery-init.js') }}"></script>
</body>

</html>
