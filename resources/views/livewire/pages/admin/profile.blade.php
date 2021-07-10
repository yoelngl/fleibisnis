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
          <form wire:submit.prevent="{{ isset($edit) ? 'update("'.$edit['user_id'].'")' : 'register' }}">
            <div class="utf_dashboard_list_box-static">
                <div class="edit-profile-photo">
                    @if(empty(!$images))
                        <img src="{{ $images->temporaryUrl() }}" alt="">
                    @elseif(isset($edit['images']))
                        <img src="{{ asset('storage/'.$edit['images']) }}" alt="">
                    @else
                        <img src="{{asset('images/user.png') }}" alt="">
                    @endif
                <div class="change-photo-btn">
                    <div class="photoUpload"> <span><i class="fa fa-upload"></i> Upload Photo</span>
                    <input type="file" wire:model="images" class="upload" />
                    </div>
                </div>
                </div>
                <div class="my-profile">
                <div class="row with-forms">
                    <div class="col-md-6">
                        <label>{{ trans('message.full-name') }}</label>
                        <input type="text" wire:model="fullname" class="input-text" wire:model="fullname" placeholder="Alex Daniel" value="">
                        @error('fullname') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('message.email-bussines') }}</label>
                        <input type="email" wire:model="email_bussiness" class="input-text" placeholder="test@example.coom" value="">
                        @error('email_bussiness') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('message.phone-number') }}</label>
                        <input type="text" wire:model="phone_number" class="input-text" placeholder="08xx-xxxx-xxxx" value="">
                        @error('phone_number') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('message.job-title') }}</label>
                        <input type="text" wire:model="job_title" class="input-text" placeholder="Account Manager" value="">
                        @error('job_title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('message.city') }}</label>
                        <input type="text" wire:model="city" class="input-text" placeholder="Jakarta" value="">
                        @error('city') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('message.country') }}</label>
                        <input type="text" wire:model="country" class="input-text" placeholder="Indonesia" value="">
                        @error('country') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-md-12">
                        <label>{{ trans('message.address') }}</label>
                        <textarea wire:model="address" cols="30" rows="10"></textarea>
                        @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    </div>
                </div>
                <div wire:loading class="text-center" wire:target="{{ isset($edit) ? 'update("'.$edit->user_id.'")' : 'register' }}" >
                    <img src="{{ asset('icons/loading.gif') }}"  alt="" width="60px">
                </div>
                <div wire:loading.remove>
                    <button class="button preview  margin-top-15" wire:click="{{ isset($edit) ? 'update("'.$edit->user_id.'")' : 'register' }}" wire:loading.attr="hidden">{{ trans('message.submit') }}</button>
                </div>
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
