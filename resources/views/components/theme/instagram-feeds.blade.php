<!-- ==================== Start Instagram Section ==================== -->
@push('styles')
<style>
    .instagram-feed {
        overflow: hidden;
        padding-bottom: 0;
        /* Remove bottom padding */
    }

    .instagram-feed .section-head {
        margin-bottom: 40px;
    }

    .instagram-feed .section-head h6 {
        font-size: 12px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0px;
        color: #b19777;
        margin-bottom: 10px;
    }

    .instagram-feed .section-head h2 {
        font-size: 40px;
        font-weight: 600;
    }

    .instagram-feed .section-head h2 .color-font {
        color: #b19777;
    }

    /* Full-width Slider Styles */
    .insta-slider-fullwidth {
        margin: 0;
        padding: 0;
        width: 100%;
    }

    .insta-slider-fullwidth .swiper-container {
        width: 100%;
        overflow: visible;
    }

    .insta-slider-fullwidth .swiper-slide {
        width: auto;
        height: auto;
    }

    .insta-item {
        position: relative;
        overflow: hidden;
    }

    .insta-item img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        display: block;
    }

    /* Remove any default Swiper padding */
    .swiper-wrapper {
        padding: 0;
    }

    .swiper-slide {
        margin: 0;
    }
</style>
@endpush
<!-- ==================== Start Instagram Section ==================== -->
<section class="instagram-feed section-padding">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown custom-sub-title" data-wow-delay=".3s">
                        {{ headLine('home-instagram-section')->title }}</h6>
                    <h2 class="playfont wow flipInX custom-sub-title" data-wow-delay=".5s">Instagram<span
                            class="color-font">#</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Full-width Slider with no container constraints -->
    <div class="insta-slider-fullwidth">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Instagram Image 1 -->
                @foreach ($feeds as $item)
                    <div class="swiper-slide">
                        <div class="insta-item">
                            <a href="{{ $item['permalink'] }}" target="_blank">
                                <img src="{{ $item['image'] }}" alt="Instagram Post">
                            </a>
                        </div>
                    </div>
                @endforeach

                <!-- Instagram Image 2 -->
                {{-- <div class="swiper-slide">
                    <div class="insta-item">
                        <a href="{{ setting('instagram') }}" target="_blank">
                            <img src="{{ asset('assets/front-assets/img/01.jpg') }}" alt="Instagram Post">
                        </a>
                    </div>
                </div>

                <!-- Instagram Image 3 -->
                <div class="swiper-slide">
                    <div class="insta-item">
                        <a href="{{ setting('instagram') }}" target="_blank">
                            <img src="{{ asset('assets/front-assets/img/01.jpg') }}" alt="Instagram Post">
                        </a>
                    </div>
                </div>

                <!-- Instagram Image 4 -->
                <div class="swiper-slide">
                    <div class="insta-item">
                        <a href="{{ setting('instagram') }}" target="_blank">
                            <img src="{{ asset('assets/front-assets/img/01.jpg') }}" alt="Instagram Post">
                        </a>
                    </div>
                </div>

                <!-- Instagram Image 4 -->
                <div class="swiper-slide">
                    <div class="insta-item">
                        <a href="{{ setting('instagram') }}" target="_blank">
                            <img src="{{ asset('assets/front-assets/img/01.jpg') }}" alt="Instagram Post">
                        </a>
                    </div>
                </div>
                <!-- Instagram Image 4 -->
                <div class="swiper-slide">
                    <div class="insta-item">
                        <a href="{{ setting('instagram') }}" target="_blank">
                            <img src="{{ asset('assets/front-assets/img/01.jpg') }}" alt="Instagram Post">
                        </a>
                    </div>
                </div>
                <!-- Instagram Image 4 -->
                <div class="swiper-slide">
                    <div class="insta-item">
                        <a href="{{ setting('instagram') }}" target="_blank">
                            <img src="{{ asset('assets/front-assets/img/01.jpg') }}" alt="Instagram Post">
                        </a>
                    </div>
                </div>
                <!-- Instagram Image 4 -->
                <div class="swiper-slide">
                    <div class="insta-item">
                        <a href="{{ setting('instagram') }}" target="_blank">
                            <img src="{{ asset('assets/front-assets/img/01.jpg') }}" alt="Instagram Post">
                        </a>
                    </div>
                </div> --}}
                <!-- Add more slides as needed -->
            </div>
        </div>
    </div>
</section>
<!-- ==================== End Instagram Section ==================== -->
