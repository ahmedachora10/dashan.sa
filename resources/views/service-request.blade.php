<x-front-layout>
   

    <!-- ==================== Start Form Section ==================== -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-head text-center mb-50">
                        <h6 class="custom-font wow fadeInDown custom-sub-title" data-wow-delay=".3s">{{ ucwords(trans('add new request')) }}</h6>
                        <h3 class="playfont wow flipInX custom-sub-title" data-wow-delay=".5s">"{{ $service->name }}"</h3>
                        <div class="flex-symbol mt-20 mb-10">
                            <span class="line"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="line"></span>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="form-request wow fadeInUp" data-wow-delay=".5s">
                        <div class="form-box">
                            <livewire:store-service-request :service="$service" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dots-pattern bg-img bg-repeat" data-background="{{ asset('assets/front-assets/img/dots.png') }}"></div>
    </section>
    <!-- ==================== End Form Section ==================== -->

    <!-- ==================== Start Contact Info ==================== -->
    <div class="contact-info section-padding bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="item wow fadeInUp md-mb50" data-wow-delay=".3s">
                        <span class="icon flaticon-phone-call"></span>
                        <div class="cont">
                            <h6 class="custom-font custom-sub-title">{{ trans('front.your phone') }}</h6>
                            <a href="tel:{{ setting('phone') }}" style=" text-decoration: none;">&#x200E;+{{ setting('phone') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item wow fadeInUp md-mb50" data-wow-delay=".5s">
                        <span class="icon flaticon-email"></span>
                        <div class="cont">
                            <h6 class="custom-font custom-sub-title">{{ trans('front.email') }}</h6>
                            <a class="info" href="mailto:{{ setting('email') }}" style=" text-decoration: none;">{{ setting('email') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay=".7s">
                        <span class="icon flaticon-location"></span>
                        <div class="cont">
                            <h6 class="custom-font custom-sub-title">{{trans('footer.office')}}</h6>
                            <p class="custom-sub-title">{{ app()->getLocale() == 'ar' ? setting('address_ar'): setting('address_en') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================== End Contact Info ==================== -->
</x-front-layout>

<style>
/* Custom styling for the request form */
.form-box {
    padding: 60px;
    background: #fff;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
    border-radius: 5px;
    position: relative;
}

.form-box:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 10px;
    background: linear-gradient(to right, #b19777, #cba987);
    border-radius: 5px 5px 0 0;
}

.flex-symbol {
    display: flex;
    align-items: center;
    justify-content: center;
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

.form-control {
    height: 54px;
    padding: 0 15px;
    font-size: 14px;
    border: 1px solid #eee;
    border-radius: 5px;
    margin-bottom: 30px;
    transition: all .3s;
}

.form-control:focus {
    border-color: #b19777;
    box-shadow: 0 0 20px rgba(177, 151, 119, 0.1);
}

textarea.form-control {
    min-height: 150px;
    padding: 15px;
}

.form-group .btn {
    padding: 15px 40px;
    margin-top: 20px;
    border-radius: 5px;
    border: 1px solid #b19777;
    background: #b19777;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: all .3s;
}

.form-group .btn:hover {
    background: transparent;
    color: #b19777;
}

.contact-info .item {
    text-align: center;
    padding: 40px 20px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
    transition: all .3s;
}

.contact-info .item:hover {
    transform: translateY(-5px);
    box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
}

.contact-info .item .icon {
    font-size: 50px;
    color: #b19777;
    margin-bottom: 20px;
    display: block;
}

.contact-info .item h6 {
    margin-bottom: 10px;
    font-size: 18px;
    font-weight: 600;
}

.section-padding {
    padding: 100px 0;
}

.bg-gray {
    background-color: #f8f8f8;
}

.playfont {
    font-family: 'Playfair Display', serif;
}

@media (max-width: 767px) {
    .form-box {
        padding: 30px;
    }
    
    .section-padding {
        padding: 60px 0;
    }
    
    .contact-info .item {
        margin-bottom: 30px;
    }
}
</style>