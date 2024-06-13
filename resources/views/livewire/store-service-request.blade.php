<div class="row" style="flex-direction: row !important">

    @if (session('success'))
        <div class="col-12 mb-3">
            <div class="alert alert-primary">{{ session('success') }}</div>
        </div>
    @endif

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="text" wire:model.defer="form.name" name="form.name" title="الاسم رباعي" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="number" wire:model.defer="form.phone" name="form.phone" :title="trans('table.columns.phone')" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="text" wire:model.defer="form.location" name="form.location" title="الموقع" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="text" wire:model.defer="form.city" name="form.city" :title="trans('table.columns.city')" />
    </div>

    <div class="col-12 mb-3">
        <x-dashboard.input-group type="file" wire:model.defer="form.image" name="form.image"
            title="صورة خارطة للمشروع المطلوب" />
    </div>

    <div class="col-12 mb-3">
        <x-dashboard.label>وصف الطلب او المشروع</x-dashboard.label>
        <textarea wire:model.defer="form.description" class="form-control" name="form.description" cols="10"
            rows="6"></textarea>
        <x-dashboard.error field="form.description" />
    </div>

    <div class="col-12">
        <button type="button" wire:click="save" class="btn btn-primary">{{ trans('common.send') }}</button>
    </div>
</div>
