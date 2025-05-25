@props(['reviews' => []])
<!-- ==================== Start Testimonials ==================== -->


    <section class="testimonials grid section-padding bg-img parallaxie" 
        data-overlay-dark="9">
        <div class="container mb-50">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown custom-sub-title" data-wow-delay=".3s">{{headline('testimonials')->title}}</h6>
                        <h4 class="playfont wow flipInX custom-sub-title" data-wow-delay=".5s">{{headline('testimonials')->subTitle}}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testim wow fadeInUp" data-wow-delay=".3s">
                        @foreach ($reviews as $review)
                            <div class="item">
                                <span class="quote-icon"><img src="{{ asset('assets/front-assets/img/clients/quote.svg') }}" alt=""></span>
                                <div class="cont">
                                    <p class="playfont custom-sub-title">{{ $review->comment }}</p>
                                </div>
                                <div class="info">
                                    <h6 style="float: left;" class="custom-sub-title">{{ $review->name }} </h6>
                                </div>
                            </div>
                        @endforeach   
                        
                    </div>
                    <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                        <span class="prev">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </span>
                        <span class="next">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </span>
                    </div>
                    <div class="section-head text-center" style="margin-top: 10px;">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-8 col-sm-10">
                            <h6 class="custom-font wow fadeInDown custom-sub-title" data-wow-delay=".5s">{{headline('testimonials-card1')->subTitle}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End Testimonials ==================== -->