@section('title')
    Home
@endsection

<div>
    <div class="search_container_block home_main_search_part main_search_block" data-background-image="images/city_search_background.jpg">
        <div class="main_inner_search_block">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2>Pilihan Franchise Waralaba <span class="typed-words"></span></h2>
                <h4>{{ trans('message.title-franchise') }}</h4>
                <center><a href="#" class="button medium d-flex justify-content-center">{{ trans('message.view-more') }}</a></center>

              </div>
            </div>
          </div>
        </div>
      </div>


    <div data-background-image="images/home_section_2.jpg" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="main_input_search_part">
                            <div class="main_input_search_part_item">
                                <input type="text" placeholder="Ex. Franchise Boba"/>
                            </div>
                            <div class="main_input_search_part_item intro-search-field">
                                <select data-placeholder="All Category" class="selectpicker default" title="All Category" data-live-search="true" data-selected-text-format="count" data-size="5">
                                  <option>Shop & Education</option>
                                  <option>Education</option>
                                  <option>Business</option>
                                  <option>Events</option>
                                </select>
                            </div>
                            <button class="button" onclick="window.location.href='listings_half_screen_map_list.html'">{{ trans('message.find') }}</button>
                        </div>
                    </div>
                </div>
            </div>
      </div>

    <a href="listings_grid_full_width.html" class="flip-banner parallax" style="margin-top: 50px" data-background="images/slider-bg-02.jpg" data-color="#0a345a" data-color-opacity="0.85" data-img-width="2200" data-img-height="1666">
        <div class="flip-banner-content">
            <h2 class="flip-visible">Google Ads Spot</h2>
        </div>
    </a>

    <section class="fullwidth_block margin-bottom-0 padding-top-30 padding-bottom-65" data-background-color="linear-gradient(to bottom, #f9f9f9 0%, rgba(255, 255, 255, 1))">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="headline_part centered margin-bottom-40 margin-top-30">{{ trans('message.merk-franchise') }}</h3>
                </div>
                <div class="col-md-12">
                    <div class="companie-logo-slick-carousel utf_dots_nav margin-bottom-10">
                        <div class="item">
                            <img src="images/brand_logo_01.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/brand_logo_02.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/brand_logo_03.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/brand_logo_04.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/brand_logo_05.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/brand_logo_06.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/brand_logo_07.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="fullwidth_block margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
        <div class="container">
        <div class="row slick_carousel_slider">
            <div class="col-md-12">
            <h3 class="headline_part centered margin-bottom-45"> {{ trans('message.latest-opportunity') }} </h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="simple_slick_carousel_block utf_dots_nav">
                    <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
                        <div class="utf_listing_item"> <img src="images/utf_listing_item-01.jpg" alt=""> <span class="tag"><i class="im im-icon-Chef-Hat"></i> Food</span>
                            <div class="utf_listing_item_content">
                                <h3>Guldak Korean BBQ</h3>
                                <span><i class="sl sl-icon-location"></i> Jakarta, Indonesia</span>
                                <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                            </div>
                            </div>
                        </a>
                    </div>

                    <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
                        <div class="utf_listing_item"> <img src="images/utf_listing_item-01.jpg" alt=""> <span class="tag"><i class="im im-icon-Chef-Hat"></i> Food</span>
                            <div class="utf_listing_item_content">
                                <h3>Guldak Korean BBQ</h3>
                                <span><i class="sl sl-icon-location"></i> Jakarta, Indonesia</span>
                                <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                            </div>
                            </div>
                        </a>
                    </div>

                    <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
                        <div class="utf_listing_item"> <img src="images/utf_listing_item-01.jpg" alt=""> <span class="tag"><i class="im im-icon-Chef-Hat"></i> Food</span>
                            <div class="utf_listing_item_content">
                                <h3>Guldak Korean BBQ</h3>
                                <span><i class="sl sl-icon-location"></i> Jakarta, Indonesia</span>
                                <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                            </div>
                            </div>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="fullwidth_block padding-top-75 padding-bottom-75" data-background-color="#ffffff">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="headline_part centered margin-bottom-50"> {{ trans('message.news-update') }}<span>{{ trans('message.news-update-desc') }}</span></h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12"> <a href="blog_detail_post.html" class="blog_compact_part-container">
              <div class="blog_compact_part"> <img src="images/blog-compact-post-01.jpg" alt="">
                <div class="blog_compact_part_content">
                  <h3>Kiat Sukses memilih Investasi Waralaba</h3>
                  <ul class="blog_post_tag_part">
                    <li>Tips & Trick</li>
                  </ul>
                  <p>Sebelum memilih franchise waralaba baiknya pahami hal berikut...</p>
                </div>
              </div>
              </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12"> <a href="blog_detail_post.html" class="blog_compact_part-container">
              <div class="blog_compact_part"> <img src="images/blog-compact-post-02.jpg" alt="">
                <div class="blog_compact_part_content">
                  <h3>Greatest Event Places in Listing</h3>
                  <ul class="blog_post_tag_part">
                    <li>18 January 2019</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                </div>
              </div>
              </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12"> <a href="blog_detail_post.html" class="blog_compact_part-container">
              <div class="blog_compact_part"> <img src="images/blog-compact-post-03.jpg" alt="">
                <div class="blog_compact_part_content">
                  <h3>Top 15 Greatest Ideas for Health & Body</h3>
                  <ul class="blog_post_tag_part">
                    <li>10 January 2019</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                </div>
              </div>
              </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12"> <a href="blog_detail_post.html" class="blog_compact_part-container">
              <div class="blog_compact_part"> <img src="images/blog-compact-post-04.jpg" alt="">
                <div class="blog_compact_part_content">
                  <h3>Top 10 Best Clothing Shops in Sydney</h3>
                  <ul class="blog_post_tag_part">
                    <li>18 January 2019</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                </div>
              </div>
              </a>
            </div>
            <div class="col-md-12 centered_content"> <a href="blog_page.html" class="button border margin-top-20">{{ trans('message.view-more') }}</a> </div>
          </div>
        </div>
      </section>

</div>
@include('layouts.footer')


@push('scripts')
<script>
    var typed = new Typed('.typed-words', {
    strings: ["Terbaik"," Terlengkap"," Termurah"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
    $(document).ready(function (){
        @include('vendor.helpers')
    });


</script>
@endpush
