@section('title')
    Home
@endsection

<div>
    @if($slider->count())
    <div id="utf_rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
      <div id="utf_rev_slider_block" class="rev_slider home fullwidthabanner" style="display:none;" data-version="5.0.7">
        <ul>
            @foreach ($slider as $key => $value)
              <li data-index="rs-{{ $key }}" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">
                  <a href="{{ $value->link }}" target="_blank">
                <img src="{{ isset($value) ? asset('storage/'.$value->images) : asset('images/search_slider_bg_1.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"></a>
                  <div class="tp-caption centered utf_custom_caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
      				id="utf_slide_layer_item_one"
      				data-x="['center','center','center','center']" data-hoffset="['0']"
      				data-y="['70','30','20','0']" data-voffset="['0']"
      				data-width="['900','620', 640','420','320']"
      				data-height="auto"
      				data-whitespace="nowrap"
      				data-transform_idle="o:1;"
      				data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo"
      				data-transform_out=""
      				data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;"
      				data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
      				data-start="1000"
      				data-responsive_offset="on">
                  <div class="utf_item_title margin-bottom-15"
      				id="utf_slide_layer_detail_one"
      				data-x="['center','center','center','center']"
      				data-hoffset="['0','0','0','0']"
      				data-y="['20','20','20','20']"
      				data-voffset="['-40','-40','-20','-80']"
                    data-fontsize="['45','23','23','23','23']"
      				data-lineheight="['70','60','34','30','25']"
      				data-width="['960','620', 640','420','320']"
      				data-height="none" data-whitespace="normal"
      				data-transform_idle="o:1;"
      				data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
      				data-transform_out="opacity:0;s:300;"
      				data-start="600"
      				data-splitin="none"
      				data-splitout="none"
      				data-basealign="slide"
      				data-responsive_offset="off"
      				data-responsive="off"
      				style="z-index:6;color:#fff;letter-spacing:0px;font-weight:500;">{{ $value->title }}</div>
                  <div class="utf_rev_description_text">{{ $value->description }}</div>
                  @if($value->title != null && $value->description != null)
                      <a href="{{ ($value->link) ? $value->link : '#' }}" target="_blank" class="button medium">View More</a>
                  @endif
      		 </div>
             </li>
            @endforeach

        </ul>
        <div class="tp-static-layers"></div>
      </div>
    </div>
    @else
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
  @endif


    <div style="padding-bottom: 50px; background: url({{ isset($search_bg) ? asset('storage/'.$search_bg->image) : '../../images/page-title.jpg' }})" >
            <div class="container" >
                <div class="row d-flex align-items-center">
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="main_input_search_part d-flex align-items-center">
                            <div class="main_input_search_part_item">
                                <input type="text" wire:model.defer="search" placeholder="Ex. Franchise Boba"/>
                            </div>
                            <div class="main_input_search_part_item intro-search-field" wire:ignore>
                                <select  id="categories" data-placeholder="All Category" class="selectpicker default" title="All Category" data-live-search="true" data-selected-text-format="count" data-size="5">
                                    @foreach ($categories as $item)
                                    <option value="{{ $item->slug }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="button" wire:click="find">{{ trans('message.find') }}</button>
                        </div>
                    </div>
                </div>
            </div>
      </div>

    <a href="{{ isset($ads) ? url($ads->link) : 'javascript:void(0)' }}" target="_blank" >
        <img src="{{ isset($ads) ? asset('storage/'.$ads->image) : '../../images/page-title.jpg' }}" width="100%" class="flip-banner-content " width="auto" alt="Ads images">
    </a>

    <section class="fullwidth_block margin-bottom-0 padding-top-30 padding-bottom-65" data-background-color="linear-gradient(to bottom, #f9f9f9 0%, rgba(255, 255, 255, 1))">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="headline_part centered margin-bottom-40 margin-top-30">{{ trans('message.merk-franchise') }}</h3>
                </div>
                <div class="col-md-12">
                    <center>
                    <div class="companie-logo sliders margin-bottom-10">
                        @foreach ($brand as $item)
                        <div class="item">
                            <center>
                            <a href="{{ $item->link }}" target="_blank"><img src="{{ asset('storage/'.$item->images) }}" alt=""></a>
                        </div>
                        @endforeach
                    </div>
                </center>

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
                        @foreach ($franchises->take(3) as $item)
                        <div class="utf_carousel_item"> <a href="{{ route('franchise-details',['slug' => $item->slug]) }}" class="utf_listing_item-container compact">
                            <div class="utf_listing_item"> <img src="{{ asset($item->brand_image ? '/storage/'.$item->brand_image : '/images/No_images.png')  }}" alt="Franchise Images"> <span class="tag"><i class="im  im-icon-Tag-3"></i> {{ $item->category->title }}</span>
                                <div class="utf_listing_item_content">
                                    <h3>{{ $item->brand_name }}</h3>
                                    <span><i class="sl sl-icon-location"></i> {{ $item->brand_country ? $item->brand_country : 'Tidak ada data' }}</span>
                                    <span ><i class="sl sl-icon-tag"></i> <b class="price">{{ $item->investment_value ? $item->investment_value : 'Tidak ada data' }}</b></span>
                                </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-12 centered_content"> <a href="{{ route('franchise-directory') }}" class="button border margin-top-20">{{ trans('message.view-more') }}</a> </div>
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
            @foreach ($today_news->take(4) as $item)
              <div class="col-md-3 col-sm-6 col-xs-12 " style="margin-bottom: 20px;"> 
                <a href="{{ route('today_news.details',['slug' => $item->slug]) }}" >
                <div class="blog_compact_part"> 
                  <img src="{{ asset('storage/'.$item->images) }}" alt="">
                  <div class="blog_compact_part_content">
                    <h3>{{ $item->title }}</h3>
                    <ul class="blog_post_tag_part">
                      <li>{{ $item->category->title }} / {{ Carbon\Carbon::parse($item->created_at)->format('d F, Y') }}</li>
                    </ul>

                  </div>
                </div>
                </a>
              </div>
            @endforeach
          </div>
          <div class="col-md-12 centered_content"> <a href="{{ route('today-news') }}" class="button border margin-top-20">{{ trans('message.view-more') }}</a> </div>
        </div>
      </section>

