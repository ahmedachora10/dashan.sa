<x-app-layout>

<x-theme.tab-list :route="route('reviews.store')">
        <x-slot:arForm>

                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" name="name_ar" :title="trans('table.columns.name')" />
                </div>

                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" name="comment_ar" :title="trans('table.columns.comment')" />
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" name="rate" :title="trans('table.columns.rate')" />
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" name="status" :title="trans('table.columns.status')" />
                </div>
        </x-slot:arForm>
        <x-slot:enForm>
                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" name="name_en" :title="trans('table.columns.name')" />
                </div>

                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" name="comment_en" :title="trans('table.columns.comment')" />
                </div>
        </x-slot:enForm>
    </x-theme.tab-list>

</x-app-layout>
