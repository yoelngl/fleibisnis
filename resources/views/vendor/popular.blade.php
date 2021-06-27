<div class="utf_box_widget margin-top-40">
<?php $popular = App\Models\TodayNews::join('news_views','news_views.id_post','=','today_news.id')->groupBy('today_news.id')->select('today_news.*',DB::raw('count(today_news.id) as total'))->orderBy('total','desc')->get();
 ?>
  <h3><i class="sl sl-icon-book-open"></i> {{ trans('message.popular-post') }}</h3>
  <ul class="utf_widget_tabs">
      @foreach ($popular as $item)
          <li>
            <div class="utf_widget_content">
              <div class="utf_widget_thum"> <a href="blog_detail_right_sidebar.html"><img src="{{ asset('storage/'.$item->images) }}" alt=""></a> </div>
              <div class="utf_widget_text">
                <h5><a href="{{ route('today_news.details',['slug' => $item->slug]) }}">{{ $item->title }}</a></h5>
                <span><i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($item->created_at)->format('d F, Y') }}</span>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
      @endforeach
  </ul>
</div>
