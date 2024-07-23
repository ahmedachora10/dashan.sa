<section class="tp-blog-3-area p-relative pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-blog-3-title-wrapper text-center mb-65">
                    <span class="tp-section-title-pre">{{ headline('vision')->title }}</span>
                    <h3 class="tp-section-title">{{headline('vision')->subTitle}}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($visions as $item)
            <div class="col-lg-4 col-md-6">
                <x-theme.card.blog :image="asset($item->thumbnail)"
                    :title="$item->title" />
            </div>
            @endforeach
        </div>
    </div>
</section>
