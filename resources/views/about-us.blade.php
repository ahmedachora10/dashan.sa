<x-front-layout>
  @if (app()->getLocale() === 'ar')
    <style>
      #why-us-sub-title::before{
        left: 75%;
      }
    </style>
  @endif
    <!-- ==================== Start Header ==================== -->
  
    <header class="pages-header bg-img valign parallaxie" data-background="{{asset($headerSlider->thumbnail)}}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1 class="custom-sub-title">{{trans('front.about')}}</h1>
                        <div class="path">
                            <a class="custom-sub-header custom-sub-title" href="{{ route('home') }}">{{trans('front.home')}}</a><span>/</span><a href="#0" class="active custom-sub-header custom-sub-title">{{trans('front.about')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Header ==================== -->
    <!-- ==================== Start about section 1 ==================== -->

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="numbers">
                        <div class="row">
                          @foreach ($statistics as $Statistic)
                            @if ($Statistic->id == 1 || $Statistic->id == 2 || $Statistic->id == 3 || $Statistic->id == 4)
                              <div class="col-sm-6">
                                  <div class="item mb-50">
                                      <h3><span class="nbr custom-font">{{$Statistic->count}}</span></h3>
                                      <h6 class="custom-sub-title">{{$Statistic->title}}</h6>
                                  </div>
                              </div>
                            @endif
                          @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="txt-cont">
                        <p class="mb-20 custom-sub-title" style="font-size: 20px;">{{headline('about-section-1')->title}}</p>
                        <p class="custom-sub-title" style="font-size: 20px;">{{headline('about-section-1')->subTitle}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about section 1  ==================== -->
    
    <!-- ==================== Start mission-vision-goals ==================== -->

    <x-theme.sections.vision />

    <!-- ==================== End mission-vision-goals ==================== -->
    <!-- ==================== Start Services ==================== -->

    <section class="services halfbg">
    @foreach ($sliders as $slider )
      @if ($slider->title == 'about-us-section-4')
        <div class="background bg-img valign parallaxie" data-background="{{asset($slider->thumbnail)}}" data-overlay-dark="7">
      @endif
    @endforeach
            <a class="play-button vid" href="{{setting('video')}}">
                <svg class="circle-fill">
                    <circle cx="43" cy="43" r="39" stroke="#fff" stroke-width=".5"></circle>
                </svg>
                <svg class="circle-track">
                    <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1" fill="none"></circle>
                </svg>

                <span class="polygon">
                    <i class="pe-7s-play"></i>
                </span>
            </a>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->

    

    <!-- ==================== Start Team ==================== -->

    <x-theme.sections.our-team  />

    <!-- ==================== End Team ==================== -->
</x-front-layout>