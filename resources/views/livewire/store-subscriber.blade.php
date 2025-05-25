<form class="newsletter-form" wire:submit.prevent="save">

    @if (session('success'))
        <span class="mb-2 d-block text-success">{{ session('success') }}</span>
    @endif

    
    <div class="d-flex mt-1">
        <input type="text" class="form-control" id="footer-email"
            placeholder="{{ trans('front.email') }}" wire:model.defer="email">
        
        <button type="submit" class="subscribe-btn" wire:click="save"><i class="fa-solid fa-paper-plane"></i></button> 
    </div>
</form>
