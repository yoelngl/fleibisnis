<div>
    <form wire:submit.prevent="forgot" class="login">
        <p class="utf_row_form utf_form_wide_block" >
        <label for="email">
            <input type="email" class="input-text" wire:model="email" id="email" value="" placeholder="E-mail" />
        </label>
        </p>
            <div wire:loading wire:target="forgot" >
                <img src="{{ asset('icons/loading.gif') }}" width="70px" alt="">
            </div>
            <button type="submit" wire:click="forgot" class="button border margin-top-10" wire:loading.remove>Forgot Password</button>
    </form>
</div>
