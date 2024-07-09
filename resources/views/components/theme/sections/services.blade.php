<!-- service area start -->
<section class="tp-service-3-area p-relative pt-120 pb-90">
    <div class="container">
        <div class="row">
            @foreach ($services as $service)
            <div class="col-xl-3 col-sm-6">
                <x-theme.card.service
                    :title="$service->title"
                    :description="$service->description"
                    :image="$service->thumbnail"
                    link="#"
                />
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- service area end -->
