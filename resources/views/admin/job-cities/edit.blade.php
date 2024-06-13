<x-app-layout>

    <form action="{{ route('job-cities.update', $jobCity) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-dashboard.cards.sample column="col-12">

            <div class="row align-items-end">

                <div class="col-12 mb-3">
                    <x-dashboard.input-group type="text" :value="$jobCity->title" name="title" :title="trans('table.columns.title')" />
                </div>

                {{-- <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" :value="$jobCity->title_en" name="title_en" :title="trans('table.columns.title_en')" />
                </div> --}}

                <div class="col-12">
                    <x-dashboard.button type="submit" name="Save" class="btn-primary mt-3" />
                </div>
            </div>

        </x-dashboard.cards.sample>

    </form>

</x-app-layout>
