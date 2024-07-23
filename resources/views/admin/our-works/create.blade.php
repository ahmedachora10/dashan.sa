<x-app-layout>

    <x-theme.tab-list :route="route('our-works.store')">
        <x-slot:arForm>
            <div class="col-12 mb-3">
                <x-dashboard.input-group type="file" name="images[]" multiple :title="trans('table.columns.image')" />
                <x-size-notice key="our_special" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="client_name_ar" :title="trans('table.columns.client name')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="description_ar" :title="trans('table.columns.description')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="date" name="transaction_start_date" :title="trans('table.columns.transaction start date')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="date" name="transaction_end_date" :title="trans('table.columns.transaction end date')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.input-group type="number" name="duration_of_work" :title="trans('table.columns.duration of work')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area name="content_ar" cols="30" rows="10" :title="trans('table.columns.content')" />
            </div>

        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="client_name_en" :title="trans('table.columns.client name')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="description_en" :title="trans('table.columns.description')" />
            </div>

            <div class="col-12 mb-3">
                <x-dashboard.text-area name="content_en" cols="30" rows="10" :title="trans('table.columns.content')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>



</x-app-layout>
