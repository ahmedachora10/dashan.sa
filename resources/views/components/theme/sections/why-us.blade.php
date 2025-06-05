@props(['sliders' => []])
<!--=================================
          Why Us -->
          <section class="space-ptb our-mission-section">
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-lg-5 mb-5 mb-lg-0">
                  <div class="about-img">
                  @foreach ($sliders as $slider )
					@if ($slider->title == 'about-us-section-4')
                    	<img class="img-fluid lazy radius-20 wow pgsLeftToRight" src="{{asset($slider->thumbnail)}}" alt="#">
                  	@endif
                  @endforeach
                  </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                      <span class="sub-title">[ {{trans('front.why choose us')}} ]</span>
                      <h2 class="title">{{headline('about-us-why-deal')->title}}</h2>
                      <p>{{headline('about-us-why-deal')->subTitle}}</p>
                    </div>
                    <div class="icon-box-wrapper">
                      <div class="icon-box-item wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="icon">
                        @foreach ($sliders as $slider )
					        @if ($slider->title == 'about-us-vision')
                                <img class="img-fluid lazy" src="{{asset($slider->thumbnail)}}" alt="#">
                            @endif
                        @endforeach
                        </div>
                        <div class="content">
                          <h6 class="title">{{headline('about-us-vision')->title}}</h6>
                          <p class="description">{!! formatDescription(headline('about-us-vision')->subTitle, app()->getLocale() === 'ar') !!}</p>
                        </div>
                      </div>
                      <div class="icon-box-item wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="icon">
                        @foreach ($sliders as $slider )
					        @if ($slider->title == 'about-us-mission')
                                <img class="img-fluid lazy" src="{{asset($slider->thumbnail)}}" alt="#">
                            @endif
                        @endforeach
                        </div>
                        <div class="content">
                          <h6 class="title">{{headline('about-us-mission')->title}}</h6>
                          <p class="description">{!! formatDescription(headline('about-us-mission')->subTitle, app()->getLocale() === 'ar') !!}</p>
                        </div>
                      </div>
                      <div class="icon-box-item wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1500ms">
                        <div class="icon">
                        @foreach ($sliders as $slider )
					        @if ($slider->title == 'about-us-value')
                                <img class="img-fluid lazy" src="{{asset($slider->thumbnail)}}" alt="#">
                            @endif
                        @endforeach
                        </div>
                        <div class="content">
                          <h6 class="title">{{headline('about-us-value')->title}}</h6>
                          <p class="description">{!! formatDescription(headline('about-us-value')->subTitle, app()->getLocale() === 'ar') !!}</p>
                        </div>
                      </div>
                   </div>
                </div>
              </div>
            </div>
          </section>
          <!--=================================
          Why US -->
