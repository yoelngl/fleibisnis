<form wire:submit.prevent="login" class="login">
    <p class="utf_row_form utf_form_wide_block" >
    <label for="email">
        <input type="email" class="input-text" wire:model="email" id="email" value="" placeholder="E-mail" />
    </label>
    </p>
    @error('email')
            <span class="text-danger">{{ $message }}</span>
    @enderror
    <p class="utf_row_form utf_form_wide_block">
    <label for="password">
        <input class="input-text" type="password" wire:model="password" id="password" placeholder="Password"/>
    </label>
    </p>
    @error('password')
            <span class="text-danger">{{ $message }}</span>
    @enderror
    <div class="utf_row_form utf_form_wide_block form_forgot_part margin-top-10"> <span class="lost_password fl_left"> <a id="forgot" href="javascript:void(0);">Forgot Password?</a> </span>
    <div class="checkboxes fl_right">
        <input id="remember-mes" type="checkbox" name="check">
        <label for="remember-mes">Remember Me</label>
    </div>
    </div>
    <br>
        <div wire:loading wire:target="login" >
            <img src="{{ asset('icons/loading.gif') }}" width="70px" alt="">
        </div>
        <button type="submit" wire:click="login" class="button border margin-top-10" wire:loading.remove>{{ trans('message.login') }}</button>
</form>

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#forgot').click(function(){
            $('#tabs').attr('class','');
            $('#tab1').attr('style',  'display:none');
            $('#tab2').attr('style',  'display:none');
            $('#tab3').attr('style','');
        });
    });
</script>
@endpush
