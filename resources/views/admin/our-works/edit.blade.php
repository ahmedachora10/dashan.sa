<x-app-layout>

    <x-theme.tab-list :route="route('our-works.update', $ourWork)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-12 mb-3">
                <div class="row">
                    @foreach ($images as $img)
                        <div class=" col-auto mx-2 position-relative mb-2">
                            <img width="80" height="80" src="{{$img->getUrl()}}" alt="">
                            <a data-id="{{$img->id}}" href="#!" class="position-absolute remove-img" style="top: -10px;right: 7px;">
                                <i class="fas fa-trash text-danger"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
                <x-dashboard.input-group type="file" name="images" multiple :title="trans('table.columns.image')" />
                <x-size-notice key="our_special" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="client_name_ar" :value="$ourWork->client_name_ar"
                    :title="trans('table.columns.client name')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="description_ar" :value="$ourWork->description_ar"
                    :title="trans('table.columns.description')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="date" name="transaction_start_date" :value="$ourWork->transaction_start_date"
                    :title="trans('table.columns.start date')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="date" name="transaction_end_date" :value="$ourWork->transaction_end_date"
                    :title="trans('table.columns.end date')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.input-group type="number" name="duration_of_work" :value="$ourWork->duration_of_work"
                    :title="trans('table.columns.duration of work')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area name="content_ar" :value="$ourWork->content_ar" cols="30" rows="10" :title="trans('table.columns.content')" />
            </div>

        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="client_name_en" :value="$ourWork->client_name_en"
                    :title="trans('table.columns.client name')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="description_en" :value="$ourWork->description_en"
                    :title="trans('table.columns.description')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area name="content_en" :value="$ourWork->content_ar" cols="30" rows="10"
                    :title="trans('table.columns.content')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>

    @push('scripts')
        <script>
            const images = $('.remove-img');

            if(images.length) {
                images.each(function () {
                    $(this).click(function () {
                        const imgId = $(this).attr('data-id');

                        $.ajax({
                            url: '{{route("our-works.media.remove")}}',
                            method: 'POST',
                            data: {id:imgId},
                            contentType: 'json',
                            headers: {
                                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {

                            }
                        });
                    });
                });
            }
        </script>
    @endpush

</x-app-layout>
