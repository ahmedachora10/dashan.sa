<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ setting('app_name_' . app()->getLocale()) }} {{ @$title }}</title>
    <meta name="description" content="{{ setting('app_description') }}">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset(setting('icon')) ?? asset('assets/img/favicon/favicon.ico') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <!-- CSS here -->

    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/all.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/front-assets/css/bootstrap.min.css') }}"> -->
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/front-assets/css/bootstrap/bootstrap.rtl.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/front-assets/css/bootstrap/bootstrap.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/YouTubePopUp.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/justifiedGallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/slick-theme.css') }}">



    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/dashan.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    <!-- @stack('component-styles')
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}?v={{ rand(2000, 9999999) }}">
    <link rel="stylesheet" href="{{ asset('build/assets/main.css') }}?v={{ rand(2000, 9999999) }}"> -->

    @if (app()->getLocale() == 'ar')
        <style>
            .tp-portfolio-details-wrap ul li:not(:last-of-type) {
                margin-right: 0px !important;
                margin-left: 80px;
            }

            .tp-faq-wrapper .accordion .accordion-item .accordion-header .accordion-button:not(.collapsed):after {
                left: 36px !important;
                right: auto !important;
            }

            .tp-faq-wrapper .accordion .accordion-item .accordion-header .accordion-button:after {
                left: 36px !important;
                right: auto !important;
            }

            .tp-about-thumb .top {
                left: auto !important;
                right: 85px !important;
            }

            .tp-about-shape {
                left: 0 !important;
                right: unset !important;
            }

            .tp-about-3-shape .shape-1 {
                right: 0 !important;
                left: unset !important;
            }

            .tp-about-shape img {
                transform: rotate(180deg);
            }

            .tp-about-thumb:before {
                right: 566px !important;
                left: unset !important;
            }

            .tp-about-thumb:after {
                right: 32% !important;
                left: unset !important;
            }

            .tp-about-icon-content:not(:last-of-type) {
                margin-right: unset !important;
                margin-left: 70px !important;
            }

            .tp-about-icon {
                margin-right: unset !important;
                margin-left: 25px !important;
            }

            .tp-about-btn .tp-btn {
                margin-right: unset !important;
                margin-left: 85px !important;
            }

            .tp-contact-7-bg {
                right: 0 !important;
                left: unset !important;
            }

            .tp-contact-7-shape {
                right: unset !important;
                left: 0 !important;
            }

            @media (min-width: 1599px) {
                .tp-faq-thumb-wrapper span {
                    left: 14% !important;
                    top: 6% !important;
                }
            }

            @media only screen and (min-width: 1400px) {

                .tp-contact-thumb .shape-main,
                .tp-contact-thumb .shape-1,
                .tp-contact-thumb .shape-2,
                .tp-contact-thumb .shape-3 {
                    right: unset !important;
                    left: 2% !important;
                }
            }

            @media only screen and (min-width: 992px) {
                .tp-contact-thumb .shape-main {
                    right: unset !important;
                    left: 0 !important;
                }
            }

            .tp-video-popup span {
                margin-right: unset !important;
                margin-left: 40px !important;
            }
        </style>
    @else
        <style>
            .tp-faq-shape {
                left: 0 !important;
                right: unset !important;
            }

            @media (min-width: 1599px) {
                .tp-contact-thumb .shape-main {
                    right: 0;
                }

            }
        </style>
    @endif

    <script>
        localStorage.setItem('tp_dir', "{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}");
    </script>
</head>

<body data-logo="{{ asset(setting('logo')) }}">

    <!-- ==================== Start Loading ==================== -->

    <div id="preloader">
        <div class="loading-text">Loading</div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->


    <!-- header area start -->
    @include('layouts.theme.header')
    <!-- header area end -->

    <main>
        {{ $slot }}
    </main>


    @include('layouts.theme.footer')


    <!-- jQuery -->
    <script src="{{ asset('assets/front-assets/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/front-assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <!-- JS Global Compulsory (Do not remove)-->
    <!-- plugins -->
    <script src="{{ asset('assets/front-assets/js/plugins.js') }}"></script>
    <!-- custom scripts -->
    <script src="{{ asset('assets/front-assets/js/scripts.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize Instagram Slider
            var instaSlider = new Swiper('.insta-slider-fullwidth .swiper-container', {
                slidesPerView: 'auto',
                spaceBetween: 0,
                speed: 800,
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    576: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    992: {
                        slidesPerView: 4,
                    },
                    1200: {
                        slidesPerView: 5,
                    },
                }
            });
        });

        // document.addEventListener("DOMContentLoaded", function() {
        //     const lazyImages = document.querySelectorAll("img.lazy");


        //     if ("IntersectionObserver" in window) {
        //         let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
        //             entries.forEach(function(entry) {
        //                 if (entry.isIntersecting) {
        //                     let lazyImage = entry.target;
        //                     lazyImage.src = lazyImage.dataset.srcset || lazyImage.dataset.src;
        //                     lazyImage.classList.remove("lazy");
        //                     lazyImageObserver.unobserve(lazyImage);
        //                 }
        //             });
        //         });

        //         lazyImages.forEach(function(lazyImage) {
        //             lazyImageObserver.observe(lazyImage);
        //         });
        //     } else {
        //         // Fallback for browsers without Intersection Observer
        //         let lazyLoad = function() {
        //             lazyImages.forEach(function(lazyImage) {
        //                 console.log('lazyImage.offsetTop', lazyImage.dataset.srcset);

        //                 if (lazyImage.offsetTop < window.innerHeight + window.pageYOffset) {
        //                     lazyImage.src = lazyImage.dataset.srcset || lazyImage.dataset.src;
        //                     lazyImage.classList.remove('lazy');
        //                 }
        //             });
        //             if (lazyImages.length == 0) {
        //                 document.removeEventListener("scroll",
        //                     lazyLoad);
        //                 window.removeEventListener("resize", lazyLoad);
        //                 window.removeEventListener("orientationchange",
        //                     lazyLoad);
        //             }
        //         };
        //         document.addEventListener("scroll", lazyLoad);
        //         window.addEventListener("resize", lazyLoad);
        //         window.addEventListener("orientationchange", lazyLoad);
        //     }
        // });
    </script>


    <script defer src="{{ asset('build/assets/app2.js')}}"></script>

</body>

</html>
