<x-front-layout>
    <div class="py-4"></div>
    <section class="site-section" id="next-section">
        <div class="container">
            <div class="shadow-sm">
                <h4 class="mb-3 p-4 border-bottom text-primary">تواصل معنا</h4>
                <div class="p-4">
                    <div class="row align-items-start">
                        <div class="col-lg-8 mb-5 mb-lg-0 py-4">
                            <livewire:contact-us-form />
                        </div>
                        <div class="col-lg-4 ml-auto">
                            <div class="p-4 mb-3 bg-white">
                                @foreach ($supports as $item)
                                    <p class="mb-0 font-weight-bold">{{ $item->name }}</p>
                                    <p class="mb-0"><a href="#">{{ $item->contact }}</a></p>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @push('scripts')
        <script defer>
            var heroSwiper = new Swiper('.swiper', {
                // Optional parameters
                // direction: 'vertical',
                loop: true,

            });
        </script>
    @endpush
</x-front-layout>
