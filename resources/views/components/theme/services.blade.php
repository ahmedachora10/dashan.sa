<!-- ==================== Start Services ==================== -->

  <section class="services section-padding bg-gray">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown custom-sub-title" data-wow-delay=".3s">{{ headLine('home-services-section')->title }}</h6>
                        <h4 class="playfont wow flipInX custom-sub-title" data-wow-delay=".5s">{{headLine('home-services-section')->subTitle}}</h4>
                    </div>
                </div>
            </div>
            @if (request()->routeIs('home'))
                @foreach ($sliders as $slider)
                    @if ($slider->title == 'home-services')
                        <div class="row bord-box bg-img wow fadeInUp" data-wow-delay=".3s" data-background="{{asset($slider->thumbnail)}}">
                    @endif
                @endforeach
            @else
            <div class="row bord-box bg-img wow fadeInUp" data-wow-delay=".3s" data-background="{{ asset($servicesSlider->thumbnail) }}">
            @endif
                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-6 item-bx">
                        <h2 class="custom-font numb" style="font-family: 'Teko', sans-serif !important; font-weight: 400 !important;">0{{$loop->iteration}}</h2>
                        <h6 class="mb-20 custom-sub-title">{{ $service->name }}</h6>
                        <p class="custom-sub-title">{{ $service->title }}</p>
                        <a href="{{ route('services.details',$service->id) }}" class="more custom-font mt-30 text-end custom-sub-title" style="text-decoration: none;">{{ trans('front.learn more') }}</a>
                    </div>
                @endforeach
            </div>
            @if(request()->routeIs('home'))
                <div class="text-center">
                    <a href="{{route('services.all')}}" class="btn-curve btn-bord more custom-font mt-30">
                        <span class="custom-sub-title">{{ trans('front.learn more') }}</span>
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- ==================== End Services ==================== -->
    <style>
      /* Make all service boxes equal height - maintaining column layout */
        .services .bord-box .col-lg-3.item-bx {
            height: auto;
            display: flex;
            flex-direction: column;
        }
        
        /* Allow the paragraph to grow and fill space */
        .services .bord-box .item-bx p {
            flex-grow: 1;
        }
        
        /* Push the "learn more" link to the bottom */
        .services .bord-box .item-bx .more {
            margin-top: auto;
        }
        
        /* Ensure content is properly spaced */
        .services .bord-box .item-bx h2.numb,
        .services .bord-box .item-bx h6 {
            flex-shrink: 0;
        }
    </style>

    