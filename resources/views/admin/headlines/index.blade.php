<x-app-layout>
    <div class="row">
        @foreach ($sections as $item)
            @php
                $section = 'front.' . $item->section;
            @endphp
            <div class="col-md-6 col-12">
                <h6 class="mt-4"> {{ trans($section) }} </h6>
                <div class="nav-align-top mb-3">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="headline-content-{{ $item->id }}" role="tabpanel">
                            <form action="{{ route('headlines.update', $item) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <x-dashboard.input-group type="text" name="title" :value="$item->title"
                                            :title="trans('table.columns.title')" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-dashboard.input-group type="text" name="subtitle" :value="$item->subtitle"
                                            :title="trans('table.columns.subtitle')" />
                                    </div>
                                </div>
                                <div class="pt-4">
                                    <button type="submit"
                                        class="btn btn-primary me-sm-3 me-1">{{ trans('common.save') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
