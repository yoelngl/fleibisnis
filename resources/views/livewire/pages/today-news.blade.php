@section('title')
    Today News
@endsection
<div>
    <div id="titlebar" class="gradient">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Today News</h2>
              <nav id="breadcrumbs">
                <ul>
                  <li><a href="index_1.html">Home</a></li>
                  <li>Today News</li>
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
                  <h3><i class="sl sl-icon-magnifier"></i>{{ trans('message.search-blog') }}</h3>
                  <div class="utf_search_blog_input">
                    <div class="input">
                      <input class="search-field" type="text" placeholder="Search..." value=""/>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="utf_box_widget margin-top-35">
                  <h3><i class="sl sl-icon-folder-alt"></i> {{ trans('message.categories') }}</h3>
                  <ul class="utf_listing_detail_sidebar">
                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Travel</a></li>
                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Nightlife</a></li>
                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Fitness</a></li>
                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Real Estate</a></li>
                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Restaurant</a></li>
                    <li><i class="fa fa-angle-double-right"></i> <a href="#">Dance Floor</a></li>
                  </ul>
                </div>

                <div class="utf_box_widget margin-top-40">
                  <h3><i class="sl sl-icon-book-open"></i> {{ trans('message.popular-post') }}</h3>
                  <ul class="utf_widget_tabs">
                    <li>
                      <div class="utf_widget_content">
                        <div class="utf_widget_thum"> <a href="blog_detail_right_sidebar.html"><img src="images/blog-widget-03.jpg" alt=""></a> </div>
                        <div class="utf_widget_text">
                          <h5><a href="blog_detail_right_sidebar.html">Lorem ipsum dolor sit amet consectetur...</a></h5>
                          <span><i class="fa fa-clock-o"></i> Feb 02, 2019 at 12:52 pm</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li>
                      <div class="utf_widget_content">
                        <div class="utf_widget_thum"> <a href="blog_detail_right_sidebar.html"><img src="images/blog-widget-02.jpg" alt=""></a> </div>
                        <div class="utf_widget_text">
                          <h5><a href="blog_detail_right_sidebar.html">Lorem ipsum dolor sit amet consectetur...</a></h5>
                          <span><i class="fa fa-clock-o"></i> Feb 02, 2019 at 12:52 pm</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li>
                      <div class="utf_widget_content">
                        <div class="utf_widget_thum"> <a href="blog_detail_right_sidebar.html"><img src="images/blog-widget-01.jpg" alt=""></a> </div>
                        <div class="utf_widget_text">
                          <h5><a href="blog_detail_right_sidebar.html">Lorem ipsum dolor sit amet consectetur...</a></h5>
                          <span><i class="fa fa-clock-o"></i> Feb 02, 2019 at 12:52 pm</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
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
              <div class="utf_dashboard_list_box margin-top-0" >
                <h4 style="background-color: rgba(10, 52, 90, 0.8)"><i class="sl sl-icon-star"></i>{{ trans('message.today-news') }}</h4>
              </div>
              <div class="utf_blog_post">
                <a href="blog_detail_right_sidebar.html" class="utf_post_img"> <img src="images/blog-post-01.jpg" alt=""> </a>
                <div class="utf_post_content">
                  <h3><a href="blog_detail_right_sidebar.html">Get Alife Insurance for Your Business</a></h3>
                  <ul class="utf_post_text_meta">
                    <li>April 02, 2021</li>
                    <li>{{ trans('message.created-by') }} <a href="#">Admin</a></li>
                    <li><a href="#">5,122 Views</a></li>
                  </ul>
                  <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.<a href="blog_detail_right_sidebar.html">[...]</a></p>
                  <a href="blog_detail_right_sidebar.html" class="read-more">{{ trans('message.read-more') }}<i class="fa fa-angle-right"></i></a>
                </div>
              </div>

              <div class="clearfix"></div>

            </div>

            <div class="col-lg-8 col-md-8">
                <div class="utf_dashboard_list_box margin-top-0" >
                    <h4 style="background-color: rgba(10, 52, 90, 0.8)"><i class="sl sl-icon-star"></i>{{ trans('message.more-news') }}</h4>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12"> <a href="blog_detail_post.html" class="blog_compact_part-container">
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

                    <div class="col-md-6 col-sm-6 col-xs-12"> <a href="blog_detail_post.html" class="blog_compact_part-container">
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

                    <div class="col-md-6 col-sm-6 col-xs-12"> <a href="blog_detail_post.html" class="blog_compact_part-container">
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

                    <div class="col-md-6 col-sm-6 col-xs-12"> <a href="blog_detail_post.html" class="blog_compact_part-container">
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
                    <div class="col-md-12 col-xs-12">
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
          </div>
        </div>
      </div>
</div>
