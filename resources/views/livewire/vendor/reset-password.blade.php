@section('title')
Reset Password
@endsection

    <div class="utf_dashboard_content">
      <div id="titlebar" class="dashboard_gradient">
        <div class="row">
          <div class="col-md-12">
            <h2>Reset Password</h2>
            <nav id="breadcrumbs">
              <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Reset Password</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="utf_dashboard_list_box margin-top-0">
            <h4 class="gray"><i class="sl sl-icon-key"></i> Reset Password</h4>
            <div class="utf_dashboard_list_box-static">
              <div class="my-profile">
                <form wire:submit.prevent="resetPassword">
                    <div class="row with-forms">
                        <div class="col-md-4">
                            <label>Email</label>
                            <input type="email" class="input-text" wire:model.defer="email" placeholder="test@example.com" value="{{ request()->email }}">
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>
                        <div class="col-md-4">
                            <label>New Password</label>
                            <input type="password" class="input-text" wire:model.defer="password" placeholder="*********" value="">
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-4">
                            <label>Confirm New Password</label>
                            <input type="password" class="input-text" wire:model.defer="password_confirmation" placeholder="*********" value="">
                            @error('password_confirmation') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>
                        <input type="hidden" name="token">
                    </div>
                    <div wire:loading class="text-center" wire:target="resetPassword" >
                        <img src="{{ asset('icons/loading.gif') }}"  alt="" width="60px">
                    </div>
                    <div wire:loading.remove>
                        <button class="button preview  margin-top-15" wire:click="resetPassword" wire:loading.attr="hidden">Reset Password</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
