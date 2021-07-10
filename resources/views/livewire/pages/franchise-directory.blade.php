@section('title')
    Franchise Directory
@endsection

<div>
    <div id="titlebar" class="gradient" style="background-image: url({{ isset($banner) ? asset('storage/'.$banner->image) : '../../images/page-title.jpg' }}">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Franchise Directory</h2>
              <nav id="breadcrumbs">
                <ul>
                  <li>{{ trans('message.directory-desc') }}</li>
                </ul>
              </nav>
            <nav id="breadcrumbs">
                <ul>
                  <li><a href="{{ route('home') }}">Home</a></li>
                  <li>Franchise Directory</li>
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
                <div class="utf_layout_nav">  <a href="javscript:void(0)" class="list active"><i class="fa fa-align-justify"></i></a> </div>
              </div>
              <div class="col-md-10 col-xs-10">
                <div class="sort-by">
                  <div class="utf_sort_by_select_item sort_by_margin" wire:ignore>
                    <select data-placeholder="Origins" id="origins" class="utf_chosen_select_single" >
                      <option value="">Origins</option>
                      @foreach ($origin as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="sort-by">
                  <div class="utf_sort_by_select_item sort_by_margin" wire:ignore>
                    <select data-placeholder="Categories" id="categories"  class="utf_chosen_select_single">
                      <option value="">Categories</option>
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="sort-by">
                  <div class="utf_sort_by_select_item utf_search_map_section">
                    <div class="row with-forms">
                        <div class="col-md-12">
                          <input type="text" wire:model="search" placeholder="Search, Ex. Franchise Boba" style="height: 40px" value=""/>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              @if($franchises->count())
              @foreach ($franchises as $franchise)
              <div class="col-lg-12 col-md-12">
                <div class="utf_listing_item-container list-layout"> <a href="{{ route('franchise-details',['slug' => $franchise->slug]) }}" class="utf_listing_item">
                  <div class="utf_listing_item-image">
                      <img src="{{ asset($franchise->brand_image ? '/storage/'.$franchise->brand_image : '/images/No_images.png')  }}" alt="">
                      <span class="tag">{{ $franchise->tag }}</span>
                  </div>
                  <div class="utf_listing_item_content">
                    <div class="utf_listing_item-inner">
                      <h3>{{ $franchise->brand_name }}</h3>
                      <span><i class="sl sl-icon-book-open"></i> {{ $franchise->category->title }}</span>
                      <div class="">
                          {!! Str::limit($franchise->brand_description,500) !!}
                      </div>
                    </div>
                  </div>
                  </a>
                </div>
              </div>
              @endforeach
              @else
                <img src="{{ asset('backend-assets/images/notFound.jpg') }}" width="auto" alt="">
                @endif
              @if($franchises->hasMorePages())
              <div class="col-md-12 centered_content"> <a wire:click="$emit('load-more')" class="button border margin-top-20">{{ trans('message.view-more') }}</a> </div>
              @endif

            </div>
            <div class="clearfix"></div>
          </div>

          <!-- Sidebar -->
          <div class="col-lg-4 col-md-4">
            <div class="sidebar">
            @include('vendor.contact')

            <div class="utf_box_widget margin-top-35">
                <h3>{{ trans('message.disclaimer') }}</h3>
                <p>{{ trans('message.disclaimer-desc') }}</p>
            </div>
            <div class="margin-top-35">
                <a href="{{ isset($ads) ? url($ads->link) : 'javascript:void(0)' }}" target="_blank">
                <img src="{{ isset($ads) ? asset('storage/'.$ads->image) : asset('images/600x900.jpg') }}"  alt="">
                </a>
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
        $('#investments').on('change',function(){
            @this.set('investments',this.value);
        });
        $('#origins').on('change',function(){
            @this.set('origins',this.value);
        });

        $( '.price' ).mask('000.000.000.000.000',
        {reverse: true}
        );
    </script>
@endpush
