<x-front-layout>
    
    <!-- ==================== Start Slider ==================== -->

    <header class="pages-header bg-img valign parallaxie" data-background="{{asset($slider->thumbnail)}}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h4 class="custom-header custom-sub-title">{{headline('our-works-header')->subTitle}}</h4>
                        <div class="path">
                            <a class="custom-sub-header custom-sub-title" href="{{ route('home') }}">{{trans('front.home')}}</a><span>/</span><a href="#0" class="active custom-sub-header custom-sub-title">{{trans('front.our works')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->
    <!-- ==================== Start works ==================== -->

    <section class="portfolio section-padding">
        <div class="container">
            <div class="row">

                <!-- filter links -->
                <div class="filtering text-center col-12">
                    <div class="filter box">
                        <span data-filter='*' class="active">{{trans('front.all')}}</span>
                        @foreach ($tags as $tag)
                          @if ($tag->name != "All" && $tag->name != "الكل")
                            <span class="custom-sub-title" data-filter=".{{str_replace(' ', '-', $tag->name)}}">{{$tag->name}}</span>
                          @endif
                        @endforeach
                    </div>
                </div>

                <!-- gallery -->
                <div class="gallery twsty inf-lit full-width">
                  @foreach ($works as $work)
                    <!-- gallery item -->
                    <div class="items three-column mt-50 custom-sub-title 
                        {{str_replace(' ', '-', $work->tag->name)}} 
                        {{ $work->tag->name == 'All' || $work->tag->name == 'الكل' ? 
                           implode(' ', $tags->pluck('name')->map(function($name) { 
                               return str_replace(' ', '-', $name); 
                           })->toArray()) : '' }}" 
                        style="width: 32% !important;">
                        <div class="item-img bg-img" data-background="{{asset(convertImagePath($work->thumbnail))}}">
                            <a href="{{route('works.show', $work->id)}}">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 class="custom-sub-title">{{ $work->client_name }}</h5>
                            <span class="custom-sub-title">{{ $work->tag->name}}</span>
                        </div>
                    </div>
                  @endforeach
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End works ==================== -->
        
</x-front-layout>