@props(['sliders' => []])
<!-- ==================== Start Video Header ==================== -->
<header class="video-header">
    @foreach ($sliders as $slider)
        @if (str_contains($slider->title,'home-header-video'))
            <div class="bg-video valign" data-overlay-dark="6">
                <!-- Video background -->
                <video autoplay muted loop class="video-bg">
                    <source src="{{asset($slider->thumbnail)}}" type="video/mp4">
                    <!-- Fallback image in case video doesn't load -->
                    <div class="bg-img" data-background="{{asset($slider->thumbnail)}}"></div>
                </video>
                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="caption hmone text-center">
                                <h1 style="margin-bottom: 20px">{{headline('home-slider-1')->title}}</h1>
                                <h4 class="custom-sub-title">{{headline('home-slider-1')->subTitle}}</h4>
                                @if($slider->link)
                                <a href="{{$slider->link}}" class="btn-curve btn-bord btn-lit mt-30">
                                    <span class="custom-sub-title">{{ trans('front.learn more') }}</span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @break
        @endif
    @endforeach
</header>
<!-- ==================== End Video Header ==================== -->
<style>
    .video-header {
        height: 100vh;
        position: relative;
    }
    
    .bg-video {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }
    
    .video-bg {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        transform: translateX(-50%) translateY(-50%);
        z-index: -1;
        object-fit: cover;
    }
    
    /* Ensure overlay works with video */
    [data-overlay-dark="6"].bg-video:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 0;
    }
    
    /* Make sure content appears above the video and overlay */
    .bg-video .container {
        position: relative;
        z-index: 1;
    }
</style>