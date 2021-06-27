@section('title')
{{ $today_news->title }}
@endsection

<div>
    <div id="titlebar" class="gradient" style="background-image: url({{ isset($banner) ? asset('storage/'.$banner->image) : '../../images/page-title.jpg' }}">
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
                @include('vendor.popular')
                @include('vendor.contact')
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
                    <li><a href="#">{{ $views }} Views</a></li>
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
