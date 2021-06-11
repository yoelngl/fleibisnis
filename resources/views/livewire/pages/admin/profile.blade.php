@section('title')
{{ trans('message.my-profile') }}
@endsection

<div class="utf_dashboard_content">
    <div id="titlebar" class="dashboard_gradient">
      <div class="row">
        <div class="col-md-12">
          <h2>{{ trans('message.my-profile') }}</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="index_1.html">Home</a></li>
              <li>{{ trans('message.my-profile') }}</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="utf_dashboard_list_box margin-top-0">
          <h4 class="gray"><i class="sl sl-icon-user"></i> Profile Details</h4>
          <form wire:submit.prevent="register">
            <div class="utf_dashboard_list_box-static">
                <div class="edit-profile-photo"> <img src="images/user-avatar.jpg" alt="">
                <div class="change-photo-btn">
                    <div class="photoUpload"> <span><i class="fa fa-upload"></i> Upload Photo</span>
                    <input type="file" class="upload" />
                    </div>
                </div>
                </div>
                <div class="my-profile">
                <div class="row with-forms">
                    <div class="col-md-6">
                        <label>{{ trans('message.full-name') }}</label>
                        <input type="text" wire:model="fullname" class="input-text" wire:model="fullname" placeholder="Alex Daniel" value="">
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('message.phone-number') }}</label>
                        <input type="text" wire:model="phone_number" class="input-text" placeholder="08xx-xxxx-xxxx" value="">
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('message.email-bussines') }}</label>
                        <input type="text" wire:model="email_bussines" class="input-text" placeholder="test@example.com" value="">
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('message.job-title') }}</label>
                        <input type="text" wire:model="job_title" class="input-text" placeholder="Account Manager" value="">
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('message.city') }}</label>
                        <input type="text" wire:model="city" class="input-text" placeholder="Jakarta" value="">
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('message.country') }}</label>
                        <input type="text" wire:model="country" class="input-text" placeholder="Indonesia" value="">
                    </div>
                    <div class="col-md-4">
                        <label>{{ trans('message.why-register') }}</label>
                        <select wire:model="why-register" class="utf_chosen_select_single">
                            <option value="" disabled>Choose your option</option>
                            @foreach($why as $item)
                                <option value="{{ $item }}">{{ $item['value'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label>{{ trans('message.address') }}</label>
                        <textarea wire:model="address" cols="30" rows="10"></textarea>
                    </div>
                    </div>
                </div>
                <button class="button preview btn_center_item margin-top-15">{{ trans('message.submit') }}</button>
            </div>
          </form>
        </div>
      </div>
      @include('layouts.admin.footer')
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function (){
        @include('vendor.helpers')
    });


</script>
@endpush
