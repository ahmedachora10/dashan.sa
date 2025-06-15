@props(['whyUsIcons' => [] ])
<!-- ==================== Start Works ==================== -->

    <section class="work-carousel metro section-padding dark">
        <div class="container-fluid">
            <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <h6 class="custom-font wow fadeInDown custom-sub-title" data-wow-delay=".3s">{{ strtoupper(headLine('home-our-works-section')->title)}}</h6>
                            <h4 class="playfont wow flipInX custom-sub-title" data-wow-delay=".5s">{{headLine('home-our-works-section')->subTitle}}</h4>
                        </div>
                    </div>
                </div>
            </div>

            @if(count($works) <= 1)
                <!-- Static layout for single work -->
                <div class="row">
                    <div class="col-lg-12 no-padding">
                        <div class="container">
                            <div class="row justify-content-center">
                                @foreach ($works as $work)
                                    <div class="col-lg-8 col-md-10">
                                        <div class="content wow fadeInUp" data-wow-delay=".3s">
                                            <a href="{{route('works.show', $work->id)}}" style="display: block;">
                                                <div class="item-img bg-img wow imago" data-background="{{asset(convertImagePath($work->thumbnail))}}">
                                                </div>
                                            </a>
                                            <div class="cont">
                                                <h6><a class="custom-sub-title" style="text-decoration: none;" href="{{route('works.show', $work->id)}}">{{$work->tag->name}}</a></h6>
                                                <h4><a class="custom-sub-title" style="text-decoration: none;" href="{{route('works.show', $work->id)}}">{{ $work->client_name }}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- Swiper slider for multiple works -->
                <div class="row">
                    <div class="col-lg-12 no-padding">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($works as $work)
                                    <div class="swiper-slide">
                                        <div class="content wow fadeInUp" data-wow-delay=".3s">
                                            <a href="{{route('works.show', $work->id)}}" style="display: block;">
                                                <div class="item-img bg-img wow imago" data-background="{{asset(convertImagePath($work->thumbnail))}}">
                                                </div>
                                            </a>
                                            <div class="cont">
                                                <h6><a class="custom-sub-title" style="text-decoration: none;" href="{{route('works.show', $work->id)}}">{{$work->tag->name}}</a></h6>
                                                <h4><a class="custom-sub-title" style="text-decoration: none;" href="{{route('works.show', $work->id)}}">{{ $work->client_name }}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- slider setting -->
                            @if(app()->getLocale() == 'ar')
                                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                                    <i class="ion-ios-arrow-right"></i>
                                </div>
                                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                                    <i class="ion-ios-arrow-left"></i>
                                </div>
                            @else
                                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                                    <i class="ion-ios-arrow-right"></i>
                                </div>
                                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                                    <i class="ion-ios-arrow-left"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- ==================== End Works ==================== -->
    <!-- ==================== Start Special Features Section ==================== -->
    <section class="special-features section-padding bg-dark">
        <div class="container">
            <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <h6 class="custom-font wow fadeInDown custom-sub-title" data-wow-delay=".3s" style="font-weight: 500; font-size: 40px;">{{ strtoupper(headline('home-why-us-section')->title)}}</h6>
                            <p class="custom-sub-title">{{ headline('home-why-us-section')->subTitle }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <!-- Central Image -->
                <div class="col-lg-5">
                    <div class="img-box wow fadeInUp" data-wow-delay=".3s">
                        <div class="img-frame">
                            @foreach ( $whyUsIcons as $whyUsIcon )
                                @if ($whyUsIcon->title_en == 'why-us-img')
                                    <img src="{{ asset($whyUsIcon->thumbnail) }}" alt="Special Features" class="img-fluid lazy">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Features Column -->
                <div class="col-lg-7">
                    <div class="row features-items">

                        <!-- Feature Start -->
                        @foreach ( $whyUsIcons as $whyUsIcon )
                            @if ($whyUsIcon->title_en != 'why-us-img')
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="fas"> <img src="{{ asset($whyUsIcon->thumbnail) }}" class="lazy" alt="{{ $whyUsIcon->thumbnail }}"></i>
                                        </div>
                                        <div class="cont">
                                            <h5 style="margin: bottom 10px;" class="custom-sub-title">{{ headline($whyUsIcon->title_en)->title }}</h5>
                                            <p class="custom-sub-title">{{ headline($whyUsIcon->title_en)->subTitle }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- Feature End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End Special Features Section ==================== -->
<style>
    /* Special Features Section Styling */
.special-features {
    background-color: #1a1a1a;
    color: #fff;
    overflow: hidden;
}

.special-features .section-head h6 {
    color: #b19777;
}

.special-features .section-head h2 {
    color: #fff;
}

/* Image styling */
.special-features .img-box {
    position: relative;
    margin-bottom: 30px;
}

.special-features .img-frame {
    position: relative;
    overflow: hidden;
    border: 2px solid #b19777;
    padding: 20px;
}

.special-features .img-frame:before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 20px;
    left: -20px;
    border: 2px solid #b19777;
    z-index: -1;
}

.special-features .img-frame img {
    width: 100%;
    height: auto;
}

/* Feature items styling */
.special-features .feature-item {
    display: flex;
    margin-bottom: 30px;
}

.special-features .feature-item .icon {
    font-size: 30px;
    color: #b19777;
    flex-shrink: 0;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    margin-right: 20px;
}

.special-features .feature-item .cont h5 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #fff;
}

.special-features .feature-item .cont p {
    font-size: 14px;
    color: #9c9c9c;
    margin-bottom: 0;
}

/* RTL support */
html[dir="rtl"] .special-features .feature-item .icon {
    margin-right: 0;
    margin-left: 20px;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .special-features .img-box {
        margin-bottom: 50px;
    }

    .special-features .img-frame:before {
        display: none;
    }
}
</style>
