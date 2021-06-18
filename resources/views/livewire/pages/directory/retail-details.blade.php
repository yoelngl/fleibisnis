@section('title')
Retail Detail
@endsection

<div>
    <div id="titlebar" class="gradient">
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
              </nav>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="blog-page">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="sidebar right">
                <div class="utf_box_widget">
                  <h3><i class="sl sl-icon-magnifier"></i>{{ trans('message.find') }}</h3>
                  <div class="utf_search_blog_input">
                    <div class="input">
                      <input class="search-field" type="text" placeholder="{{ trans('message.find') }}..." value="">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="utf_box_widget margin-top-35">
                  <h3><i class="sl sl-icon-folder-alt"></i>{{ trans('message.categories') }}</h3>
                  <ul class="utf_listing_detail_sidebar">
                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Waralaba, Kemitraan &amp; Peluang Usaha</a>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Beauty &amp; Health</a>
                        </li>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Education</a>
                        </li>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Fashion &amp; Lifestyle</a>
                        </li>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Food &amp; Beverage</a>
                        </li>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Retail &amp; Wholesales</a>
                        </li>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Specialized Retail</a>
                        </li
                        ><li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Others</a>
                        </li>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Produk &amp; Kebutuhan Bisnis Ritel</a>
                        </li>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Business Consultant &amp; Firm</a>
                        </li>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Property Developer</a>
                        </li>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Retail Tech-Equipment</a>
                        </li>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Retail Services</a>
                        </li>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Store Furnishing</a>
                        </li>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="#">Internet &amp; IT</a></li>
                        </li>
                    </ul>
                </div>
                <div class="utf_box_widget margin-top-35">
                  <h3><i class="sl sl-icon-folder-alt"></i>{{ trans('message.merk') }}</h3>
                  <ul class="utf_listing_detail_sidebar">
                    <li><i class="fa fa-angle-double-right"></i>
                        <a href="#">Lokal</a>
                    </li>
                    <li><i class="fa fa-angle-double-right"></i>
                        <a href="#">Luar Negeri</a>
                    </li>
                  </ul>
                </div>
                <div class="utf_box_widget margin-top-35">
                    <h3><i class="sl sl-icon-folder-alt"></i> {{ trans('message.investment') }}</h3>
                      <input class="distance-radius" type="range" min="1" max="5" step="1" value="1" data-title="Select Range">
                      <div class="panel-buttons"></div>
                  </div>
                <div class="utf_box_widget margin-top-35">
                    <h3>{{ trans('message.disclaimer') }}</h3>
                    <ul class="utf_listing_detail_sidebar">
                       <p>{{ trans('message.disclaimer-desc') }}</p>
                   </ul>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="col-lg-8 col-md-8">
              <div class="utf_dashboard_list_box margin-top-0">
                <h4 style="background-color: rgba(10, 52, 90, 0.8)"><i class="sl sl-icon-list"></i> {{ trans('message.retail-title') }}</h4>
              </div>
              <div class="clearfix"></div>
            </div>
          <div class="col-lg-8 col-md-8">
            <div id="titlebar" class="utf_listing_titlebar">
              <li>
                <div class="utf_list_box_listing_item">
                    <div class="utf_list_box_listing_item-img"><a href="#"><img src="{{ asset('storage/'.$data['product_images']) }}" alt=""></a></div>
                    <div class="utf_list_box_listing_item_content">
                    <div class="inner">
                        <h3>{{ $data['product_name'] }}</h3>
                        <span><i class="im im-icon-Hotel"></i> {{ $data['product_type'] }}</span><br>
                        <p>{!! $data['product_information'] !!} </p>
                    <p>Harga<b> IDR <b class="price">{{ $data['price'] }}</b></b></p><br><br></div>
                    </div>
                </div>

               </li>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30">Product Details</h3>
                  <div class="style-2">
                    <div class="accordion">
                      <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> {{ trans('message.spesification') }}</h3>
                      <div>
                        <p>{!! $data['product_spesification'] !!}</p>
                      </div>
                      <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> Product Features</h3>
                      <div>
                        <p>{!! $data['product_features'] !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div style="margin-top: 20px">
                <div class="row container " style=" margin-bottom: 130px">
                    <a  href="{{ asset('storage/'.$data['brand_brochure']) }}" download class="button gray btn btn-sm"><i class="fa fa-download"></i> Download Brochure</a>
                @auth
                <a href="https://wa.me/{{ $data['brand_whatsapp'] }}" class="button gray btn btn-sm"><i class="fa fa-phone"></i> Whatsapp Contact</a>
                @endauth
                </div>

            </div>
             <div id="utf_listing_faq" class="utf_listing_section">
              <div class="style-2">
                <div class="accordion">
                  <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-utf_widget_content" style="display: none;">
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                  </div>
                  <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-utf_widget_content" style="display: none;">
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                  </div>
                  <br>
                  <div id="utf_listing_tags" class="utf_listing_section listing_tags_section margin-bottom-10 margin-top-0">
                <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download Brochure</a>
                <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i> Chat with Brand</a>
              </div><div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-utf_widget_content" style="display: none;">
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                  </div>
                </div>
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

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>

    <script>
        $( '.price' ).mask('000.000.000',
        {reverse: true}
        );
    </script>
@endpush
