<x-front-layout>
    <x-theme.sections.hero-section :sliders="$sliders" />
    <div class="pb-100"></div>
    <x-theme.sections.our-blog :visions="$visions" />
    {{-- <x-theme.margin /> --}}
    <x-theme.sections.about />
    <x-theme.sections.services :services="$ourServices" />
    <x-theme.sections.our-clients />
    <x-theme.margin />
    <x-theme.sections.works />
    <x-theme.sections.testimonials />
    <x-theme.sections.statistics :statistics="null" />
    <x-theme.sections.our-team :members="null" />
    <x-theme.sections.faq :faq="null" />
    <x-theme.sections.why-us />
</x-front-layout>
