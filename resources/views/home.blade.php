<x-front-layout>
    <x-theme.sections.hero-section :sliders="$sliders" />
    <!-- this is the master div for all the home page content-wrapper -->
    <x-theme.sections.vision />
    <x-theme.sections.about :sliders="$sliders" />
    <x-theme.sections.process :processSliders="$processSliders" />
    <x-theme.sections.services :services="$ourServices" :sliders="$sliders" />
    <x-theme.sections.works :whyUsIcons="$whyUsIcons" />
    <x-theme.sections.our-team />
    {{-- @if (count($reviews) > 0)
        <x-theme.sections.testimonials :reviews="$reviews" />
    @endif --}}
    <x-theme.instagram-feeds />
</x-front-layout>
