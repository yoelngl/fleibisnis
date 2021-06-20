@section('title')
 {{ $expert->name }}
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
              {!! $expert->description !!}
            </div>

            <div class="utf_listing_section">
              <h3 class="utf_listing_headline_part margin-top-50 margin-bottom-40">{{ trans('message.q-a') }}</h3>
              <div class="row">
                <div class="col-md-12">
                  <div class="style-2">
                    <div class="accordion">
                        @if($qna->count())
                        @foreach ($qna as $key => $value)
                        <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> ({{ $key + 1 }}) {!! $value->question !!}?</h3>
                        <div>
                            {!! $value->answer !!}
                        </div>
                        @endforeach
                        @else
                        <h3> Nothing Question and Answer here</h3>

                        @endif

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
              <div class="utf_hosted_by_user_title"> <a href="#" class="utf_hosted_by_avatar_listing"><img src="{{ asset('storage/'.$expert->images) }}" alt=""></a>
                <h4><a href="#">{{ $expert->name }}</a>
                  <span><i class="sl sl-icon-location"></i> {{ $expert->address }}</span>
                </h4>
              </div>
              <ul class="utf_social_icon rounded margin-top-10">
                @if($expert->facebook != null)
                <li><a class="facebook" target="_blank" href="{{ url($expert->facebook) }}"><i class="icon-facebook"></i></a></li>
                @endif
                @if($expert->twitter != null)
                <li><a class="twitter" target="_blank" href="{{ url($expert->twitter) }}"><i class="icon-twitter"></i></a></li>
                @endif
                @if($expert->instagram != null)
                <li><a class="instagram" target="_blank" href="{{ url($expert->instagram) }}"><i class="icon-instagram"></i></a></li>
                @endif
                @if($expert->linkedin != null)
                <li><a class="linkedin" target="_blank" href="{{ url($expert->linkedin) }}"><i class="icon-linkedin"></i></a></li>
                @endif
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

