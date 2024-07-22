<!-- brand area start -->
<div class="tp-brand-area tp-brand-3-bg p-relative pt-140 pb-140 fix">
    <div class="tp-brand-3-shape">
        <img src="{{asset('theme/img/brand/home-3/brand-3-bg.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
            @foreach ($clients as $item)
            <div class="col-xl">
                <a href="{{$item->link}}" target="_blank" class="tp-brand-item">
                    <img width="120" height="108" class="tp-brand-item-img home-3" src="{{$item->thumbnail}}" alt="">
                    <img width="120" height="108" class="tp-brand-item-hover" src="{{$item->thumbnail}}" alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- brand area end -->
