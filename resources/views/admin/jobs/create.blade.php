<x-app-layout>
    <x-theme.tab-list :route="route('jobs.store')">
        <x-slot:arForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_ar" :title="trans('table.columns.title')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="location_ar" :title="trans('table.columns.location')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="type_ar" :title="trans('table.columns.type')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="code" :title="trans('table.columns.code')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="experience_ar" :title="trans('table.columns.experience')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="qualifications_ar" :title="trans('table.columns.qualifications')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area name="responsibilities_ar" cols="30" rows="10" :title="trans('table.columns.responsibilities')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area name="description_ar" cols="30" rows="10" :title="trans('table.columns.description')" />
            </div>
        </x-slot:arForm>

        <x-slot:enForm>
        <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_en" :title="trans('table.columns.title')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="location_en" :title="trans('table.columns.location')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="type_en" :title="trans('table.columns.type')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="experience_en" :title="trans('table.columns.experience')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="qualifications_en" :title="trans('table.columns.qualifications')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area name="responsibilities_en" cols="30" rows="10" :title="trans('table.columns.responsibilities')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area name="description_en" cols="30" rows="10" :title="trans('table.columns.description')" />
            </div>

        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
