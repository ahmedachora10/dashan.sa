<x-app-layout>:

        <x-theme.tab-list :route="route('why-us.update', $model)">
            <x-slot:arForm>
                @method('PUT')
                <div class="col-12 mb-3">
                    {{-- <x-dashboard.input-group type="text" name="description_ar" :value="$model?->description_ar"
                        :title="trans('table.columns.description')" /> --}}
                    <livewire:add-properties fieldName="properties_ar" :properties="$model->properties_ar ?? []" />
                </div>
            </x-slot:arForm>
            <x-slot:enForm>
                <div class="col-12 mb-3">
                    {{-- <x-dashboard.input-group type="text" name="description_en" :value="$model?->description_en"
                        :title="trans('table.columns.description')" /> --}}
                    <livewire:add-properties fieldName="properties_en" :properties="$model->properties_en ?? []" />
                </div>
            </x-slot:enForm>
        </x-theme.tab-list>
</x-app-layout>
