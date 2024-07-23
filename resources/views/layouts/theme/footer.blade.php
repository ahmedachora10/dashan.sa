<footer class="tp-footer-3-area tp-footer-fixed p-relative pt-200">
    <div class="tp-footer-bg"></div>
    <div class="tp-footer-box p-relative">
        <div class="tp-footer-shape">
            <img class="shape-1" src="assets/img/footer/footer-shape-1.png" alt="">
            <img class="shape-2" src="assets/img/footer/footer-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="tp-footer-main tp-footer-border">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="tp-footer-widget tp-footer-col-1 mb-50">
                            <div class="tp-footer-logo mb-40">
                                <a href="{{route('home')}}"> <img width="40" src="{{asset(setting('logo'))}}" alt=""></a>
                            </div>
                            <div class="tp-footer-widget-content">
                                <p>{{setting('app_description_'.app()->getLocale())}}</p>
                                <div class="tp-footer-widget-social mb-4">
                                    @foreach ([
                                        'facebook' => 'fab fa-facebook-f',
                                        'instagram' => 'fa-brands fa-instagram',
                                        'linkedin' => 'fa-brands fa-linkedin',
                                        'twitter' => 'fab fa-twitter',
                                        'snapchat' => 'fab fa-snapchat'
                                    ] as $media => $icon)
                                        @continue(empty(setting($media)))

                                        <a href="{{setting($media)}}" class="mx-0"><i class="{{$icon}}"></i></a>
                                    @endforeach
                                </div>
                                @if(!empty(setting('email')))
                                <div class="offcanvas__contact-content d-flex">
                                    <div class="offcanvas__contact-content-icon ms-2">
                                        <i class="fa-solid fa-envelope text-white"></i>
                                    </div>
                                    <div class="offcanvas__contact-content-content">
                                        <a href="mailto:{{setting('email')}}"> {{setting('email')}} </a>
                                    </div>
                                </div>
                                @endif
                                @if(!empty(setting('phone')))
                                <div class="offcanvas__contact-content d-flex mt-2">
                                    <div class="offcanvas__contact-content-icon ms-2">
                                        <i class="fa-solid fa-phone text-white"></i>
                                    </div>
                                    <div class="offcanvas__contact-content-content">
                                        <a href="tel:{{setting('phone')}}"> {{setting('phone')}} </a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="tp-footer-widget tp-footer-col-2 mb-50">
                            <h3 class="tp-footer-widget-title">Navigation</h3>
                            <div class="tp-footer-widget-content">
                                <ul>
                                    @include('layouts.theme.menu')
                                    <li><a href="{{route('jobs.request')}}">{{trans('front.jobs')}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="tp-footer-widget tp-footer-7-col-3 mb-50">
                            <h3 class="tp-footer-widget-title">Instagram</h3>
                            <div class="tp-footer-widget-content">
                                <div class="tp-footer-widget-gallery-all">
                                    <div class="tp-footer-widget-gallery-single-item">
                                        <a href="#" class="tp-footer-widget-gallery-item">
                                            <div class="tp-footer-widget-gallery-thumb">
                                                <img src="{{asset('theme/img/footer/footer-7-1.jpg')}}" alt="">
                                                <div class="tp-footer-widget-gallery-social">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tp-footer-widget-gallery-single-item">
                                        <a href="#" class="tp-footer-widget-gallery-item">
                                            <div class="tp-footer-widget-gallery-thumb">
                                                <img src="{{asset('theme/img/footer/footer-7-2.jpg')}}" alt="">
                                                <div class="tp-footer-widget-gallery-social">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tp-footer-widget-gallery-single-item">
                                        <a href="#" class="tp-footer-widget-gallery-item">
                                            <div class="tp-footer-widget-gallery-thumb">
                                                <img src="{{asset('theme/img/footer/footer-7-3.jpg')}}" alt="">
                                                <div class="tp-footer-widget-gallery-social">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tp-footer-widget-gallery-single-item">
                                        <a href="#" class="tp-footer-widget-gallery-item">
                                            <div class="tp-footer-widget-gallery-thumb">
                                                <img src="{{asset('theme/img/footer/footer-7-4.jpg')}}" alt="">
                                                <div class="tp-footer-widget-gallery-social">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tp-footer-widget-gallery-single-item">
                                        <a href="#" class="tp-footer-widget-gallery-item">
                                            <div class="tp-footer-widget-gallery-thumb">
                                                <img src="{{asset('theme/img/footer/footer-7-5.jpg')}}" alt="">
                                                <div class="tp-footer-widget-gallery-social">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tp-footer-widget-gallery-single-item">
                                        <a href="#" class="tp-footer-widget-gallery-item">
                                            <div class="tp-footer-widget-gallery-thumb">
                                                <img src="{{asset('theme/img/footer/footer-7-6.jpg')}}" alt="">
                                                <div class="tp-footer-widget-gallery-social">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="tp-footer-widget tp-footer-col-4 mb-50">
                            <div class="tp-footer-widget-content">
                                <div class="tp-footer-widget-contact">
                                    <h3 class="tp-footer-widget-title">Newsletter</h3>
                                    <p>Get latest updates and offers.</p>
                                    <div class="tp-footer-widget-content-input">
                                        {{-- <form action="index.html"> --}}
                                            <a href="{{asset(setting('profile_file_'.app()->getLocale()))}}" download="dashan-profile-{{date('Y-m-d')}}" class="tp-icon-style bg-gradient px-3 py-2 border">
                                                <span class="mx-2">
                                                    <i class="fas fa-file-download"></i>
                                                </span>
                                                <span>{{ucwords(trans('download profile'))}}</span>
                                            </a>
                                        {{-- </form> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-footer-copyright">
                <div class="row">
                    <div class="col-md-7 col-12">
                        <div class="tp-footer-copyright-inner">
                            <p>© {{date('Y')}} {!! setting('footer_'.app()->getLocale()) !!}</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="tp-footer-copyright-inner text-md-end">
                            <a href="#">Privacy Policy</a>
                            <div class="dvd">/</div>
                            <a href="#">Terms of Use</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
