@section('title')
    Today News
@endsection
<div>
    <div id="titlebar" class="gradient" style="background-image: url({{ isset($banner) ? asset('storage/'.$banner->image) : '../../images/page-title.jpg' }});
">
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
                      <input class="search-field" wire:model="search" type="text" placeholder="Search..." value=""/>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="utf_box_widget margin-top-35">
                  <h3><i class="sl sl-icon-folder-alt"></i> {{ trans('message.categories') }}</h3>
                  <ul class="utf_listing_detail_sidebar">
                    @foreach ($categories as $category)
                        <li><i class="fa fa-angle-double-right"></i> <a href="javascript:void(0)" wire:click="category('{{ $category->id }}')">{{ $category->title }}</a></li>
                    @endforeach
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
                <a href="{{ route('today_news.details',['slug' => $today_news->slug]) }}" class="utf_post_img"> <img src="{{ asset('storage/'.$today_news->images) }}" alt=""> </a>
                <div class="utf_post_content">
                  <h3><a href="{{ route('today_news.details',['slug' => $today_news->slug]) }}">{{ $today_news->title }}</a></h3>
                  <ul class="utf_post_text_meta">
                    <li>{{ Carbon\Carbon::parse($today_news->created_at)->format('d F, Y') }}</li>
                    <li>{{ trans('message.created-by') }} <a href="#">{{ $today_news->username }}</a></li>
                    <li><a href="#">5,122 Views</a></li>
                  </ul>
                  <p>{!! Str::limit($today_news->description,500) !!}</p>
                  <a href="{{ route('today_news.details',['slug' => $today_news->slug]) }}" class="read-more">{{ trans('message.read-more') }}<i class="fa fa-angle-right"></i></a>
                </div>
              </div>


              <div class="clearfix"></div>

            </div>

            <div class="col-lg-8 col-md-8">
                <div class="utf_dashboard_list_box margin-top-0" >
                    <h4 style="background-color: rgba(10, 52, 90, 0.8)"><i class="sl sl-icon-star"></i>{{ trans('message.more-news') }}</h4>
                </div>
                <div class="row">
                    @if($more_news->count())
                    @foreach ($more_news as $item)
                    <div class="col-md-6 col-sm-6 col-xs-12"> <a href="{{ route('today_news.details',['slug' => $item->slug]) }}" class="blog_compact_part-container">
                        <div class="blog_compact_part"> <img src="{{ asset('storage/'.$item->images) }}" alt="">
                          <div class="blog_compact_part_content">
                            <h3>{{ $item->title }}</h3>
                            <ul class="blog_post_tag_part">
                              <li>{{ $item->category->title }} / {{ Carbon\Carbon::parse($item->created_at)->format('d F, Y') }}</li>
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
                    {{-- <div class="col-md-12 col-xs-12">
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
                    </div> --}}
                    @if($more_news->hasMorePages())
                    <div class="col-md-12 centered_content"> <a wire:click="$emit('load-more')" class="button border margin-top-20">{{ trans('message.view-more') }}</a> </div>
                    @endif
                  </div>
            </div>
          </div>
        </div>
      </div>
</div>
@include('layouts.footer')
