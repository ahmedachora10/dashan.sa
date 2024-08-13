<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ setting('app_name_'.app()->getLocale()) }} {{ @$title }}</title>
    <meta name="description" content="{{setting('app_description')}}">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(setting('icon')) ?? asset('assets/img/favicon/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/swiper-gl.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/font-awesome-pro.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/flaticon_ishpat.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/spacing.css')}}">

    @stack('component-styles')
    <link rel="stylesheet" href="{{asset('build/assets/main.css')}}?v={{rand(2000,9999999)}}">

    @if (app()->getLocale() == 'ar')
        <style>
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

            .tp-about-thumb .top:hover {
                transition: .3s;
                z-index: 5;
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

            .tp-about-thumb:before{
                right: 566px !important;
                left: unset !important;
            }

            .tp-about-thumb:after {
                right: 32% !important;
                left: unset !important;
            }

            .tp-about-icon-content:not(:last-of-type){
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
                .tp-contact-thumb .shape-main, .tp-contact-thumb .shape-1, .tp-contact-thumb .shape-2, .tp-contact-thumb .shape-3 {
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
    </style>
    @endif

    <style>
        .tp-video-play {
            width: fit-content !important;
        }

        .tp-contact-7-bg {
            background-size: cover;
            background-position: center center;
         }

        @media (min-width: 768px) {
            .tp-contact-7-project {
                top: 318px;
            }
        }
    </style>

    @stack('styles')

    @livewireStyles
</head>

<body>

    <!-- mouse cursor drag start -->
        {{-- <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"><span><img src="assets/img/icon/mouse-cursor.svg" alt=""></span></div> --}}
    <!-- mouse cursor drag end -->

    <!-- pre loader area start -->
    <x-theme.loading />
    <!-- pre loader area end -->

    <!-- back to top start -->
    <x-theme.back-to-top-button />
    <!-- back to top end -->

    <!-- search area start -->
    {{-- <x-theme.search-area /> --}}
    <!-- search area end -->

    <!-- cart mini area start -->
    {{-- <x-theme.cart-area /> --}}
    <!-- cart mini area end -->

    <!-- offcanvas area start -->
    <x-theme.off-canvas-area />
    <!-- offcanvas area end -->

    <div class="tp-page-wrapper" style="margin-bottom: {{app()->getLocale() == 'en' ? '820px' : '700px'}} !important">

        <!-- header area start -->
        @include('layouts.theme.header')
        <!-- header area end -->

        <main>
            {{$slot}}
        </main>
    </div>

    @include('layouts.theme.footer')

    <!-- JS here -->
    <script src="{{ asset('theme/js/vendor/jquery.js') }}"></script>
    <script defer src="{{ asset('theme/js/bootstrap-bundle.js') }}"></script>
    <script defer src='{{ asset('theme/js/three.js') }}'></script>
    <script defer src="{{ asset('theme/js/gsap.js') }}"></script>
    <script defer src="{{ asset('theme/js/webgl.js') }}"></script>
    <script defer src="{{ asset('theme/js/hover-effect.umd.js') }}"></script>
    <script defer src="{{ asset('theme/js/swiper-bundle.js') }}"></script>
    <script defer src="{{ asset('theme/js/magnific-popup.js') }}"></script>
    <script defer src="{{ asset('theme/js/tilt.jquery.min.js') }}"></script>
    <script defer src="{{ asset('theme/js/purecounter.js') }}"></script>
    <script defer src="{{ asset('theme/js/imagesloaded-pkgd.js') }}"></script>
    <script defer src="{{ asset('theme/js/isotope-pkgd.js') }}"></script>
    <script defer src="{{ asset('theme/js/nice-select.js') }}"></script>
    <script defer src="{{ asset('theme/js/countdown.js') }}"></script>
    <script defer src="{{ asset('theme/js/wow.js') }}"></script>
    <script defer src="{{ asset('theme/js/ajax-form.js') }}"></script>

    @stack('component-scripts')

    <script defer src="{{ asset('theme/js/main.js') }}?v={{rand(2000,9999999)}}"></script>

    @stack('scripts')
    @livewireScripts
</body>

</html>
