<x-app-layout>
    <x-theme.tab-list :route="route('jobs.update', $job)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_ar" :value="$job->title_ar" :title="trans('table.columns.title')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="location_ar" :value="$job->location_ar" :title="trans('table.columns.location')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="type_ar" :value="$job->type_ar" :title="trans('table.columns.type')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="code" :value="$job->code" :title="trans('table.columns.code')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="experience_ar" :value="$job->experience_ar" :title="trans('table.columns.experience')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="qualifications_ar" :value="$job->qualifications_ar" :title="trans('table.columns.qualifications')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area name="responsibilities_ar" cols="30" rows="10" :value="$job->responsibilities_ar" :title="trans('table.columns.responsibilities')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area name="description_ar" cols="30" rows="10" :value="$job->description_ar" :title="trans('table.columns.description')" />
            </div>
        </x-slot:arForm>

        <x-slot:enForm>
            @method('PUT')
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_en" :value="$job->title_en" :title="trans('table.columns.title')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="location_en" :value="$job->location_en" :title="trans('table.columns.location')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="type_en" :value="$job->type_en" :title="trans('table.columns.type')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="experience_en" :value="$job->experience_en" :title="trans('table.columns.experience')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="qualifications_en" :value="$job->qualifications_en" :title="trans('table.columns.qualifications')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area name="responsibilities_en" cols="30" rows="10" :value="$job->responsibilities_en" :title="trans('table.columns.responsibilities')" />
            </div>
            <div class="col-12 mb-3">
                <x-dashboard.text-area name="description_en" cols="30" rows="10" :value="$job->description_en" :title="trans('table.columns.description')" />
            </div>

        </x-slot:enForm>
    </x-theme.tab-list>

</x-app-layout>
