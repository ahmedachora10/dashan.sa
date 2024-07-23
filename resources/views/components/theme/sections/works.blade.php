<!-- portfolio area start -->
<section class="tp-portfolio-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-offer-title-wrapper text-center mb-55">
                    <span class="tp-section-title-pre">{{headline('work')->title}}</span>
                    <h3 class="tp-section-title">{{headline('work')->subTitle}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gx-0">
        <div class="tp-portfolio-slider tp-cursor-point-area">
            <div class="tp-portfolio-active swiper slider-drag">
                <div class="swiper-wrapper">
                    @foreach ($works as $item)
                        <div class="swiper-slide">
                            <div class="tp-portfolio-thumb">
                                <img src="{{$item->thumbnail}}" alt="">
                                <div class="tp-portfolio-thumb-info">
                                    {{-- <p>Houses</p> --}}
                                    <h4 class="tp-portfolio-title"><a href="{{route('works.show', $item)}}">{{$item->client_name}}</a></h4>
                                </div>
                                <div class="tp-portfolio-btn">
                                    <a href="{{route('works.show', $item)}}"><i class="fa-light fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio area end -->
