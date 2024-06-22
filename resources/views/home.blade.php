<x-front-layout>
    <x-theme.sections.hero-section :sliders="$sliders" />
    <x-theme.sections.our-blog />

    {{-- <section class="site-section about-us-section" id="about-us-section">
        <div class="container">
            @if (setting('about_title'))
                <div class="row mb-5 pt-0 site-section">
                    <div class="col-md-6 align-self-center">
                        <h3 class="section-title-sub text-primary fs-5">عنا</h3>

                        <h2 class="section-title mb-4">{{ setting('about_title') }}</h2>
                        <div>{!! setting('about_content') !!}</div>
                    </div>

                    <div class="col-md-5 ml-auto img-overlap">
                        <div class="img-1"><img src="{{ asset(setting('about_img')) }}" alt="Image"
                                class="img-fluid img-shadow">
                        </div>
                    </div>
                </div>
            @endif

            @if (count($statistics))
                <div class="row pb-0 border-top pt-5 block__19738 section-counter"
                    style="flex-direction: row !important;">
                    @foreach ($statistics as $item)
                        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <img src="{{ asset($item->thumbnail) }}" class="d-block" alt="thumbnail" width="50"
                                    height="50">
                                <strong class="number mr-3"
                                    data-number="{{ $item->statistic }}">{{ $item->statistic }}</strong>
                            </div>
                            <span class="caption">{{ $item->title }}</span>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section> --}}

    {{-- <section class="site-section services-section bg-light block__62849" id="services-section">
        <div class="container">
            <x-title key="our services" />

            <x-services-section pagination="6" />

            <div class="row" style="margin-top: 3rem">
                <div class="col-12 text-center">
                    <a href="{{ route('services.all') }}" class="btn btn-primary btn-md">عرض جميع الخدمات</a>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="site-section block__62272" id="works-section">
        <div class="container">
            <x-title key="our work" />

            <x-work-section pagination="6" />
            <div class="row" style="margin-top: 3rem">
                <div class="col-12 text-center">
                    <a href="{{ route('works') }}" class="btn btn-primary btn-md">عرض كل الانجازات</a>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- @if (count($clients) > 0)
        <section id="our-clients" class="section-py landing-reviews site-section">
            <div class="container">
                <x-title key="our clients" />

                <div class="swiper-logo-carousel py-4 my-lg-2">
                    <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden"
                        id="swiper-clients-logos" dir="rtl">
                        <div class="swiper-wrapper" style="height: auto;">
                            @foreach ($clients as $item)
                                <div class="swiper-slide swiper-slide-active" role="group">
                                    <div class="text-center">
                                        <a href="{{ $item->link }}" target="_blank">
                                            <img src="{{ asset($item->thumbnail) }}" alt="client logo"
                                                class="client-logo d-block mx-auto" style="height: 3.5rem !important">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </section>
    @endif --}}

    {{-- <section class="site-section" id="next-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <a data-fancybox="" data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
                        <span class="play-icon"><span class="icon-play"></span></span>
                        <img src="images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow">
                    </a>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h3 class="section-title-sub text-primary">Watch the video</h3>
                    <h2 class="section-title mb-3">We Are Web Agency</h2>
                    <p class="lead">Eveniet voluptatibus voluptates suscipit minima, cum voluptatum ut dolor, sed
                        facere corporis qui, ea quisquam quis odit minus nulla vitae. Sit, voluptatem.</p>
                    <p>Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate deserunt
                        eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores
                        quisquam optio nostrum sit!</p>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="site-section block__45439">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h3 class="section-title-sub text-primary">Read the latest post</h3>
                    <h2 class="section-title mb-3">Blog Posts</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="block__86547 d-block d-xl-flex align-items-stretch">
                        <figure class="img" style="background-image: url('images/sq_img_1.jpg')">
                        </figure>
                        <div class="h-100">
                            <h3 class="mb-4"><a href="#">Undefined: The Third Boolean Values</a></h3>
                            <div class="block__27192 d-flex pt-1 border-top">
                                <a href="#"><span class="icon-person"></span> Jacob Smith</a>
                                <a href="#"><span class="icon-calendar-o"></span> 7 Apr 2019</a>
                                <a href="#"><span class="icon-chat"></span> 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="block__86547 d-block d-xl-flex align-items-stretch">
                        <figure class="img" style="background-image: url('images/sq_img_2.jpg')">
                        </figure>
                        <div class="h-100">
                            <h3 class="mb-4"><a href="#">Where Do You Learn HTML &amp; CSS in 2020?</a>
                            </h3>
                            <div class="block__27192 d-flex pt-1 border-top">
                                <a href="#"><span class="icon-person"></span> Jacob Smith</a>
                                <a href="#"><span class="icon-calendar-o"></span> 7 Apr 2019</a>
                                <a href="#"><span class="icon-chat"></span> 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="block__86547 d-block d-xl-flex align-items-stretch">
                        <figure class="img" style="background-image: url('images/sq_img_4.jpg')">
                        </figure>
                        <div class="h-100">
                            <h3 class="mb-4"><a href="#">Where Do You Learn HTML &amp; CSS in 2020?</a>
                            </h3>
                            <div class="block__27192 d-flex pt-1 border-top">
                                <a href="#"><span class="icon-person"></span> Jacob Smith</a>
                                <a href="#"><span class="icon-calendar-o"></span> 7 Apr 2019</a>
                                <a href="#"><span class="icon-chat"></span> 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="block__86547 d-block d-xl-flex align-items-stretch">
                        <figure class="img" style="background-image: url('images/sq_img_5.jpg')">
                        </figure>
                        <div class="h-100">
                            <h3 class="mb-4"><a href="#">Undefined: The Third Boolean Value</a></h3>
                            <div class="block__27192 d-flex pt-1 border-top">
                                <a href="#"><span class="icon-person"></span> Jacob Smith</a>
                                <a href="#"><span class="icon-calendar-o"></span> 7 Apr 2019</a>
                                <a href="#"><span class="icon-chat"></span> 2</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- @push('scripts')
        <script defer>
            var heroSwiper = new Swiper('#slider', {
                // Optional parameters
                // direction: 'vertical',
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: true,
                },

            });

            var clientLogosSwiper = new Swiper('#swiper-clients-logos', {
                // Optional parameters
                // direction: 'vertical',
                loop: true,
                slidesPerView: 3,
                spaceBetween: 15,

                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },

                breakpoints: {
                    0: {
                        slidesPerView: 2,
                    },
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },

            });
        </script>
    @enpush('scripts')
        <script defer>
            var heroSwiper = new Swiper('#slider', {
                // Optional parameters
                // direction: 'vertical',
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: true,
                },

            });

            var clientLogosSwiper = new Swiper('#swiper-clients-logos', {
                // Optional parameters
                // direction: 'vertical',
                loop: true,
                slidesPerView: 3,
                spaceBetween: 15,

                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },

                breakpoints: {
                    0: {
                        slidesPerView: 2,
                    },
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },

            });
        </script>
    @endpush --}}
</x-front-layout>
