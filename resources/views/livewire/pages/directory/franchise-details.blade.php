
@section('title')
Franchise Detail
@endsection

<div>
    <div id="titlebar" class="gradient" style="background-image: url({{ isset($banner) ? asset('storage/'.$banner->image) : '../../images/page-title.jpg' }}">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Directory</h2>
              <nav id="breadcrumbs">
                <ul>

                  <li>{{ trans('message.directory-desc') }}</li>
                </ul>
              </nav>
            <nav id="breadcrumbs">
                <ul>
                  <li><a href="index_1.html">Home</a></li>
                  <li>Directory</li>
                </ul>
              </nav></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="blog-page">
          <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="sidebar right">

                  <div class="utf_box_widget margin-top-35">
                      <h3>{{ trans('message.disclaimer') }}</h3>
                      <ul class="utf_listing_detail_sidebar">
                         <p>{{ trans('message.disclaimer-desc') }}</p>
                     </ul>
                  </div>
                  <div class="utf_box_widget margin-top-35">
                    <h3><i class="sl sl-icon-phone"></i> {{ trans('message.need-help') }}</h3>
                    <p>{{ trans('message.need-help-desc') }}</p>
                    <ul class="utf_social_icon rounded">
                      <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                      <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                      <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                      <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                    <a class="utf_progress_button button fullwidth_block margin-top-5" href="contact.html">{{ trans('message.contact-us') }}</a>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            <div class="col-lg-8 col-md-8">
              <div class="utf_dashboard_list_box margin-top-0">
                <h4><i class="sl sl-icon-list"></i> {{ trans('message.franchise-title') }}</h4>

              </div>





              <div class="clearfix"></div>

            </div>
          <div class="col-lg-8 col-md-8">
            <div id="titlebar" class="utf_listing_titlebar">
              <li>
                    <div class="utf_list_box_listing_item">
                      <div class="utf_list_box_listing_item-img"><a href="#"><img src="{{ asset('storage/'.$data['brand_image']) }}" alt=""></a></div>
                      <div class="utf_list_box_listing_item_content">
                        <div class="inner">
                          <h3>{{ $data->brand_name }}</h3>
                          <span><i class="im im-icon-Hotel"></i> {{ $data->category->title }}</span><br>

                          <span><i class="sl sl-icon-clock"></i> Tahun Berdiri {{ $data->year_of_established }}</span><br>

                          <span><i class="sl sl-icon-home"></i> Jumlah Gerai {{ $data->total_outlet }}</span><br>


                        <p>Harga/Nilai Investasi <b>{{ $data->investments }}</b></p><br><br></div>
                      </div>
                    </div>
                    <div class="buttons-to-right">
                        <a href="#" class="button gray"><i class="fa fa-download"></i> Download Brochure</a>

                    </div>
                  </li>
            </div>
            <div id="utf_listing_overview" class="utf_listing_section">
              <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30">{{ trans('message.listing-desc') }}</h3>
              {!! $data->brand_information !!}


            </div>
            <div style="margin-top: 20px">
                <div class="row container " style=" margin-bottom: 20px">
                    <a  href="{{ asset('storage/'.$data['brand_brochure']) }}" download class="button gray btn btn-sm"><i class="fa fa-download"></i> Download Brochure</a>
                @auth
                <a href="https://wa.me/{{ $data['brand_whatsapp'] }}" class="button gray btn btn-sm"><i class="fa fa-phone"></i> Whatsapp Contact</a>
                @endauth
                </div>
            </div>
            <div id="utf_add_review" class="utf_add_review-box">
                <h3 class="utf_listing_headline_part margin-bottom-20"> {{ trans('message.form-question') }}</h3>
                <span class="utf_leave_rating_title">{{ trans('message.form-question-desc') }}</span>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  </div>
                </div>
                <form id="utf_add_comment" class="utf_add_comment">
                  <fieldset>
                    <div class="row">
                      <div class="col-md-4">
                        <label>{{ trans('message.name') }} :</label>
                        <input type="text" placeholder="{{ trans('message.fullname') }}" value="">
                      </div>
                      <div class="col-md-4">
                        <label>{{ trans('message.email') }}:</label>
                        <input type="text" placeholder="{{ trans('message.email') }}" value="">
                      </div>
                      <div class="col-md-4">
                        <label>{{ trans('message.message') }}</label>
                        <input type="text" placeholder="{{ trans('message.message') }}" value="">
                      </div>
                    </div>
                    <div>
                      <label>{{ trans('message.your-message') }}</label>
                      <textarea cols="40" placeholder="{{ trans('message.your-message-desc') }}" rows="3"></textarea>
                    </div>
                  </fieldset>
                  <button class="button">{{ trans('message.send-question') }}</button>
                  <div class="clearfix"></div>
                </form>
              </div>
          </div></div>
        </div>
      </div>
</div>
@include('layouts.footer')
