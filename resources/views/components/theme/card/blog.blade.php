@props(['image' => '', 'title' => '', 'link' => '#'])
<div class="tp-blog-3-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
    <div class="tp-blog-3-thumb p-relative fix">
        <img src="{{$image}}" alt="" height="300px">
        <div class="tp-blog-3-icon">
            <a href="blog-details.html"><i class="flaticon-next"></i></a>
        </div>
    </div>
    <div class="tp-blog-3-content text-center z-index">
        <div class="tp-blog-3-meta pb-25">
            <span><i class="fa-light fa-circle-user"></i>By thempure</span>
            <span><i class="flaticon-tag"></i>Repair</span>
        </div>
        <h4 class="tp-blog-3-title"><a href="{{$link}}">{{ $title }}</a></h4>
    </div>
</div>
