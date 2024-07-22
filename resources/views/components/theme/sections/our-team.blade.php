<!-- team area start -->
<section class="tp-team-7-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-team-7-title-wrapper text-center mb-50">
                    <span class="tp-section-title-pre-2">{{headline('our theam')->subTitle}}</span>
                    <h3 class="tp-section-title">{{headline('our theam')->title}}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($members as $item)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <x-theme.card.member :member="$item" />
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- team area end -->
