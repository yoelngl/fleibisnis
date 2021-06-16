@section('title')
Events
@endsection

@section('css')
    <style>
        #headerPopup{
  width:75%;
  margin:0 auto;
}

#headerPopup iframe{
  width:100%;
  margin:0 auto;
}
    </style>
@endsection

<div>
    <div id="titlebar" class="gradient">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Events</h2>
              <nav id="breadcrumbs">
                <ul>
                  <li>{{ trans('message.events-desc') }}</li>
                </ul>
              </nav>
              <nav id="breadcrumbs">
                <ul>
                  <li><a href="index_1.html">Home</a></li>
                  <li>Events</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="main_input_search_part">
                    <div class="main_input_search_part_item">
                        <input type="text" placeholder="Ex. Franchise Boba"/>
                    </div>
                    <div class="main_input_search_part_item intro-search-field">
                        <select data-placeholder="All Categories" class="selectpicker default" title="All Categories" data-live-search="true" data-selected-text-format="count" data-size="5">
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
    <div class="container">

        <div class="col-lg-12 col-md-12">
                <div class="utf_dashboard_list_box margin-bottom-10" >
                    <h4 style="background-color: rgba(10, 52, 90, 0.8)"><i class="sl sl-icon-star"></i>{{ trans('message.flei-biztalk') }}</h4>
                </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="blog_compact_part-container">
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

                <div class="col-md-4 col-sm-6 col-xs-12"> <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="blog_compact_part-container">
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

                <div class="col-md-4 col-sm-6 col-xs-12"> <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="blog_compact_part-container">
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
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="blog_compact_part-container">
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

                <div class="col-md-4 col-sm-6 col-xs-12"> <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="blog_compact_part-container">
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

                <div class="col-md-4 col-sm-6 col-xs-12"> <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="blog_compact_part-container">
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
                <div class="col-md-12 col-xs-12 margin-top-50">
                    <div class="utf_pagination_container_part margin-bottom-70">
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

         <div class="col-lg-12 col-md-12">
            <div class="utf_dashboard_list_box" >
                <h4 style="background-color: rgba(10, 52, 90, 0.8)"><i class="sl sl-icon-star"></i>{{ trans('message.biz-event') }}</h4>
            </div>
                <ul class="margin-top-10">
                    <li><h4 class="margin-bottom-10 margin-top-10">{{ trans('message.feature') }}</h4></li>
                </ul>
            <ul>
                <li>
                    <div class="table-responsive">
                        <table class="table">
                            <th>{{ trans('message.date') }}</th>
                            <th>{{ trans('message.event') }} , {{ trans('message.activities') }}</th>
                            <tbody>
                                <tr>
                                    <td>10-12 September 2021</td>
                                    <td><a href="#">Flei - Franchise & License Expo Indonesia</a> </td>
                                </tr>
                                <tr>
                                    <td>10-12 September 2021</td>
                                    <td><a href="#">Flei - Franchise & License Expo Indonesia</a> </td>
                                </tr>
                                <tr>
                                    <td>10-12 September 2021</td>
                                    <td><a href="#">Flei - Franchise & License Expo Indonesia</a> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#" >{{ trans('message.more-event') }}</a>
                </li>
            </ul>
         </div>
    </div>
    @include('layouts.footer')


@push('scripts')
<script>


</script>
@endpush
