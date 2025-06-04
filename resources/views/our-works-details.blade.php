<x-front-layout>
    <!-- ==================== Start Header ==================== -->

    <header class="pages-header bg-img valign parallaxie"
        data-background="{{ asset(convertImagePath($work->background)) }}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1 class="custom-sub-title">{{ $work->client_name }}</h1>
                        <div class="path">
                            <a href="{{ route('home') }}" class="custom-sub-title"
                                style="text-decoration: none;">{{ trans('front.home') }}</a><span>/</span><a
                                href="{{ route('works.index') }}" class="custom-sub-title"
                                style="text-decoration: none;">{{ trans('front.our works') }}</a><span>/</span><a
                                href="#0" class="active custom-sub-title"
                                style="text-decoration: none;">{{ $work->client_name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==================== End Header ==================== -->
    <!-- ==================== Start Intro ==================== -->

    <section class="intro-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="htit">
                        <h4 class="custom-sub-title">{{ trans('front.overview') }}</h4>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1 col-md-8 mb-30">
                    <div class="text">
                        <p class="custom-sub-title">{{ $work->description }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="htit">
                        <h4 class="custom-sub-title">{{ trans('front.description') }}</h4>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1 col-md-8 mb-30">
                    <div class="text">
                        <p class="custom-sub-title">{{ $work->content }}</p>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="item mt-30">
                        <h6 class="custom-sub-title">{{ trans('front.client') }}</h6>
                        <p class="custom-sub-title">{{ $work->client_name }}</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item mt-30">
                        <h6 class="custom-sub-title">{{ trans('front.duration') }}</h6>
                        <p class="custom-sub-title">{{ $work->duration_of_work }} {{ trans('front.durationDays') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item mt-30">
                        <h6 class="custom-sub-title">{{ trans('front.category') }}</h6>
                        <p class="custom-sub-title">{{ $work->tag->name }}</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item mt-30">
                        <h6 class="custom-sub-title">{{ trans('front.start date') }}</h6>
                        <p class="custom-sub-title">{{ $work->transaction_start_date }}</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item mt-30">
                        <h6 class="custom-sub-title">{{ trans('front.end date') }}</h6>
                        <p class="custom-sub-title">{{ $work->transaction_end_date }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Intro ==================== -->
    <!-- ==================== Start projdtal ==================== -->
    <section class="projdtal">
        <div class="justified-gallery">
            {{-- <livewire:image-gallery :model="$work" :collectionName="'works'" /> --}}
            @foreach ($images as $img)
            @php
                // $thumb = asset(getCachedImage($img->getUrl('blur')));
                $thumb = $img;
            @endphp

            <a href="{{ $img->getUrl() }}" class="gallery-item" wire:key="image-{{ $img->id }}">
                {{$thumb}}
            </a>
        @endforeach
        </div>
    </section>

    <!-- ==================== End projdtal ==================== -->
</x-front-layout>
