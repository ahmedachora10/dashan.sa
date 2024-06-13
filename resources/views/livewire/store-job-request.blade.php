<div class="row">

    @if (session('success'))
        <div class="col-12 mb-3">
            <div class="alert alert-primary">{{ session('success') }}</div>
        </div>
    @endif

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="text" wire:model.defer="form.name" name="form.name" :title="trans('table.columns.name')" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="text" wire:model.defer="form.email" name="form.email" :title="trans('table.columns.email')" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="number" wire:model.defer="form.phone" name="form.phone" :title="trans('table.columns.phone')" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="number" wire:model.defer="form.age" name="form.age" :title="trans('table.columns.age')" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="text" wire:model.defer="form.specialization" name="form.specialization"
            :title="trans('table.columns.specialization')" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="text" wire:model.defer="form.years_of_experience"
            name="form.years_of_experience" :title="trans('table.columns.years of experience')" />
    </div>

    <div class="col-12 mb-3">
        {{-- <x-dashboard.input-group type="text" wire:model.defer="form.excerpt" name="form.excerpt" :title="trans('table.columns.excerpt')" /> --}}
        <x-dashboard.label>{{ trans('table.columns.excerpt') }}</x-dashboard.label>
        <textarea wire:model.defer="form.excerpt" class="form-control" name="form.excerpt" cols="10" rows="6"></textarea>
        <x-dashboard.error field="form.excerpt" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        {{-- <x-dashboard.input-group type="text" wire:model.defer="form.job" name="form.job" :title="trans('table.columns.job')" /> --}}
        <x-dashboard.label>{{ trans('table.columns.job') }}</x-dashboard.label>
        <select name="job" id="job" class="form-control" wire:model.defer="form.job">
            @foreach ($jobs as $job)
                <option value="{{ $job->id }}">{{ $job->get_title }}</option>
            @endforeach
        </select>
        <x-dashboard.error field="form.job" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        {{-- <x-dashboard.input-group type="text" wire:model.defer="form.job_city" name="form.job_city"
            :title="trans('table.columns.job city')" /> --}}

        <x-dashboard.label>{{ trans('table.columns.job city') }}</x-dashboard.label>
        <select name="job_city" id="job_city" class="form-control" wire:model.defer="form.job_city">
            @foreach ($jobCities as $city)
                <option value="{{ $city->id }}">{{ $city->get_title }}</option>
            @endforeach
        </select>
        <x-dashboard.error field="form.job_city" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="file" wire:model.defer="form.cv" name="form.cv" :title="trans('table.columns.cv')" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="file" wire:model.defer="attachments" name="attachments" :title="trans('table.columns.attachments')"
            multiple />
    </div>

    <div class="col-12">
        <button type="button" wire:click="save" class="btn btn-primary">{{ trans('common.send') }}</button>
    </div>
</div>
