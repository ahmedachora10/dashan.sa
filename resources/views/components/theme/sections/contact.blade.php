<!-- contact area start -->
<section class="tp-contact-7-area p-relative pt-120">
    <div class="tp-contact-7-bg" data-background="{{asset('theme/img/contact/home-7/contact-7-bg.jpg')}}"></div>
    <div class="tp-contact-7-shape">
    <img src="{{asset('theme/img/contact/home-7/contact-7-1.png')}}" alt="">
    </div>
    <div class="container">
    <div class="row">
        <div class="col-lg-7 col-md-6">
            <div class="tp-contact-7-title-wrapper">
                <h3 class="tp-section-title">Emergency electricity <br> fixing 6o minutes</h3>
                <div class="tp-contact-7-btn">
                <a class="tp-btn tp-icon-style" href="contact.html">Read More <span><svg class="qodef-svg--custom-arrow qodef-m-arrow" xmlns="http://www.w3.org/2000/svg" width="14.2" height="14.2" viewBox="0 0 14.2 14.2">
                    <g><path d="M13.2 9V1h-8M13.4.8.7 13.5"></path><path d="M13.2 9V1h-8M13.4.8.7 13.5"></path></g>
                    <g><path d="M13.2 9V1h-8M13.4.8.7 13.5"></path><path d="M13.2 9V1h-8M13.4.8.7 13.5"></path></g>
                </svg></span></a>
                </div>
                <div class="tp-contact-7-angel">
                <img src="{{asset('theme/img/contact/home-7/contact-7-shape.png')}}" alt="">
                </div>
            </div>
            {{-- <div class="tp-contact-7-project justify-content-lg-end d-flex">
                <div class="tp-contact-7-complete text-center">
                <h4 class="tp-contact-7-count"><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="140"></span>+</h4>
                <span>Completed projects</span>
                </div>
                <div class="tp-contact-7-complete text-center">
                <h4 class="tp-contact-7-count"><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="90"></span>+</h4>
                <span>Completed projects</span>
                </div>
            </div> --}}
        </div>
        <div class="col-lg-5 col-md-6">
            <div class="tp-contact-7-box">
                <h3 class="tp-contact-7-title">{{ ucwords(trans('contact us'))}}</h3>
                <livewire:contact-us-form view="livewire.contact-us-form-1" />
            </div>
        </div>
    </div>
    </div>
</section>
<!-- contact area end -->
