<section>

    <x-dashboard.headline :title="trans('sidebar.service requests')" />

    <x-dashboard.tables.table1 :columns="['service', 'name', 'phone', 'location', 'city', 'image', 'description']">

        {{-- <x-slot:title>
            <x-dashboard.input type="search" name="search" wire:model.live.debounce.250ms="search"
                placeholder="{{ trans('table.columns.search') }}" />
        </x-slot:title> --}}

        @forelse ($requests as $item)
            <tr wire:loading.class="opacity-50">
                <td>{{ $item->id }}</td>
                <td>{{ $item->service->title }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->city }}</td>

                <td><a href="{{ asset($item->thumbnail) }}" target="_blank"
                        class="btn text-danger btn-outline-danger btn-xs fw-bold">
                        <i class="bx bx-image me-1"></i>
                        {{ trans('show') }}</a></td>

                <td><a href="#" class="btn text-primary btn-outline-primary btn-xs fw-bold"
                        wire:click="readMore({{ $item }})">
                        <i class="bx bx-show me-1"></i>
                        {{ trans('show') }}</a></td>
                <td>
                    {{-- <x-dashboard.actions.container> --}}
                    <x-dashboard.actions.delete wire:click="delete({{ $item }})" text=""
                        :livewire="true" />
                    {{-- </x-dashboard.actions.container> --}}
                </td>
            </tr>
        @empty
            <tr>
                <td>{{ trans('table.empty') }}</td>
            </tr>
        @endforelse
    </x-dashboard.tables.table1>

    <div class="mt-4">
        {{ $requests->links() }}
    </div>

    <x-dashboard.modals.modal1 id="showMessage">
        <div class="col-12">
            {{ $content }}
        </div>
    </x-dashboard.modals.modal1>


</section>
