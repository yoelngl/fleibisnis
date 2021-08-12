<div class="col-md-4 col-sm-5">
    <div class="contact-form-action">
        <form wire:submit.prevent="subscribe">
            <span class="la la-envelope-o"></span>
            <input class="form-control" wire:model="email" type="email" placeholder="Enter your email" >
            <button class="utf_theme_btn" type="submit">Subscribe</button>
        </form>
        @error('email') <small style="color:white;">{{ $message }}</small> @enderror
    </div>
</div>
