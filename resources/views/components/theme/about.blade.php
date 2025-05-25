@props(['sliders' => []])
 <!-- ==================== Start about ==================== -->

 <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 custom-rectangle">
                    <div class="exp-img wow fadeInUp" data-wow-delay=".3s">
                        @foreach ($sliders as $slider )
			                @if ($slider->title == 'about-us-section-1')
                                <div class="img bg-img wow imago" data-background="{{ asset($slider->thumbnail) }}" style="height: 600px !important">
                                    <div class="since custom-font">
                                        <span class="custom-sub-title">{{ headline('home-about-1')->title }}</span>
                                        <span class="custom-sub-title">{{ headline('home-about-1')->subTitle }}</span>
                                    </div>
                                    <div class="years custom-font">
                                        <h2 style="font-family: 'Teko', sans-serif !important ; font-size: 140px;
                                                    font-weight: 800;
                                                    background: url({{ asset('assets/front-assets/img/exp-1.jpg') }}) no-repeat;
                                                    background-position: 18% 65%;
                                                    -webkit-background-clip: text;
                                                    -webkit-text-fill-color: transparent;
                                                    line-height: 1;">{{ headline('home-about-2')->title }}</h2>
                                        <h5 class="custom-sub-title">{{ headline('home-about-2')->subTitle }}</h5>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-7 valign">
                    <div class="exp-content wow fadeInUp" data-wow-delay=".3s">
                        <h6 class="sub-title custom-sub-title">{{headline('home-about-section')->title}}</h6>
                        <h2 class="mb-20 playfont custom-sub-title">{{ headline('home-about-3')->title }}</h2>
                        <p class="custom-sub-title" style="font-size: 17px">{{ headline('home-about-3')->subTitle }}</p>
                        <div class="numbers mt-50">
                            <div class="row">
                                @foreach ($statistics as $Statistic)
                                    @if ($Statistic->id == 1 || $Statistic->id == 2 || $Statistic->id == 3)
                                        <div class="col-md-4">
                                            <div class="item">
                                                <h3><span class="nbr custom-font">{{$Statistic->count}}</span></h3>
                                                <h6 class="custom-sub-title">{{$Statistic->title}}</h6>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->
    <style>
        /* Add this CSS to make the image rectangular like in the Archo theme */
    
    </style>