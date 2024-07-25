<!-- company area start -->
<section class="tp-company-5-area p-relative pt-120 pb-120">
    <div class="tp-company-5-shape">
        <img src="{{asset('theme/img/company/home-5/land-light.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="tp-company-5-thumb-box p-relative wow fadeInLeft" data-wow-duration="1s"
                    data-wow-delay=".3s">
                    <div class="tp-company-5-thumb p-relative pl-140">
                        <img class="shape-2" src="{{$about?->media?->first()?->getUrl()}}"  style="width:318px !important; height:470px !important">
                        <div class="tp-hover-distort-wrapper">
                            <div class="canvas"></div>
                            <div class="tp-hover-distort" data-displacementImage="{{$about?->media?->first()?->getUrl()}}">
                                <img class="tp-hover-distort-img" style="width:318px !important; height:470px !important" front" src="{{$about?->media?->first()?->getUrl()}}"
                                    alt="">
                                <img class="tp-hover-distort-img" style="width:318px !important; height:470px !important" back" src="{{$about?->media?->first()?->getUrl()}}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tp-company-5-thumb-sm shape-1">
                        <div class="tp-hover-distort-wrapper">
                            <div class="canvas"></div>
                            <div class="tp-hover-distort" data-displacementImage="{{$about?->media?->last()?->getUrl()}}">
                                <img class="tp-hover-distort-img" style="width:318px !important; height:470px !important" front" src="{{$about?->media?->last()?->getUrl()}}"
                                    alt="">
                                <img class="tp-hover-distort-img" style="width:318px !important; height:470px !important" back" src="{{$about?->media?->last()?->getUrl()}}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="tp-company-5-wrapper pl-40 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    {{-- <div class="tp-company-title mb-50">
                        <span class="tp-section-title-pre-2">WE ARE CONSTRUCTION COMPANY</span>
                        <h3 class="tp-section-title">Providing quality desing
                            and best solution</h3> --}}
                            <x-theme.headline key="about" />
                        <p>{{$about?->description}}</p>
                    </div>
                    {{-- <div class="tp-company-progress">
                        <div class="tp-company-progress-item">
                            <h5 class="tp-company-progress-title p-relative">Interior <span class="wow slideInLeft"
                                    data-wow-duration=".8s" data-wow-delay=".3s">80%</span></h5>
                            <div class="progress progress-5">
                                <div class="progress-bar wow slideInLeft" data-wow-duration=".8s" data-wow-delay=".3s"
                                    role="progressbar" data-width="80%" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="tp-company-progress-item">
                            <h5 class="tp-company-progress-title p-relative">Landscap <span
                                    class="pursent-2 wow slideInLeft" data-wow-duration=".8s"
                                    data-wow-delay=".3s">70%</span></h5>
                            <div class="progress progress-5">
                                <div class="progress-bar wow slideInLeft" data-wow-duration=".8s" data-wow-delay=".3s"
                                    role="progressbar" data-width="70%" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="tp-company-progress-item">
                            <h5 class="tp-company-progress-title p-relative">Decoration <span
                                    class="pursent-3 wow slideInLeft" data-wow-duration=".8s"
                                    data-wow-delay=".3s">90%</span></h5>
                            <div class="progress progress-5">
                                <div class="progress-bar wow slideInLeft" data-wow-duration=".8s" data-wow-delay=".3s"
                                    role="progressbar" data-width="90%" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="tp-company-btn">
                        <a class="tp-btn tp-icon-style" href="{{route('contact')}}">Discover More <span><svg
                                    class="qodef-svg--custom-arrow qodef-m-arrow" xmlns="http://www.w3.org/2000/svg"
                                    width="14.2" height="14.2" viewBox="0 0 14.2 14.2">
                                    <g>
                                        <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                        <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                    </g>
                                    <g>
                                        <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                        <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                    </g>
                                </svg></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- company area end -->
