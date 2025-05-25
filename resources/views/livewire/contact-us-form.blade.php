<form wire:submit.prevent="save" id="contact-form">

  <div class="messages">
    @if (session('success'))
    <div class="col-12">
      <span class="d-block mb-3 alert bg-primary text-white">{{ session('success') }}</span>
    </div>
  @endif
  </div>

  <div class="controls">

    <div class="form-group" style="margin-bottom: 8px;">
      <input id="form_name" class="custom-sub-title" type="text" wire:model.defer="name" name="name"
        placeholder="{{ trans('table.columns.name') }}" required="required">
    </div>

    <div class="form-group" style="margin-bottom: 8px;">
      <input id="form_email" class="custom-sub-title" type="text" wire:model.defer="email" name="email" placeholder="{{ trans('front.email') }}"
        aria-label="Email" required="required">
    </div>

    <div class="form-group" style="margin-bottom: 8px;">
      <input id="form_email" class="custom-sub-title" type="text" wire:model.defer="phone" name="phone" placeholder="{{ trans('front.your phone') }}"
        aria-label="Email" required="required">
    </div>

    <div class="form-group" style="margin-bottom: 8px;">
      <textarea id="form_message" class="custom-sub-title" wire:model.defer="message" name="message"
        placeholder="{{trans('front.Write Message')}}" rows="4" required="required"></textarea>
    </div>

    <button wire:click="save" class="btn-curve btn-color"><span class="custom-sub-title">{{trans('common.send')}}</span></button>
  </div>
</form>