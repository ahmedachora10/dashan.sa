<x-front-layout>
    <x-theme.sections.hero-section :sliders="$sliders" />
    <x-theme.sections.our-blog :visions="$visions" />
    <x-theme.sections.about />
    <x-theme.sections.services :services="$ourServices" />

    {{-- @push('scripts')
        <script defer>
            var heroSwiper = new Swiper('#slider', {
                // Optional parameters
                // direction: 'vertical',
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: true,
                },

            });

            var clientLogosSwiper = new Swiper('#swiper-clients-logos', {
                // Optional parameters
                // direction: 'vertical',
                loop: true,
                slidesPerView: 3,
                spaceBetween: 15,

                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },

                breakpoints: {
                    0: {
                        slidesPerView: 2,
                    },
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },

            });
        </script>
    @enpush('scripts')
        <script defer>
            var heroSwiper = new Swiper('#slider', {
                // Optional parameters
                // direction: 'vertical',
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: true,
                },

            });

            var clientLogosSwiper = new Swiper('#swiper-clients-logos', {
                // Optional parameters
                // direction: 'vertical',
                loop: true,
                slidesPerView: 3,
                spaceBetween: 15,

                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },

                breakpoints: {
                    0: {
                        slidesPerView: 2,
                    },
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },

            });
        </script>
    @endpush --}}
</x-front-layout>
