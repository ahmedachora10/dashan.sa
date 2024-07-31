<x-app-layout>:
    <x-theme.tab-list :route="route('why-us.update', $model)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-12 mb-3">
                <livewire:add-properties fieldName="properties_ar" :properties="$model->properties_ar ?? []" />
            </div>
        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-12 mb-3">
                <livewire:add-properties fieldName="properties_en" :properties="$model->properties_en ?? []" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>

    <x-dashboard.tables.table1 :createAction="route('certificates.create')"
        :columns="['image', 'title']">

        @forelse ($certificates as $item)
        <tr wire:loading.class="opacity-50">
            <td>{{ $item->id }}</td>
            <td><img src="{{ $item->thumbnail }}" alt="logo" width="40" height="40" class="rounded-circle"></td>
            <td>{{ $item->title }}</td>
            <td>
                <x-dashboard.actions.container>
                    <x-dashboard.actions.edit :href="route('certificates.edit', $item->id)">{{ trans('common.edit') }}
                    </x-dashboard.actions.edit>
                    <x-dashboard.actions.delete :route="route('certificates.destroy', $item)" />
                </x-dashboard.actions.container>
            </td>
        </tr>
        @empty
        <tr>
            <td>{{ trans('table.empty') }}</td>
        </tr>
        @endforelse
    </x-dashboard.tables.table1>
</x-app-layout>
