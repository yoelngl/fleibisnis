<section class="utf_cta_area_item utf_cta_area2_block">
    <?php $footer = App\Models\Footer::first(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf_subscribe_block clearfix">
                    <div class="col-md-8 col-sm-7">
                        <div class="section-heading">
                            <h2 class="utf_sec_title_item utf_sec_title_item2">{{ trans('message.subscribe') }}</h2>
                            <p class="utf_sec_meta">
                                {{ trans('message.subscribe-desc') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5">
                        <div class="contact-form-action">
                            <form method="post">
                                <span class="la la-envelope-o"></span>
                                <input class="form-control" type="email" placeholder="Enter your email" required="">
                                <button class="utf_theme_btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

  <!-- Footer -->
  <div id="footer" class="footer_sticky_part">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-6">
            <h4>{{ trans('message.social-media') }}</h4>
            <ul class="social_footer_link">
              <li><a href="{{ isset($footer->instagram) ? $footer->instagram : 'javascript:void(0)' }}" target="_blank">Instagram</a></li>
              <li><a href="{{ isset($footer->facebook) ? $footer->facebook : 'javascript:void(0)' }}" target="_blank">Facebook</a></li>
              <li><a href="{{ isset($footer->twitter) ? $footer->twitter : 'javascript:void(0)' }}" target="_blank">Twitter</a></li>
              <li><a href="{{ isset($footer->linkedin) ? $footer->linkedin : 'javascript:void(0)' }}" target="_blank">LinkedIn</a></li>
              <li><a href="{{ isset($footer->youtube) ? $footer->youtube : 'javascript:void(0)' }}" target="_blank">YouTube</a></li>
            </ul>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-6">
            <h4>{{ trans('message.information') }}</h4>
            <ul class="social_footer_link">
              <li><a href="#">{{ trans('message.about-us') }}</a></li>
              <li><a href="#">{{ trans('message.our-partner') }}</a></li>
              <li><a href="#">{{ trans('message.user-terms') }}</a></li>
            </ul>
          </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
        <h4>Menu</h4>
        <ul class="social_footer_link">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('today-news') }}">Today News</a></li>
            <li><a href="{{ route('expert') }}">Ask the Experts</a></li>
            <li><a href="{{ route('events') }}">Events</a></li>
            <li><a href="{{ route('franchise-directory') }}">Franchise Directory</a></li>
            <li><a href="{{ route('retail-directory') }}">Retail Directory</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
            <h4>{{ trans('message.language') }}</h4>
            <ul class="social_footer_link">
              <li><a href="{{ url('locale/en') }}">EN</a></li>
              <li><a href="{{ url('locale/id') }}">ID</a></li>
            </ul>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
          <h4>{{ trans('message.about-flei') }}</h4>
          <p>{{ isset($footer->about) ? $footer->about : trans('message.about-flei-desc') }}</p>
          <ul class="utf_social_icon rounded">
            <li><a class="facebook" href="{{ isset($footer->facebook) ? $footer->facebook : 'javascript:void(0)' }}" target="_blank"><i class="icon-facebook"></i></a></li>
            <li><a class="twitter" href="{{ isset($footer->twitter) ? $footer->twitter : 'javascript:void(0)' }}" target="_blank"><i class="icon-twitter"></i></a></li>
            <li><a class="linkedin" href="{{ isset($footer->linkedin) ? $footer->linkedin : 'javascript:void(0)' }}" target="_blank"><i class="icon-linkedin"></i></a></li>
            <li><a class="instagram" href="{{ isset($footer->instagram) ? $footer->instagram : 'javascript:void(0)' }}" target="_blank"><i class="icon-instagram"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="footer_copyright_part">Copyright © {{ date('Y') }} All Rights Reserved. <br> Developed By {{ isset($footer->copyright) ? $footer->copyright : 'PT. Unknown' }}</div>
        </div>
      </div>
    </div>
  </div>
<div id="bottom_backto_top"><a href="#"></a>
</div>
