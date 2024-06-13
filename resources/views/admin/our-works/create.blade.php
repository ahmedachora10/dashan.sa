<x-app-layout>

    <form action="{{ route('our-works.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <x-dashboard.cards.sample column="col-12">

            <div class="row">

                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="file" name="image" :title="trans('table.columns.image')" />
                    <x-size-notice key="our_special" />
                </div>

                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" name="title" :title="trans('table.columns.title')" />
                </div>
                {{--
                <div class="col-12 mb-3">
                    <x-dashboard.input-group type="text" name="description" :title="trans('table.columns.description')" />
                </div> --}}

                <div class="col-12">
                    <x-dashboard.button type="submit" name="حفظ" class="btn-primary mt-3" />
                </div>
            </div>

        </x-dashboard.cards.sample>

    </form>

</x-app-layout>
