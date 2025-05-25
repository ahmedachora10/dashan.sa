<x-front-layout>
    <!-- ==================== Start Header ==================== -->
    <header class="pages-header bg-img valign parallaxie" data-background="{{asset($slider->thumbnail)}}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <span class="top-corn"></span>
                        <span class="bottom-corn"></span>
                        <h1 class="custom-sub-title">{{trans('contact us')}}</h1>
                        <div class="path">
                            <a class="custom-sub-header custom-sub-title" href="{{route('home')}}">{{trans('front.home')}}</a><span>/</span><a href="#" class="active custom-sub-header custom-sub-title">{{trans('contact us')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==================== End Header ==================== -->

    <!-- ==================== Start Contact Info ==================== -->
    
    <!-- ==================== End Contact Info ==================== -->

    <!-- ==================== Start Contact Form & Map ==================== -->
    <section class="contact">
        <div class="info bg-gray pt-80 pb-80">
            <div class="container">
                <div class="row">
                <div class="col-lg-3">
                        <div class="item wow fadeInUp" data-wow-delay="0.2s">
                            <span class="icon pe-7s-phone"></span>
                            <div class="cont">
                                <h6 class="custom-font text-center custom-sub-title"  style="font-weight: bold;">{{trans('front.your phone')}}</h6>
                                <p><a class="custom-sub-title" href="tel:{{ setting('phone') }}" style="text-decoration: none;">&#x200E;+{{ setting('phone') }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item wow fadeInUp" data-wow-delay="0.4s">
                            <span class="icon pe-7s-mail-open"></span>
                            <div class="cont">
                                <h6 class="custom-font text-center custom-sub-title"  style="font-weight: bold;">{{trans('front.email')}}</h6>
                                <p><a class="custom-sub-title" href="mailto:{{ setting('email') }}" style="text-decoration: none;">{{ setting('email') }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item wow fadeInUp" data-wow-delay="0.6s">
                            <span class="icon pe-7s-map"></span>
                            <div class="cont">
                                <h6 class="custom-font text-center custom-sub-title"  style="font-weight: bold;">{{trans('footer.office')}}</h6>
                                <p class="custom-sub-title">{{trans('footer.address')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item wow fadeInUp" data-wow-delay="0.8s">
                            <span class="icon pe-7s-clock"></span>
                            <div class="cont">
                                <h6 class="custom-font text-center custom-sub-title" style="font-weight: bold;">{{ trans('front.Office Time') }}</h6>
                                <p class="custom-sub-title">{{ trans('front.days') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 map-box">
                    <div class="map">
                        <iframe class="map" src="{{setting('location')}}" allowfullscreen="true" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 form">
                    <livewire:contact-us-form view="livewire.contact-us-form" />
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End Contact Form & Map ==================== -->

</x-front-layout>
<style>
    /* Make all contact info cards equal size */
.contact .info .row {
  display: flex;
  flex-wrap: wrap;
}

.contact .info .col-lg-3 {
  display: flex;
}

.contact .info .item {
  width: 100%;
  height: 100%;
  padding: 20px; /* Consistent padding */
  background-color: #fff; /* Ensure consistent background */
}

/* Keep original layout of icon and content */
.contact .info .item .icon {
  display: inline-block;
  vertical-align: middle;
  margin-right: 15px;
}

.contact .info .item .cont {
  display: inline-block;
  vertical-align: middle;
}

/* Fix for RTL if needed */
[dir="rtl"] .contact .info .item .icon {
  margin-right: 0;
  margin-left: 15px;
}
</style>