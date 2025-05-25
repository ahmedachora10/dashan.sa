@props(['processSliders' => []])
<!-- ==================== Start how do we work ==================== -->
<section class="process section-padding bg-img bg-repeat" data-background="{{ asset('assets/front-assets/img/dots.png') }}" data-overlay-dark="9">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown custom-sub-title" data-wow-delay=".3s">{{ headLine('home-process-section')->title }}</h6>
                    </div>
                </div>
            </div>
            <div class=" row">
              @foreach ($processSliders as $slider )
                @if( app()->getLocale() == 'ar' )
                  <div class="col-lg-2 col-md-6 {{ $loop->iteration == 1 ? '':'coulmn' }} wow fadeInUp" data-wow-delay=".3s">
                      <div class="item">
                          <div class="bg-img" data-background="{{asset($slider->thumbnail)}}">
                              <h3 class="numb custom-font">0{{ $loop->iteration }}</h3>
                          </div>
                          <div class="cont">
                              <h6 class="mb-10 custom-sub-title">{{headline('about-how-we-work-'.$loop->iteration)->title}}</h6>
                              <p class="custom-sub-title">{{headline('about-how-we-work-'.$loop->iteration)->subTitle}}</p>
                          </div>
                      </div>
                  </div>
                @else
                  <div class="col-lg-2 col-md-6 {{ $loop->iteration == $loop->count ? '':'coulmn' }} wow fadeInUp" data-wow-delay=".3s">
                      <div class="item">
                          <div class="bg-img" data-background="{{asset($slider->thumbnail)}}">
                              <h3 class="numb custom-font">0{{ $loop->iteration }}</h3>
                          </div>
                          <div class="cont">
                              <h6 class="mb-10 custom-sub-title">{{headline('about-how-we-work-'.$loop->iteration)->title}}</h6>
                              <p class="custom-sub-title">{{headline('about-how-we-work-'.$loop->iteration)->subTitle}}</p>
                          </div>
                      </div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
    </section>
    <!-- ==================== End how do we work  ==================== -->