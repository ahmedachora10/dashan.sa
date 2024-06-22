<x-dashboard-layout>


    <form method="post" action="{{ route('settings.store') }}" class="form-horizontal" role="form"
        enctype="multipart/form-data">
        {!! csrf_field() !!}

        @if ($section)

        <x-dashboard.cards.sample column="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading mb-2 fs-5 fw-bold">
                    @if ($section['icon'] !== '')
                    <i class="{{ $section['icon'] }}"></i>
                    @endif
                    @if ($section['title'])
                    {{ trans('settings.' . strtolower($section['title'])) }}
                    @endif
                </div>

                @if ($section['desc'])
                <div class="panel-body">
                    <p class="text-muted">{{ trans('settings.' . strtolower($section['desc'])) }}</p>
                </div>
                @endif

                <div class="panel-body">
                    <div class="row">
                        @foreach ($section['elements'] as $field)
                        @includeIf('dashboard.settings.fields._' . $field['type'])
                        {{--
                        <x-admin.setting.field.text :field="$field" class="my-2 col-md-6 col-12" /> --}}
                        @endforeach
                    </div>
                </div>

            </div>
            <!-- end panel for {{ $section['title'] }} -->
        </x-dashboard.cards.sample>

        @endif

        <div class="row m-b-md">
            <div class="col-md-12">
                <button class="btn-primary btn">
                    {{ trans('settings.save') }}
                </button>
            </div>
        </div>
    </form>


</x-dashboard-layout>
