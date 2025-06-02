<div>
    <div class="justified-gallery">
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
    </div>

    @if($perPage < $model->getMedia($collectionName)->count())
        <div class="text-center mt-4" 
             x-data="{ shown: false }"
             x-intersect="shown = true"
             x-intersect:leave="shown = false"
             x-show="shown"
             wire:loading.remove
             wire:target="loadMore">
            <button wire:click="loadMore" class="btn btn-primary">
                {{ trans('front.load more') }}
            </button>
        </div>
    @endif

    <div wire:loading wire:target="loadMore" class="text-center mt-4">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">{{ trans('front.loading') }}...</span>
        </div>
    </div>
</div> 