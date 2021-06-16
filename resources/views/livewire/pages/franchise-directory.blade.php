@section('title')
    Franchise Directory
@endsection

<div>
    <div id="titlebar" class="gradient">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Franchise Directory</h2>
              <nav id="breadcrumbs">
                <ul>
                  <li>{{ trans('message.directory-desc') }}</li>
                </ul>
              </nav>
            <nav id="breadcrumbs">
                <ul>
                  <li><a href="index_1.html">Home</a></li>
                  <li>Franchise Directory</li>
                </ul>
              </nav></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <div class="listing_filter_block">
              <div class="col-md-2 col-xs-2">
                <div class="utf_layout_nav">  <a href="#" class="list active"><i class="fa fa-align-justify"></i></a> </div>
              </div>
              <div class="col-md-10 col-xs-10">
                <div class="sort-by utf_panel_dropdown sort_by_margin float-right"> <a href="#">Investment</a>
                  <div class="utf_panel_dropdown-content">
                    <input class="distance-radius" type="range" min="1" max="999" step="1" value="1" data-title="Select Range">
                    <div class="panel-buttons">
                      <button class="panel-apply">Apply</button>
                    </div>
                  </div>
                </div>
                <div class="sort-by">
                  <div class="utf_sort_by_select_item sort_by_margin">
                    <select data-placeholder="Asal Merek" class="utf_chosen_select_single">
                      <option>Merk</option>
                      <option>Latest Listings</option>
                      <option>Popular Listings</option>
                      <option>Price (Low to High)</option>
                      <option>Price (High to Low)</option>
                      <option>Highest Reviewe</option>
                      <option>Lowest Reviewe</option>
                      <option>Newest Listing</option>
                      <option>Oldest Listing</option>
                      <option>Random Listings</option>
                    </select>
                  </div>
                </div>
                <div class="sort-by">
                  <div class="utf_sort_by_select_item sort_by_margin">
                    <select data-placeholder="Categories" class="utf_chosen_select_single">
                      <option>Categories</option>
                      <option>Restaurant</option>
                      <option>Health</option>
                      <option>Hotels</option>
                      <option>Real Estate</option>
                      <option>Fitness</option>
                      <option>Shopping</option>
                      <option>Travel</option>
                      <option>Shops</option>
                      <option>Nightlife</option>
                      <option>Events</option>
                    </select>
                  </div>
                </div>
                <div class="sort-by">
                  <div class="utf_sort_by_select_item utf_search_map_section">
                    <div class="row with-forms">
                        <div class="col-md-12">
                          <input type="text" placeholder="Search, Ex. Franchise Boba" style="height: 40px" value=""/>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="utf_listing_item-container list-layout"> <a href="{{ route('franchise-details') }}" class="utf_listing_item">
                  <div class="utf_listing_item-image">
                      <img src="images/utf_listing_item-01.jpg" alt="">
                      <span class="tag"><i class="im im-icon-Hotel"></i> REKOMENDASI</span>
                  </div>
                  <div class="utf_listing_item_content">
                    <div class="utf_listing_item-inner">
                      <h3>Gulda BBQ</h3>
                      <span><i class="sl sl-icon-book-open"></i> Makanan dan Minuman</span>
                      <span><i class="sl sl-icon-tag"></i> Rp. 100.000</span>
                      <div class="utf_star_rating_section" data-rating="4.5">
                        <div class="utf_counter_star_rating">(4.5)</div>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                    </div>
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="utf_listing_item-container list-layout"> <a href="{{ route('franchise-details') }}" class="utf_listing_item">
                  <div class="utf_listing_item-image">
                      <img src="images/utf_listing_item-01.jpg" alt="">
                      <span class="tag"><i class="im im-icon-Hotel"></i> REKOMENDASI</span>
                  </div>
                  <div class="utf_listing_item_content">
                    <div class="utf_listing_item-inner">
                      <h3>Gulda BBQ</h3>
                      <span><i class="sl sl-icon-book-open"></i> Makanan dan Minuman</span>
                      <span><i class="sl sl-icon-tag"></i> Rp. 100.000</span>
                      <div class="utf_star_rating_section" data-rating="4.5">
                        <div class="utf_counter_star_rating">(4.5)</div>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                    </div>
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="utf_listing_item-container list-layout"> <a href="{{ route('franchise-details') }}" class="utf_listing_item">
                  <div class="utf_listing_item-image">
                      <img src="images/utf_listing_item-01.jpg" alt="">
                      <span class="tag"><i class="im im-icon-Hotel"></i> REKOMENDASI</span>
                  </div>
                  <div class="utf_listing_item_content">
                    <div class="utf_listing_item-inner">
                      <h3>Gulda BBQ</h3>
                      <span><i class="sl sl-icon-book-open"></i> Makanan dan Minuman</span>
                      <span><i class="sl sl-icon-tag"></i> Rp. 100.000</span>
                      <div class="utf_star_rating_section" data-rating="4.5">
                        <div class="utf_counter_star_rating">(4.5)</div>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                    </div>
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="utf_listing_item-container list-layout"> <a href="{{ route('franchise-details') }}" class="utf_listing_item">
                  <div class="utf_listing_item-image">
                      <img src="images/utf_listing_item-01.jpg" alt="">
                      <span class="tag"><i class="im im-icon-Hotel"></i> REKOMENDASI</span>
                  </div>
                  <div class="utf_listing_item_content">
                    <div class="utf_listing_item-inner">
                      <h3>Gulda BBQ</h3>
                      <span><i class="sl sl-icon-book-open"></i> Makanan dan Minuman</span>
                      <span><i class="sl sl-icon-tag"></i> Rp. 100.000</span>
                      <div class="utf_star_rating_section" data-rating="4.5">
                        <div class="utf_counter_star_rating">(4.5)</div>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                    </div>
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="utf_listing_item-container list-layout"> <a href="{{ route('franchise-details') }}" class="utf_listing_item">
                  <div class="utf_listing_item-image">
                      <img src="images/utf_listing_item-01.jpg" alt="">
                      <span class="tag"><i class="im im-icon-Hotel"></i> REKOMENDASI</span>
                  </div>
                  <div class="utf_listing_item_content">
                    <div class="utf_listing_item-inner">
                      <h3>Gulda BBQ</h3>
                      <span><i class="sl sl-icon-book-open"></i> Makanan dan Minuman</span>
                      <span><i class="sl sl-icon-tag"></i> Rp. 100.000</span>
                      <div class="utf_star_rating_section" data-rating="4.5">
                        <div class="utf_counter_star_rating">(4.5)</div>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                    </div>
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="utf_listing_item-container list-layout"> <a href="{{ route('franchise-details') }}" class="utf_listing_item">
                  <div class="utf_listing_item-image">
                      <img src="images/utf_listing_item-01.jpg" alt="">
                      <span class="tag"><i class="im im-icon-Hotel"></i> REKOMENDASI</span>
                  </div>
                  <div class="utf_listing_item_content">
                    <div class="utf_listing_item-inner">
                      <h3>Gulda BBQ</h3>
                      <span><i class="sl sl-icon-book-open"></i> Makanan dan Minuman</span>
                      <span><i class="sl sl-icon-tag"></i> Rp. 100.000</span>
                      <div class="utf_star_rating_section" data-rating="4.5">
                        <div class="utf_counter_star_rating">(4.5)</div>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                    </div>
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="utf_pagination_container_part margin-top-20 margin-bottom-70">
                  <nav class="pagination">
                    <ul>
                      <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                      <li><a href="#" class="current-page">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <!-- Sidebar -->
          <div class="col-lg-4 col-md-4">
            <div class="sidebar">
            <div class="utf_box_widget margin-top-35">
                <h3><i class="sl sl-icon-phone"></i> {{ trans('message.need-help') }}</h3>
                <p>{{ trans('message.need-help-desc') }}</p>
                <ul class="utf_social_icon rounded">
                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>

                    <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                </ul>
                <a class="utf_progress_button button fullwidth_block margin-top-5" href="contact.html">{{ trans('message.contact-us') }}<div class="progress-bar"></div></a>
            </div>
            <div class="utf_box_widget margin-top-35">
                <h3>{{ trans('message.disclaimer') }}</h3>
                <p>{{ trans('message.disclaimer-desc') }}</p>
            </div>
            <div class="margin-top-35">
                <img src="{{ asset('images/600x900.jpg') }}" height="955px" alt="">
            </div>
          </div>
        </div>
      </div>
</div>
@include('layouts.footer')

