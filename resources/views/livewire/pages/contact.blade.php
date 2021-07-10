@section('title')
Contact Us
@endsection
<div>
    <div id="titlebar" data-color="#0a345a" class="gradient margin-bottom-70" style="background-image: url({{ isset($banner) ? asset('storage/'.$banner->image) : '../../images/page-title.jpg' }}">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Contact Us</h2>
              <nav id="breadcrumbs">
                <ul>
                  <li><a href="{{ route('home') }}">Home</a></li>
                  <li>Contact Us</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>

      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <section id="contact" class="margin-bottom-70">
              <h4><i class="sl sl-icon-phone"></i>{{ trans('message.contact-form') }}</h4>
              <form id="contactform" wire:submit.prevent="contact">
                <div class="row">
                  <div class="col-md-12">
                      <input wire:model.lazy="name" type="text" placeholder="{{ trans('message.fullname') }}" required />
                      @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                  </div>

                  <div class="col-md-6">
                      <input wire:model.lazy="email" type="email" placeholder="{{ trans('message.email') }}" required />
                      @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                  </div>
                  <div class="col-md-6">
                      <input wire:model.lazy="subject" type="text" placeholder="{{ trans('message.subject') }}" required />
                      @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                  </div>
                  <div class="col-md-12">
                      <textarea wire:model.lazy="comments" cols="40" rows="2" id="comments" placeholder="{{ trans('message.message-desc') }}" required></textarea>
                      @error('comments') <small class="text-danger">{{ $message }}</small> @enderror
                  </div>
                </div>
                <input type="submit" class="submit button" id="submit" value="{{ trans('message.submit') }}" />
              </form>
            </section>
          </div>

          <div class="col-md-4">
            <div class="utf_box_widget margin-bottom-70">
                <h3><i class="sl sl-icon-map"></i> {{ trans('message.office-address') }}</h3>
                <div class="utf_sidebar_textbox">
                  <ul class="utf_contact_detail">
                    <li><strong>{{ trans('message.phone') }}: </strong> <span><a href="https://wa.me/{{ isset($footer->phone) ? $footer->phone : '#' }}">{{ isset($footer->phone) ? $footer->phone : '+62-8xx-xxxx-xxxx' }}</a></span></li>
                    <li><strong>{{ trans('message.web') }}: <a target="_blank" href="{{ isset($footer->website) ? $footer->website : 'www.google.com' }}">{{ isset($footer->website) ? $footer->website : 'www.google.com' }}</a></strong></li>
                    <li><strong>{{ trans('message.email') }}: </strong> <span><a href="mailto:{{ isset($footer->email) ? $footer->email : 'email@gmail.com' }}">{{ isset($footer->email) ? $footer->email : 'email@gmail.com' }}</a></span></li>
                    <li><strong>{{ trans('message.address') }}: </strong> <span>{{ isset($footer->address) ? $footer->address : 'Indonesia' }}</span></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
@include('layouts.footer')

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function (){
            @include('vendor.helpers')
        });
    </script>
@endpush
