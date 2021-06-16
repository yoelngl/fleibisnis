@section('title')
 Ask The Experts Details
@endsection

<div>
    <div id="titlebar" class="gradient">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Ask The Experts</h2>
              <nav id="breadcrumbs">
                <ul>
                  <li><a href="index_1.html">{{ trans('message.ask-expert-desc') }}</a></li>
                </ul>
              </nav>
                <nav id="breadcrumbs">
                    <ul>
                    <li><a href="index_1.html">Home</a></li>
                    <li>Ask The Experts</li>
                    </ul>
                </nav>
            </div>
          </div>
        </div>
    </div>

    <div class="container">
        <div class="row utf_sticky_main_wrapper">
          <div class="col-lg-8 col-md-8">
            <div id="utf_listing_overview" class="utf_listing_section">
              <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30">{{ trans('message.expert-desc') }}</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam.</p>
            </div>

            <div class="utf_listing_section">
              <h3 class="utf_listing_headline_part margin-top-50 margin-bottom-40">{{ trans('message.q-a') }}</h3>
              <div class="row">
                <div class="col-md-12">
                  <div class="style-2">
                    <div class="accordion">
                      <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> (1) How to Open an Account?</h3>
                      <div>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                      </div>
                      <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> (2) How to Add Listing?</h3>
                      <div>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                      </div>
                      <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> (3) What is Featured Listing?</h3>
                      <div>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
            </div>
          </div>

          <!-- Sidebar -->
          <div class="col-lg-4 col-md-4 margin-top-40 sidebar-search">
            <div class="utf_box_widget">
              <h3><i class="sl sl-icon-phone"></i>{{ trans('message.contact-info') }}</h3>
              <div class="utf_hosted_by_user_title"> <a href="#" class="utf_hosted_by_avatar_listing"><img src="{{ asset('images/dashboard-avatar.jpg') }}" alt=""></a>
                <h4><a href="#">Kathy Brown</a><span>Posted 3 Days Ago</span>
                  <span><i class="sl sl-icon-location"></i> Lonsdale St, Melbourne</span>
                </h4>
              </div>
              <ul class="utf_social_icon rounded margin-top-10">
                <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
              </ul>
            </div>
            <div class="opening-hours margin-top-35">
                <div class="utf_coupon_widget" style="background-image: url(images/coupon-bg-1.jpg);">
                    <div class="utf_coupon_overlay"></div>
                    <a href="#" class="utf_coupon_top">
                        <h3>Book Now & Get 50% Discount</h3>
                        <div class="utf_coupon_expires_date">Date of Expires 05/08/2019</div>
                        <div class="utf_coupon_used"><strong>How to use?</strong> Just show us this coupon on a screen</div>
                    </a>
                    <div class="utf_coupon_bottom">
                        <p>Coupon Code</p>
                        <div class="utf_coupon_code">DL76T</div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

</div>
@include('layouts.footer')

