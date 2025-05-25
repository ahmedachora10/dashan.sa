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
    <div class="col-md-6 col-12 mb-3">
        
        <input type="text" wire:model.defer="form.name" name="form.name" class="form-control custom-sub-title" placeholder="{{trans('table.columns.name')}}" required>
        
    </div>
    <div class="col-md-6 col-12 mb-3">
        
        <input type="text" wire:model.defer="form.phone" name="form.phone" class="form-control custom-sub-title" placeholder="{{trans('table.columns.phone')}}" required>
        
    </div>
    <div class="col-md-8 col-12 mb-3">
        
        <input type="text" wire:model.defer="form.email" name="form.email" class="form-control custom-sub-title" placeholder="{{trans('front.email')}}" required>
        
    </div>
    <div class="col-12 mb-3">
        
        <textarea  wire:model.defer="form.description"  name="form.description" class="form-control custom-sub-title" placeholder="{{trans('table.columns.description')}}" required></textarea>
        
    </div>
    <button wire:click="save" class="btn col-md-6 col-12 mb-3 custom-sub-title">{{trans('send')}} <svg fill="#ffffff" width="18px" height="18px" viewBox="0 0 32 32" version="1.1">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier"><path d="M30.713 16.090c0.009-0.041 0.014-0.087 0.014-0.135 0-0.004-0-0.008-0-0.011v0.001c-0.006-0.184-0.079-0.35-0.196-0.475l0 0-10-10c-0.136-0.135-0.323-0.218-0.529-0.218-0.415 0-0.751 0.336-0.751 0.751 0 0.206 0.083 0.393 0.218 0.528l8.721 8.72h-26.189c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h26.188l-8.72 8.719c-0.136 0.136-0.22 0.324-0.22 0.531 0 0.415 0.336 0.751 0.751 0.751 0.207 0 0.395-0.084 0.531-0.22l10-10.001c0.025-0.026 0.017-0.064 0.038-0.093 0.040-0.052 0.098-0.088 0.124-0.151 0.013-0.050 0.020-0.108 0.020-0.167 0-0.011-0-0.021-0.001-0.032l0 0.002z"></path></g>
          </svg></button>
</form>