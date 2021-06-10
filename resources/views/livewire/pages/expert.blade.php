@section('title')
Ask The Expert
@endsection

<div>
    <div id="titlebar" class="gradient">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Ask The Experts</h2>
              <nav id="breadcrumbs">
                <ul>
                  <li><a href="index_1.html">{{ trans('message.ask-expert-desc') }}</a></li>
                </ul>
              </nav>
            <nav id="breadcrumbs">
                <ul>
                  <li><a href="index_1.html">Home</a></li>
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
            <div class="container_categories_box margin-top-5 margin-bottom-75 sliders">
              <a href="{{ route('expert.details') }}" class="utf_category_small_box_part">  <i> <img style="border-radius: 50%;" width="100" src="http://2.bp.blogspot.com/-Mx8wpq2K7NU/VGY_O9pny5I/AAAAAAAAAqY/NS4fsJ8Rytk/s1600/merry%2B-7.png" alt=""> </i>
                <h4>Merry Riana</h4>
              </a>
              <a href="{{ route('expert.details') }}" class="utf_category_small_box_part"> <i><img style="border-radius: 50%;" class="mx-auto d-block" src="https://worldfranchisecentre.com/wp-content/uploads/2020/05/burang-riyadi.jpg" alt=""> </i>
                <h4>Burang Riyadi</h4>
              </a>
              <a href="{{ route('expert.details') }}" class="utf_category_small_box_part"> <i class=""></i>
                <h4>Anang Sukandar</h4>
              </a>
              <a href="{{ route('expert.details') }}" class="utf_category_small_box_part"> <i class=""></i>
                <h4>Djoko Kurniawan</h4>
              </a>
              <a href="{{ route('expert.details') }}" class="utf_category_small_box_part"> <i class=""></i>
                <h4>Bedi Zubaedi</h4>
              </a>
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
                  <h3><i class="sl sl-icon-magnifier"></i>{{ trans('message.search') }}</h3>
                  <div class="utf_search_blog_input">
                    <div class="input">
                      <input class="search-field" type="text" placeholder="{{ trans('message.find-expert') }}" value="">
                    </div>
                    <div class="input margin-top-20">
                        <input class="search-field" type="text" placeholder="Sort the Experts" value="">
                    </div>

                  <div class="clearfix"></div>
                </div>
                <div class="checkboxes margin-top-20">
                        <li>
                            <input id="MerryRiana" type="checkbox" name="check">
                            <label for="MerryRiana">Merry Riana</label>
                        </li>
                        <li>
                            <input id="BurangRiyadi" type="checkbox" name="check">
                            <label for="BurangRiyadi">Burang Riyadi</label>
                        </li>
                        <li>
                            <input id="AnangSukandar" type="checkbox" name="check">
                            <label for="AnangSukandar">Anang Sukandar</label>
                        </li>
                        <li>
                            <input id="DjokoKurniawan" type="checkbox" name="check">
                            <label for="DjokoKurniawan">Djoko Kurniawan</label>
                        </li>
                </div>
              </div>
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

                <div class="clearfix"></div>
              </div>
            </div>

            <div class="col-lg-8 col-md-8">
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
                  <li>
                    <div class="comments utf_listing_reviews dashboard_review_item">
                      <ul>
                        <li>
                          <div class="avatar"><img src="https://worldfranchisecentre.com/wp-content/uploads/2020/05/burang-riyadi.jpg" alt=""></div>
                          <div class="utf_comment_content">
                            <div class="utf_arrow_comment"></div>
                            <div class="utf_by_comment">Membangun Bisnis Jadi Waralaba</div>
                            <div class="pertanyaan"><b>{{ trans('message.question') }}</b></div>
                          <div class="jawaban">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</div>
                            <div class="pertanyaan"><b>{{ trans('message.answer') }}</b></div>
                            <div class="jawaban">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</div>
                            <br>
                                <div class="utf_by_comment"><a href="#" >Burang Riyadi</a>
                                <span class="date">Franchise Advisor | IG Franchise.Advisor</span>
                                </div>
                            </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <div class="comments utf_listing_reviews dashboard_review_item">
                      <ul>
                        <li>
                          <div class="avatar"><img src="http://2.bp.blogspot.com/-Mx8wpq2K7NU/VGY_O9pny5I/AAAAAAAAAqY/NS4fsJ8Rytk/s1600/merry%2B-7.png" alt=""></div>
                          <div class="utf_comment_content">
                            <div class="utf_arrow_comment"></div>
                            <div class="utf_by_comment">Susahnya Mengatur Karyawan</div>
                            <div class="pertanyaan"><b>{{ trans('message.question') }}</b></div>
                          <div class="jawaban">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</div>
                          <div class="pertanyaan"><b>{{ trans('message.answer') }}</b></div>
                          <div class="jawaban">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</div>
                          <br>
                          <div class="utf_by_comment"><a href="#"> Merry Riana </a> <span class="date">Motivator, Entrepreneur | IG Merry.Riana</span>
                            </div>
                        </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12">
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

@push('scripts')
<script>
    $(document).ready(function(){

$('.sliders').slick({
  dots: true,
  infinite: false,
  speed: 300,
  arrows: false,
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
</script>
@endpush
