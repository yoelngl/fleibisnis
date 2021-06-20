@section('title')
{{ $today_news->title }}
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
                <div class="utf_box_widget margin-top-35">
                  <h3><i class="sl sl-icon-book-open"></i> Popular Post</h3>
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

                <div class="utf_box_widget opening-hours margin-top-35">
                  <h3><i class="sl sl-icon-info"></i> Google AdSense</h3>
                  <span><img src="{{ asset('images/google_adsense.jpg') }}" alt="" /></span>
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
              <div class="utf_blog_post utf_single_post">
                <img class="utf_post_img" src="{{ asset('storage/'.$today_news->images) }}" alt="">
                <div class="utf_post_content">
                  <h3>{{ $today_news->title }}</h3>
                  <ul class="utf_post_text_meta">
                    <li>{{ Carbon\Carbon::parse($today_news->created_at)->format('d F, Y') }}</li>
                    <li>{{ trans('message.created-by') }} <a href="#">{{ $today_news->user->username }}</a></li>
                    <li><a href="#">5 Comments</a></li>
                  </ul>
                  {!! $today_news->description !!}
                  {{-- <div class="social-contact">
                    <a href="#" class="facebook-link"><i class="fa fa-facebook"></i> Facebook</a>
                    <a href="#" class="twitter-link"><i class="fa fa-twitter"></i> Twitter</a>
                    <a href="#" class="instagram-link"><i class="fa fa-instagram"></i> Instagram</a>
                    <a href="#" class="linkedin-link"><i class="fa fa-linkedin"></i> Linkedin</a>
                    <a href="#" class="youtube-link"><i class="fa fa-youtube-play"></i> Youtube</a>
                  </div> --}}
                </div>
              </div>
              <div class="utf_about_author"> <img src="images/user-avatar.jpg" alt="" />
                <div class="utf_about_description">
                  <div class="utf_star_rating_section" data-rating="4.5"></div><br>
                  <h4>Robert Mil</h4>
                  <a href="#">info@example.com</a>
                  <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged.</p>
                </div>
              </div>
              <div class="clearfix"></div>
              <h4 class="headline_part margin-top-20">Related Posts</h4>
              <div class="row">
                  @if($more_news->count())
                  @foreach ($more_news as $item)
                  <div class="col-md-6 col-sm-12"> <a href="{{ route('today_news.details',['slug' => $item->slug]) }}" class="blog_compact_part-container">
                    <div class="blog_compact_part"> <img src="{{ asset('storage/'.$item->images) }}" alt="">
                      <div class="blog_compact_part_content">
                       <h3>{{ $item->title }}</h3>
                        <ul class="blog_post_tag_part">
                          <li>{{ Carbon\Carbon::parse($item->created_at)->format('d F, Y') }}</li>
                        </ul>
                        <p>{!! Str::limit($item->description,50) !!}</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  @endforeach
                  @else
                    <img src="{{ asset('backend-assets/images/notFound.jpg') }}" width="auto" alt="">
                  @endif

              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@include('layouts.footer')
