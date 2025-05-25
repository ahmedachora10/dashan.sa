<x-front-layout>
    <!-- ==================== Start Header ==================== -->
    <header class="pages-header bg-img valign parallaxie" data-background="{{ asset($headerSlider->thumbnail ?? 'assets/front-assets/img/pg1.jpg') }}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <span class="top-corn"></span>
                        <span class="bottom-corn"></span>
                        <h1 class="custom-sub-title">{{$service->name}}</h1>
                        <div class="path">
                            <a class="custom-sub-title" href="{{route('home')}}">{{trans('front.home')}}</a><span>/</span><a class="custom-sub-title" href="{{route('services.all')}}">{{trans('front.services')}}</a><span>/</span><a href="#" class="active custom-sub-title">{{$service->name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==================== End Header ==================== -->

    <!-- ==================== Start Services Details ==================== -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- Services Menu - Elegant styling -->
                        <div class="specialty mb-50 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="item-bx">
                                <h6 class="custom-font mb-30 custom-sub-title">{{ trans('front.our services') }}</h6>
                                <ul>
                                    @foreach ($ourServices as $ourService)
                                        <li class="{{ $service->id == $ourService->id ? 'active-service' : ''}}">
                                            <span class="numb custom-font">0{{$loop->iteration}}.</span>
                                            <a href="{{route('services.details',$ourService->id)}}" style="text-decoration: none;" class="{{ $service->id == $ourService->id ? 'active-link' : ''}} custom-sub-title">
                                                {{$ourService->name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Contact Box - Enhanced Styling -->
                        <div class="post-img bg-img wow fadeInUp" data-wow-delay="0.3s" data-background="{{ asset('assets/front-assets/img/pattern.png') }}">
                            <div class="info">
                                <h6 class="custom-font custom-sub-title">{{headline('services-details-card')->title}}</h6>
                                <p class="custom-sub-title">{{headline('services-details-card')->subTitle}}</p>
                                <div class="social-icon mt-20">
                                    <div class="contact-info">
                                        <div class="item mb-15">
                                            <span class="icon">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                            <a href="tel:&#x200E;+{{setting('phone')}}" class="custom-font">&#x200E;+{{setting('phone')}}</a>
                                        </div>
                                        <div class="item">
                                            <span class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                            <a href="mailto:{{setting('email')}}" class="custom-font">{{setting('email')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="service-detials">
                        <!-- Service Image with Overlay Effect -->
                        <div class="img mb-40 wow fadeInUp" data-wow-delay="0.3s">
                            <img src="{{asset($service->thumbnail)}}" alt="{{$service->name}}" class="img-fluid">
                        </div>
                        
                        <!-- Service Content with Visual Elements -->
                        <div class="content wow fadeInUp" data-wow-delay="0.3s">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="cont">
                                        <div class="section-head mb-30">
                                            <h3 class="playfont custom-sub-title">{{$service->title}}</h3>
                                            <div class="flex-symbol">
                                                <span class="line"></span>
                                                <span class="circle"></span>
                                                <span class="circle"></span>
                                                <span class="circle"></span>
                                                <span class="line"></span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p class="mb-30 custom-sub-title">{{$service->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dots-pattern bg-img bg-repeat" data-background="{{ asset('assets/front-assets/img/dots.png') }}"></div>
    </section>
    <!-- ==================== End Services Details ==================== -->

    <!-- ==================== Start Call-to-Action ==================== -->
    <section class="call-action halfbg">
        <div class="background bg-img valign parallaxie" data-background="{{ asset('assets/front-assets/img/pattern.png') }}" data-overlay-dark="7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content text-center">
                            <span class="top-corn"></span>
                            <span class="bottom-corn"></span>
                            <div class="text-center custom-font">
                                <h6 class="wow fadeInDown custom-sub-title" data-wow-delay="0.3s">{{ trans('front.need for help') }}</h6>
                                <h2 class="wow flipInX custom-sub-title" style="font-size: 40px;" data-wow-delay="0.5s">{{ trans('front.request service') }}</h2>
                            </div>
                            <a href="{{route('services.request',$service->id)}}" class="btn-curve btn-color mt-30 mb-30 wow fadeInUp custom-sub-title" data-wow-delay="0.7s">
                                <span>{{ trans('front.click here') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End Call-to-Action ==================== -->

    <!-- ==================== Start Additional Design Element ==================== -->
    <div class="services halfbg bg-gray mt-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feat-top wow fadeInUp" data-wow-delay="1s"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================== End Additional Design Element ==================== -->
</x-front-layout>

<style>
/* Custom CSS for enhanced service details page */
.active-service {
    position: relative;
}

.active-service::before {
    content: '';
    position: absolute;
    left: -20px;
    top: 50%;
    width: 10px;
    height: 2px;
    background: #b19777;
    transform: translateY(-50%);
}

.active-link {
    color: #b19777 !important;
    font-weight: 600;
}

.flex-symbol {
    display: flex;
    align-items: center;
    margin: 20px 0;
}

.flex-symbol .line {
    width: 30px;
    height: 1px;
    background-color: #b19777;
}

.flex-symbol .circle {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background-color: #b19777;
    margin: 0 5px;
}

.specialty ul li {
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(0,0,0,.05);
    transition: all .3s;
}

.specialty ul li:hover {
    padding-left: 5px;
}

.specialty ul li span.numb {
    font-size: 18px;
    color: #b19777;
    margin-right: 10px;
}

.specialty ul li .active-link {
    position: relative;
}

.specialty ul li a {
    color: #1a1a1a;
    font-size: 16px;
    transition: all .3s;
}

.specialty ul li a:hover {
    color: #b19777;
}

.item-bx {
    padding: 30px;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.05);
    background: #fff;
    border-radius: 5px;
}

.post-img {
    position: relative;
    padding: 30px;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.05);
    background: #fff;
    border-radius: 5px;
    overflow: hidden;
}

.post-img::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, transparent, rgba(0,0,0,0.1));
    z-index: -1;
}

.post-img .info {
    position: relative;
    z-index: 2;
}

.post-img .info h6 {
    color: #1a1a1a;
}

.contact-info .item {
    display: flex;
    align-items: center;
}

.contact-info .item .icon {
    font-size: 18px;
    color: #b19777;
    margin-right: 10px;
    display: inline-block;
}

.top-corn, .bottom-corn {
    position: absolute;
    width: 30px;
    height: 30px;
    border-color: #b19777;
    opacity: .5;
}

.top-corn {
    top: 0;
    left: 0;
    border-left: 1px solid;
    border-top: 1px solid;
}

.bottom-corn {
    bottom: 0;
    right: 0;
    border-right: 1px solid;
    border-bottom: 1px solid;
}

.halfbg .content {
    position: relative;
    padding: 80px;
}

.section-head h3 {
    position: relative;
    padding-bottom: 15px;
}

.section-head h3:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 70px;
    height: 2px;
    background-color: #b19777;
}

.img img {
    width: 100%;
    height: auto;
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.5s;
}

.img img:hover {
    transform: translateY(-5px);
}
</style>