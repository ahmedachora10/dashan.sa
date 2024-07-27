<x-front-layout>
    <x-theme.sections.breadcrumb image="theme/img/breadcrumb/bradcrumb-14.jpg" title="contact us" />

    <section class="tp-contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-contact-wrapper mb-120">
                        <h3 class="tp-contact-title">{{ ucwords(trans('contact us'))}}</h3>

                        <div class="tp-contact-input-form">
                            <div class="row">
                                <livewire:contact-us-form />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-contact-box">
                <div class="row">
                    @if(!empty(setting('phone')))
                    <div class="col-lg-4">
                        <div class="tp-contact-item text-center">
                            <div class="tp-contact-item-icon">
                                <span><i class="flaticon-location"></i></span>
                            </div>
                            <div class="tp-contact-item-content">
                                <h3 class="tp-contact-item-title">{{ trans('front.contact us') }}</h3>
                                <a href="#">{{setting('phone')}}</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(!empty(setting('email')))
                    <div class="col-lg-4">
                        <div class="tp-contact-item text-center">
                            <div class="tp-contact-item-icon">
                                <span><i class="flaticon-location"></i></span>
                            </div>
                            <div class="tp-contact-item-content">
                                <h3 class="tp-contact-item-title">{{ trans('front.contact us') }}</h3>
                                <a href="#">{{setting('email')}}</a>
                            </div>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

    <div class="pt-90 pb-90"></div>

</x-front-layout>
