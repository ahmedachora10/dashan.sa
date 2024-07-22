<x-front-layout>
    <x-theme.sections.breadcrumb image="theme/img/breadcrumb/bradcrumb-14.jpg" title="contact us" />

    <section class="tp-contact-area ">
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
        </div>
    </section>

</x-front-layout>
