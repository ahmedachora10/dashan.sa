<x-app-layout>

    <x-theme.tab-list :route="route('statistics.update', $statistic)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="title_ar" :value="$statistic->title_ar" :title="trans('table.columns.title')" />
            </div>

            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="count" :value="$statistic->count" :title="trans('table.columns.statistic')" />
            </div>
        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" :value="$statistic->title_en" name="title_en"
                    :title="trans('table.columns.title')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
