<footer class="tp-footer-3-area tp-footer-fixed p-relative pt-120">
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
                                <p>{{setting('app_description')}}</p>
                                <div class="tp-footer-widget-social">
                                    @foreach ([
                                        'facebook' => 'fab fa-facebook-f',
                                        'instagram' => 'fa-brands fa-instagram',
                                        'linkedin' => 'fa-brands fa-linkedin',
                                        'twitter' => 'fab fa-twitter'
                                    ] as $media => $icon)
                                        @continue(empty(setting($media)))

                                        <a href="{{setting($media)}}"><i class="{{$icon}}"></i></a>
                                    @endforeach
                                </div>
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
                                        <form action="index.html">
                                            <input type="email" placeholder="Your email">
                                            <button class="tp-icon-style">
                                                <span>
                                                    <svg class="qodef-svg--custom-arrow qodef-m-arrow"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.2" height="14.2"
                                                        viewBox="0 0 14.2 14.2">
                                                        <g>
                                                            <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                                            <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                                        </g>
                                                        <g>
                                                            <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                                            <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                        </form>
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
                            <p>© 2023 Ishpat is Proudly Powered by Themepure</p>
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
