@section('title')
{{ $data['product_name'] }} Retail
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

                <div class="utf_box_widget margin-top-35">
                    <h3>{{ trans('message.disclaimer') }}</h3>
                    <ul class="utf_listing_detail_sidebar">
                       <p>{{ trans('message.disclaimer-desc') }}</p>
                   </ul>
                </div>
                @include('vendor.contact')

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
                        <p>{!! $data['product_description'] !!} </p>
                    <p>Harga<b> IDR <b class="price">{{ $data['product_price'] }}</b></b></p></div>
                    </div>
                </div>

               </li>
            </div>

            <div class="row mb-2">

                <div class="col-md-12">
                    <a  href="{{ asset('storage/'.$data['brand_brochure']) }}" download class="button gray btn btn-sm"><i class="fa fa-download"></i> Download Brochure</a>
                @auth
                <a href="https://wa.me/{{ $data['company_phone'] }}" class="button gray btn btn-sm"><i class="fa fa-phone"></i> Whatsapp Contact</a>
                @endauth
                    <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30">Product Details</h3>
                  <div class="style-2">
                    <div class="accordion">
                        <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> {{ trans('message.product_information') }}</h3>
                        <div>
                          <p>{!! $data['product_description'] !!}</p>
                        </div>
                        <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> {{ trans('message.spesification') }}</h3>
                        <div>
                            <p>{!! $data['product_spesification'] !!}</p>
                        </div>
                        <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> {{ trans('message.product_features') }} </h3>
                        <div>
                            <p>{!! $data['product_features'] !!}</p>
                        </div>
                        <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> {{ trans('message.details') }}</h3>
                        <div>
                            <table class="table table-hover">
                                <thead>
                                    <th><b class="text-center">Rincian</b></th>
                                    <th class="text-right"><b >Produk</b></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ trans('message.product_name') }}</td>
                                        <td align="right">{{ $data['product_name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('message.product_type') }}</td>
                                        <td align="right">{{ $data['product_type'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('message.category') }}</td>
                                        <td align="right">{{ $data['product_category'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('message.product_origin') }}</td>
                                        <td align="right">{{ $data['product_origin'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('message.product_country') }}</td>
                                        <td align="right">{{ $data['product_country'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('message.company_name') }}</td>
                                        <td align="right">{{ $data['company_name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('message.currency') }}</td>
                                        <td align="right">{{ $data['currency'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('message.price') }}</td>
                                        <td align="right" class="price">{{ $data['product_price'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table mt-2">
                                <thead>
                                    <td colspan="2"><b>Informasi Tambahan:</b></td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ trans('message.guarantee') }}</td>
                                        <td align="right">{{ $data['guarantee'] }} {{ trans('message.year') }} </td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('message.practices') }}</td>
                                        <td align="right">
                                            @if ($data['practices'] == "Y")
                                                {{ trans('message.yes') }}
                                            @else
                                                {{ trans('message.no') }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('message.books') }}</td>
                                        <td align="right">@if ($data['books'] == "Y")
                                            {{ trans('message.yes') }}
                                        @else
                                            {{ trans('message.no') }}
                                        @endif</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('message.services') }}</td>
                                        <td align="right">@if ($data['services'] == "Y")
                                            {{ trans('message.yes') }}
                                        @else
                                            {{ trans('message.no') }}
                                        @endif</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td align="right"><a href="{{ url($data['website']) }}" target="_blank">{{ $data['website'] }} </a></td>
                                    </tr>
                                    <tr>
                                        <td>Instagram</td>
                                        <td align="right">{{ $data['instagram'] }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> {{ trans('message.additional_information') }} </h3>
                        <div>
                            <p>{!! isset($data['description_add']) ? $data['description_add'] : 'Tidak ada Deskripsi Tambahan disini' !!}</p>
                        </div>

                        </div>

                        </div>

                    </div>
                  </div>
                </div>
            </div>




            {{-- <div id="utf_add_review" class="utf_add_review-box">
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
            </div> --}}
          </div>
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
