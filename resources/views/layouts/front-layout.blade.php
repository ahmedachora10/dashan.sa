<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
    class="rtl">

<head>
    <meta charset="utf-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />

    <title>{{ setting('app_name') }} {{ @$title }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="{{ asset(setting('icon')) ?? asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://unpkg.com/bs-brain@2.0.3/components/services/service-7/assets/css/service-7.css">
    <link rel="stylesheet" href="{{ asset('assets/scenic/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scenic/css/custom-bs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/front/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scenic/css/jquery.fancybox.min.css') }}">

    @stack('component-styles')

    <link rel="stylesheet" href="{{ asset('assets/scenic/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/scenic/css/rtl.css') }}">

    @stack('styles')

    @livewireStyles
</head>

<body data-new-gr-c-s-check-loaded="14.1148.0" data-gr-ext-installed="">
    <div id="overlayer" style="display: none;"></div>
    <div class="loader" style="display: none;">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="lni lni-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body">
                <ul class="site-nav-wrap">
                    {{-- @include('layouts.front.menu') --}}
                </ul>
            </div>
        </div>

        <!-- Navbar: Start -->
        @include('layouts.front.header')
        <!-- Navbar: End -->

        {{ $slot }}

        <footer class="site-footer slanted-footer">
            <a href="#top" class="smoothscroll scroll-top">
                <span class="lni lni-chevron-up"></span>
            </a>
            <div class="container">
                <div class="row mb-5">
                    <div class="col-6 mb-4 mb-md-0">
                        <h3>الصفحات</h3>
                        <ul class="list-unstyled row" style="padding-right: 5px !important" dir="ltr">
                            @include('layouts.front.menu', ['footer' => true])
                            <li class="col-6">
                                <a href="{{ route('jobs.request') }}" class="nav-link ">{{ trans('front.jobs') }}</a>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Company</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Resources</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Support</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div> --}}
                    <div class="col-6 mb-4 mb-md-0">
                        <h3>{{ setting('app_name') }}</h3>
                        <p class="text-white mb-4">{{ setting('app_description') }}</p>
                        <div class="footer-social">
                            @if ($media = setting('facebook'))
                                <a href="{{ $media }}" target="_blank">
                                    <span class="lni lni-facebook-oval"></span>
                                </a>
                            @endif

                            @if ($media = setting('twitter'))
                                <a href="{{ $media }}" target="_blank">
                                    <span class="lni lni-twitter"></span>
                                </a>
                            @endif

                            @if ($media = setting('instagram'))
                                <a href="{{ $media }}" target="_blank">
                                    <span class="lni lni-instagram"></span>
                                </a>
                            @endif

                            @if ($media = setting('linkedin'))
                                <a href="{{ $media }}" target="_blank">
                                    <span class="lni lni-linkedin-original"></span>
                                </a>
                            @endif

                            @if ($media = setting('tiktok'))
                                <a href="{{ $media }}" target="_blank">
                                    <span class="lni lni-tiktok"></span>
                                </a>
                            @endif

                            @if ($media = setting('whatsapp'))
                                <a href="{{ $media }}" target="_blank">
                                    <span class="lni lni-whatsapp"></span>
                                </a>
                            @endif

                            @if ($media = setting('telegram'))
                                <a href="{{ $media }}" target="_blank">
                                    <span class="lni lni-telegram"></span>
                                </a>
                            @endif
                            {{-- <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-instagram"></span></a>
                            <a href="#"><span class="icon-linkedin"></span></a> --}}
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12">
                        <p class="copyright text-white mb-0"><span class="block">
                                مصمم بـ ♥ بواسطة <a href="https://www.sadnah.sa"
                                    style="color: var(--secondary-color); font-weight: 600" target="_blank">شركة
                                    سدنة</a>، جميع
                                الحقوق محفوظة لشركة
                                برق العالمية القابضة {{ date('Y') }}
                            </span></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script src="{{ asset('assets/scenic/js/jquery.min.js') }}"></script>
    <script defer src="{{ asset('assets/scenic/js/bootstrap.bundle.min.js') }}"></script>
    <script defer src="{{ asset('assets/scenic/js/isotope.pkgd.min.js') }}"></script>
    <script defer src="{{ asset('assets/scenic/js/stickyfill.min.js') }}"></script>
    <script defer src="{{ asset('assets/scenic/js/jquery.fancybox.min.js') }}"></script>
    <script defer src="{{ asset('assets/scenic/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/swiper.js') }}"></script>
    <script defer src="{{ asset('assets/scenic/js/jquery.waypoints.min.js') }}"></script>
    <script defer src="{{ asset('assets/scenic/js/jquery.animateNumber.min.js') }}"></script>
    <script defer src="{{ asset('assets/scenic/js/custom.js') }}"></script>

    @stack('scripts')
    @livewireScripts
</body>

</html>
