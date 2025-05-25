<x-app-layout>

    <x-theme.tab-list :route="route('sliders.update', $slider)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-md-6 col-12 mb-3">

                <div class="mb-3">
                    <img src="{{ asset('storage/'.$slider->image_ar) }}" alt="image" width="60" height="60" class="img-thumbnail">
                </div>

                <x-dashboard.input-group type="file" name="image_ar" :title="trans('table.columns.image')" />
                <x-size-notice key="slider" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.input-group type="text" :value="$slider->link" name="link" :title="trans('table.columns.link')" />
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <x-dashboard.input-group type="number" name="top" :value="$slider->styles['top'] ?? 0" :title="trans('table.columns.top')" />
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <x-dashboard.input-group type="number" name="right" :value="$slider->styles['right'] ?? 0" :title="trans('table.columns.right')" />
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <x-dashboard.input-group type="number" name="left" :value="$slider->styles['left'] ?? 0" :title="trans('table.columns.left')" />
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <x-dashboard.input-group type="number" name="bottom" :value="$slider->styles['bottom'] ?? 0" :title="trans('table.columns.bottom')" />
            </div>
        </x-slot:arForm>
    </x-theme.tab-list>
</x-app-layout>
