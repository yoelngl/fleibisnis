@section('title')
Ask The Expert
@endsection

<div>
    <div id="titlebar" class="gradient" style="background-image: url({{ isset($banner) ? asset('storage/'.$banner->image) : '../../images/page-title.jpg' }}">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Ask The Experts</h2>
              <nav id="breadcrumbs">
                <ul>
                  <li><a href="{{ route('home') }}">{{ trans('message.ask-expert-desc') }}</a></li>
                </ul>
              </nav>
            <nav id="breadcrumbs">
                <ul>
                  <li><a href="{{ route('home') }}">Home</a></li>
                  <li>Ask The Experts</li>
                </ul>
              </nav></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="headline_part centered ">Ask The Expert</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="container_categories_box margin-top-5 margin-bottom-75 sliders" wire:ignore>
              @foreach ($experts as $expert)
              <a href="{{ route('expert.details',['slug' => $expert->slug]) }}" class="utf_category_small_box_part">  <i> <img style="border-radius: 50%;" width="100" src="{{ asset('storage/'.$expert->images) }}" alt="Expert images"> </i>
                <h4>{{ $expert->name }}</h4>
              </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="blog-page">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="sidebar right">
        <div class="utf_box_widget booking_widget_box">
          <h3><i class="sl sl-icon-direction"></i> {{ trans('message.search') }}
		  </h3>
          <div class="row with-forms margin-top-0">
            <div class="col-lg-12 col-md-12 select_date_box">
              <input type="text" wire:model="search" placeholder="{{ trans('message.search') }} Experts">
			  <i class="fa fa-search"></i>
            </div>
			<div class="with-forms margin-top-0" wire:ignore>
				<div class="col-lg-12 col-md-12">
					<select wire:model="experts_name" id="experts" class="utf_chosen_select_single" >
					  <option value=""  label="Select Expert">Select Experts</option>
                      @foreach ($experts as $item)
					    <option value="{{ $item->slug }}" label="Select Expert">{{ $item->name }}</option>
                      @endforeach
					</select>
				</div>
			</div>
          </div>
          <div class="clearfix"></div>
        </div>
        @include('vendor.contact')


                <div class="clearfix"></div>
              </div>
            </div>

            <div class="col-lg-8 col-md-8 ">
              <div class="utf_dashboard_list_box margin-top-0" >
                <h4 style="background-color: rgba(10, 52, 90, 0.8)"><i class="sl sl-icon-star"></i> Ask The Experts</h4>
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                  <div class="small_dialog_header">
                    <h3>Reply to Review</h3>
                  </div>
                  <div class="utf_message_reply_block margin-top-0">
                    <textarea cols="40" rows="3" placeholder="Your Message..."></textarea>
                    <button class="button">Reply Message</button>
                  </div>
                </div>
                <ul>
                @if($qna->count())
                    @foreach ($qna as $item)
                    <li>
                        <div class="comments utf_listing_reviews dashboard_review_item">
                          <ul>
                            <li>
                              <div class="avatar"><img src="{{ asset('storage/'.$item->expert->images) }}" alt=""></div>
                              <div class="utf_comment_content">
                                <div class="utf_arrow_comment"></div>
                                <div class="utf_by_comment">{{ $item->title }}</div>
                                <div class="pertanyaan"><b>{{ trans('message.question') }}</b></div>
                              <div class="jawaban">{!! $item->question !!}</div>
                                <div class="pertanyaan"><b>{{ trans('message.answer') }}</b></div>
                                <div class="jawaban"><p>{!! Str::limit($item->answer,1000,$end="..... <p><a href='". route('expert.details',['slug' => $item->expert->slug]) ."'>Lihat selengkapnya!</a></p>") !!}</p></div>
                                <br>
                                    <div class="utf_by_comment"><a href="{{ route('expert.details',['slug' => $item->expert->slug]) }}" >{{ $item->expert->name }}</a>
                                    <span class="date">{{ $item->expert->position }}</span>
                                    </div>
                                </div>
                            </li>
                          </ul>
                        </div>
                      </li>
                    @endforeach
                @else
                <img src="{{ asset('backend-assets/images/notFound.jpg') }}" width="auto" alt="">
                @endif
                </ul>
              </div>
            <div class="clearfix"></div>
            @if($qna->hasMorePages())
            <div class="col-md-12 centered_content "> <a wire:click="$emit('load-more')" class="button border margin-top-20">{{ trans('message.view-more') }}</a> </div>
            @endif
            </div>
          </div>
        </div>
      </div>
</div>
@include('layouts.footer')


@push('scripts')
<script>
    $(document).ready(function(){

        $(document).on('change','#experts',function(){
        @this.set('experts_name', this.value);
    });
    var item_length = $('.sliders > div').length - 1;
    $('.sliders').slick({
      infinite: false,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 3000,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    });

    slider.on('afterChange', function(event, slick, currentSlide, nextSlide){
        //check the length of total items in .slide container
      //if that number is the same with the number of the last slider
      //Then pause the slider
      if( item_length === slider.slick('slickCurrentSlide') ){
        //this should do the same thing -> slider.slickPause();
        slider.slickSetOption("autoplay",false,false)
      };
    });
</script>
@endpush
