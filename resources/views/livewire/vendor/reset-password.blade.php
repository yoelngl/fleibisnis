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
                <div class="row with-forms">
                    <div class="col-md-4">
                        <label>Email</label>
                        <input type="email" class="input-text" wire:model="email" placeholder="test@example.com" value="{{ request()->email }}">
                    </div>
                    <div class="col-md-4">
                        <label>New Password</label>
                        <input type="text" class="input-text" name="password" placeholder="*********" value="">
                    </div>
                    <div class="col-md-4">
                        <label>Confirm New Password</label>
                        <input type="text" class="input-text" name="password" placeholder="*********" value="">
                    </div>
                    <div class="col-md-12">
                        <button class="button btn_center_item margin-top-15">Change Password</button>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