</div>
@include('layouts.footer')


@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>

<script>

    $('.price').mask('000.000.000.000.000',
    {reverse: true}
    );
    var tpj=jQuery;
    var revapi4;
    tpj(document).ready(function() {
    if(tpj("#utf_rev_slider_block").revolution == undefined){
    	revslider_showDoubleJqueryError("#utf_rev_slider_block");
    }else{
    	revapi4 = tpj("#utf_rev_slider_block").show().revolution({
    		sliderType:"standard",
    		jsFileLocation:"scripts/",
    		sliderLayout:"auto",
    		dottedOverlay:"none",
    		delay:6000,
    		navigation: {
    			keyboardNavigation:"off",
    			keyboard_direction: "horizontal",
    			mouseScrollNavigation:"off",
    			onHoverStop:"on",
    			touch:{
    				touchenabled:"on",
    				swipe_threshold: 75,
    				swipe_min_touches: 1,
    				swipe_direction: "horizontal",
    				drag_block_vertical: false
    			}
    			,
    			arrows: {
    				style:"zeus",
    				enable:true,
    				hide_onmobile:true,
    				hide_under:600,
    				hide_onleave:true,
    				hide_delay:200,
    				hide_delay_mobile:1200,
    				tmp:'<div class="tp-title-wrap"></div>',
    				left: {
    					h_align:"left",
    					v_align:"center",
    					h_offset:40,
    					v_offset:0
    				},
    				right: {
    					h_align:"right",
    					v_align:"center",
    					h_offset:40,
    					v_offset:0
    				}
    			}
    			,
    			bullets: {
    			enable:false,
    			hide_onmobile:true,
    			hide_under:600,
    			style:"hermes",
    			hide_onleave:true,
    			hide_delay:200,
    			hide_delay_mobile:1200,
    			direction:"horizontal",
    			h_align:"center",
    			v_align:"bottom",
    			h_offset:0,
    			v_offset:30,
    			space:6,
    			tmp:''
    			}
    		},
    		viewPort: {
    		enable:true,
    		outof:"pause",
    		visible_area:"80%"
    	},
    	responsiveLevels:[1200,992,768,480],
    	visibilityLevels:[1200,992,768,480],
    	gridwidth:[1180,1024,778,480],
    	gridheight:[565,900,800,800],
    	lazyType:"none",
    	parallax: {
    		type:"mouse",
    		origo:"slidercenter",
    		speed:2200,
    		levels:[2,3,4,5,6,7,12,16,10,25,47,48,49,50,51,55],
    		type:"mouse",
    	},
    	shadow:0,
    	spinner:"off",
    	stopLoop:"off",
    	stopAfterLoops:-1,
    	stopAtSlide:-1,
    	shuffle:"off",
    	autoHeight:"off",
    	hideThumbsOnMobile:"off",
    	hideSliderAtLimit:0,
    	hideCaptionAtLimit:0,
    	hideAllCaptionAtLilmit:0,
    	debugMode:false,
    	fallbacks: {
    		simplifyAll:"off",
    		nextSlideOnWindowFocus:"off",
    		disableFocusListener:false,
    	}
    });
    }
    $('.sliders').slick({
      arrows:false,
      infinite: false,
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 5,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });
    });


    // var typed = new Typed('.typed-words', {
    // strings: ["Terbaik"," Terlengkap"," Termurah"],
    //     typeSpeed: 80,
    //     backSpeed: 80,
    //     backDelay: 4000,
    //     startDelay: 1000,
    //     loop: true,
    //     showCursor: true
    // });
    $(document).ready(function (){
        @include('vendor.helpers')
        $('#categories').on('change',function(){
            @this.set('category',this.value);
        });
    });


</script>
@endpush
