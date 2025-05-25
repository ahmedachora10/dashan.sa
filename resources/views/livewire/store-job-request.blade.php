<form wire:submit.prevent="save" class="row form-style-border">
    @if (session('success'))
        <div class="col-12 mb-3">
            <div class="alert alert-primary">{{ session('success') }}</div>
        </div>
    @endif

    <div class="col-sm-12">
        <div class="section-title">
            <h3 class="title custom-sub-title">{{ trans('front.contact information') }}</h3>
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <input class="form-control custom-sub-title" type="text" wire:model.defer="form.name" name="form.name" placeholder="{{trans('table.columns.name')}}" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <input class="form-control custom-sub-title" type="text" wire:model.defer="form.email" name="form.email" placeholder="{{trans('table.columns.email')}}" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <input class="form-control custom-sub-title" type="text" wire:model.defer="form.phone" name="form.phone" placeholder="{{trans('table.columns.phone')}}" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <input class="form-control custom-sub-title" type="text" wire:model.defer="form.age" name="form.age" placeholder="{{trans('table.columns.age')}}" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <input class="form-control custom-sub-title" type="text" wire:model.defer="form.specialization" name="form.specialization"
            placeholder="{{trans('table.columns.specialization')}}" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <input class="form-control custom-sub-title" type="text" wire:model.defer="form.years_of_experience"
            name="form.years_of_experience" placeholder="{{trans('table.columns.years of experience')}}" />
    </div>

    <div class="col-12 mb-3">
        <textarea class="form-control custom-sub-title"  wire:model.defer="form.excerpt" placeholder="{{trans('table.columns.excerpt')}}" name="form.excerpt" cols="10" rows="6">
           
        </textarea>
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-theme.form.input-group type="file" wire:model.defer="form.cv" name="form.cv" :title="trans('table.columns.cv')" />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <x-theme.form.input-group type="file" wire:model.defer="attachments" name="attachments" :title="trans('table.columns.attachments')"
            multiple />
    </div>

    <div class="col-xl-6 col-lg-6 mb-3">
        <button wire:click="save" class="btn-curve btn-color"><span class="custom-sub-title">{{trans('send')}}</span></button>
    </div>
</form>
