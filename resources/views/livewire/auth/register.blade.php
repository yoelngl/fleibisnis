<form wire:submit.prevent="register" class="register">
    <p class="utf_row_form utf_form_wide_block">
        <label for="username">
            <input type="text" class="input-text" wire:model="username" id="username" value="" placeholder="Username"  />
        </label>
        @error('username')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </p>
    <p class="utf_row_form utf_form_wide_block">
    <label for="email">
        <input type="email" class="input-text" wire:model="email" id="email" value="" placeholder="Email"  />
    </label>
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    </p>
    <p class="utf_row_form utf_form_wide_block">
    <label for="password">
        <input class="input-text" type="password" wire:model="password" id="password" placeholder="Password"  />
    </label>
    </p>
    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <p class="utf_row_form utf_form_wide_block">
    <label for="password_confirmation">
        <input class="input-text" type="password" wire:model="password_confirmation" id="password_confirmation" placeholder="Confirm Password" />
    </label>
    </p>
    @error('password_confirmation')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <br>
    <div class="utf_row_form utf_form_wide_block form_forgot_part">
        <div class="checkboxes fl_right">
            <input id="remember-me" type="checkbox" wire:model="accept">
            <label for="remember-me">Dengan mendaftar, saya menyetujui
                                    Syarat & Ketentuan serta Kebijakan
                                    Privasi, termasuk menikmati berbagai
                                    manfaat saat mengunjungi
                                    FLEIBISNIS.com.
            </label>
        </div>
    </div>
    @error('accept')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <br>
    <div wire:loading wire:target="register" >
        <img src="{{ asset('icons/loading.gif') }}" width="70px" alt="">
    </div>
    <button type="submit" wire:click="register" class="button border margin-top-10" wire:loading.remove>{{ trans('message.register2') }}</button>
</form>
