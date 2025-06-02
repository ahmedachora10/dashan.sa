
@foreach ($images as $img)
        @php
            $thumb = asset(getCachedImage($img->getUrl('thumb')));
        @endphp

        <a href="{{ $thumb }}" class="gallery-item" wire:key="image-{{ $img->id }}">
            <img alt="" class="lazy" src="{{ $thumb }}" srcset="{{ $thumb }}" loading="lazy" />
            <div class="placeholder-glow">
                <span class="placeholder col-12 d-flex justify-content-center align-items-center" style="height:300px;">
                    <i class="fas fa-sync-alt fa-spin fa-2xl"></i>
                </span>
            </div>
        </a>
    @endforeach

@if($perPage < $model->getMedia($collectionName)->count())
    <div class="text-center mt-4" 
            x-data="{ shown: false }"
            x-intersect="shown = true; $wire.loadMore()"
            x-intersect:leave="shown = false"
            wire:loading.remove
            wire:target="loadMore">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">{{ trans('front.loading') }}...</span>
        </div>
    </div>
@endif