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
                  <li><a href="index_1.html">Home</a></li>
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
              <form id="contactform">
                <div class="row">
                  <div class="col-md-6">
                      <input name="name" type="text" placeholder="{{ trans('message.first-name') }}" required />
                  </div>
                  <div class="col-md-6">
                      <input name="name" type="text" placeholder="{{ trans('message.last-name') }}" required />
                  </div>
                  <div class="col-md-6">
                      <input name="email" type="email" placeholder="{{ trans('message.email') }}" required />
                  </div>
                  <div class="col-md-6">
                      <input name="subject" type="text" placeholder="{{ trans('message.subject') }}" required />
                  </div>
                  <div class="col-md-12">
                      <textarea name="comments" cols="40" rows="2" id="comments" placeholder="{{ trans('message.message-desc') }}" required></textarea>
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
                    <li><strong>{{ trans('message.phone') }}: </strong> <span>+ 001 245 0154</span></li>
                    <li><strong>{{ trans('message.web') }}: </strong> <span><a href="#">www.sitename.com</a></span></li>
                    <li><strong>{{ trans('message.email') }}: </strong> <span><a href="mailto:info@example.com">info@example.com</a></span></li>
                    <li><strong>{{ trans('message.address') }}: </strong> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</span></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
@include('layouts.footer')
