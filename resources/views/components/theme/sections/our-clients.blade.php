<!-- brand area start -->
<div class="tp-brand-area tp-brand-3-bg p-relative pt-60 pb-60 fix">
    <div class="tp-brand-3-shape">
        <img src="{{asset('theme/img/brand/home-3/brand-3-bg.png')}}" alt="">
    </div>
    <div class="container px-0">
        <div class="tp-brand-active swiper-container fix">
            <div class="swiper-wrapper align-items-center">
                @foreach ($clients as $item)
                <div class="swiper-slide text-center">
                    <a href="{{$item->link}}" target="_blank" class="tp-brand-item">
                        <img class="tp-brand-item-img home-3" src="{{$item->thumbnail}}" alt="">
                        <img class="tp-brand-item-hover" src="{{$item->thumbnail}}" alt="">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- brand area end -->
