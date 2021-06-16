@section('title')
    Retail Directory
@endsection

<div>
    <div id="titlebar" class="gradient">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Retail Directory</h2>
              <nav id="breadcrumbs">
                <ul>
                  <li>{{ trans('message.directory-desc') }}</li>
                </ul>
              </nav>
            <nav id="breadcrumbs">
                <ul>
                  <li><a href="index_1.html">Home</a></li>
                  <li>Retail Directory</li>
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
                {{-- <div class="sort-by utf_panel_dropdown sort_by_margin float-right"> <a href="#">Investment</a>
                  <div class="utf_panel_dropdown-content">
                    <input class="distance-radius" type="range" min="1" max="999" step="1" value="1" data-title="Select Range">
                    <div class="panel-buttons">
                      <button class="panel-apply">Apply</button>
                    </div>
                  </div>
                </div> --}}
                {{-- <div class="sort-by" wire:ignore>
                  <div class="utf_sort_by_select_item sort_by_margin">
                    <select data-placeholder="Merk" class="utf_chosen_select_single">
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
                </div> --}}
                <div class="sort-by" wire:ignore>
                  <div class="utf_sort_by_select_item sort_by_margin">
                    <select wire:model="category_id" data-placeholder="Categories" id="categories" class="utf_chosen_select_single">
                      <option value="">Categories</option>
                      @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="sort-by">
                  <div class="utf_sort_by_select_item utf_search_map_section">
                    <div class="row with-forms">
                        <div class="col-md-12">
                          <input type="text" placeholder="Search, Ex. Retail Boba" wire:model="search" style="height: 40px" value=""/>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                @foreach ($retail as $item)
                <div class="col-lg-12 col-md-12">
                    <div class="utf_listing_item-container list-layout"> <a href="{{ route('retail-details',['slug' => $item->slug]) }}" class="utf_listing_item">
                      <div class="utf_listing_item-image">
                          <img src="{{ asset('storage/'.$item->product_images) }}" alt="">
                          <span class="tag"><i class="im im-icon-Hotel"></i> REKOMENDASI</span>
                      </div>
                      <div class="utf_listing_item_content">
                        <div class="utf_listing_item-inner">
                          <h3>{{ $item->product_name }}</h3>
                          <span><i class="sl sl-icon-book-open"></i> {{ $item->category->title }}</span>
                          <span><i class="sl sl-icon-tag"></i> <b class="price">{{ $item->price }}</b> IDR</span>
                          <p>{!! Str::limit($item->product_information, 200) !!}</p>
                        </div>
                      </div>
                      </a>
                    </div>
                  </div>
                @endforeach

            </div>

            <div class="clearfix"></div>
            {{-- <div class="row">
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
            </div> --}}
          </div>
          <!-- Sidebar -->
          <div class="col-lg-4 col-md-4">
            <div class="sidebar">
            <div class="utf_box_widget margin-top-35">
                <h3><i class="sl sl-icon-phone"></i>{{ trans('message.need-help') }}</h3>
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
                <img src="{{ asset('images/600x900.jpg') }}" height="auto" alt="">
            </div>
          </div>
        </div>
      </div>
</div>
@include('layouts.footer')

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    <script>
        $('#categories').on('change',function(){
            @this.set('category_id',this.value);
        });

        $( '.price' ).mask('000.000.000',
        {reverse: true}
        );
    </script>
@endpush
