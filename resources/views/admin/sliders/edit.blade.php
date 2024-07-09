<x-app-layout>

    <x-theme.tab-list :route="route('sliders.update', $slider)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-md-6 col-12 mb-3">

                <div class="mb-3">
                    <img src="{{ asset($slider->thumbnail) }}" alt="image" width="60" height="60" class="img-thumbnail">
                </div>

                <x-dashboard.input-group type="file" name="image" :title="trans('table.columns.image')" />
                <x-size-notice key="slider" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" :value="$slider->title_ar" name="title_ar" :title="trans('table.columns.title')" />
            </div>
        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" :value="$slider->title_en" name="title_en" :title="trans('table.columns.title')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
