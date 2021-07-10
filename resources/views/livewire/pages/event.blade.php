@section('title')
Events
@endsection

@section('css')
    <style>

    .card-horizontal {
    display: flex;
    flex: 1 1 auto;
}

@media (max-width:767px) {
 .optionalstuff {
display: none;
}
}

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
    <div id="titlebar" class="gradient" style="background-image: url({{ isset($banner) ? asset('storage/'.$banner->image) : '../../images/page-title.jpg' }}">
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
                  <li><a href="{{ route('home') }}">Home</a></li>
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
                        <input type="text" wire:model="search" placeholder="Ex. Franchise Boba"/>
                    </div>
                    <div class="main_input_search_part_item intro-search-field" wire:ignore>
                        <select data-placeholder="All Categories" id="categories" class="selectpicker default" title="All Categories" data-live-search="true" data-selected-text-format="count" wire:model="category" data-size="5">
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endforeach
                        </select>
                    </div>
                    <button type="submit" class="button">{{ trans('message.find') }}</button>
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
                @if($franchise_week->count())
                @foreach ($franchise_week as $item)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="//www.youtube.com/watch?v={{ $item->url }}" data-lity class="blog_compact_part-container">
                  <div class="blog_compact_part"> <img src="{{ asset('storage/'.$item->images) }}" alt="">
                    <div class="blog_compact_part_content">
                      <h3>{{ $item->title }}</h3>
                      <ul class="blog_post_tag_part">
                        <li>{{ $item->category->title }}</li>
                      </ul>
                      <p>{{ $item->description }}</p>
                    </div>
                  </div>
                  </a>
                </div>
                @endforeach
                @else
                <img src="{{ asset('backend-assets/images/notFound.jpg') }}" width="auto" alt="">
                @endif
                @if($franchise_week->hasMorePages())
                <div class="col-md-12 centered_content"> <a wire:click="$emit('load-more')" class="button border margin-top-20">{{ trans('message.view-more') }}</a> </div>
                @endif
            </div>
         </div>

         <div class="col-lg-12 col-md-12">
            <div class="utf_dashboard_list_box" >
                <h4 style="background-color: rgba(10, 52, 90, 0.8)"><i class="sl sl-icon-star"></i>{{ trans('message.biz-event') }}</h4>
            </div>
                <ul class="margin-top-10">
                    <li><h4 class="margin-bottom-10 margin-top-10" style="color:#f52084;font-weight:bolder">{{ trans('message.feature') }}</h4></li>
                </ul>
            <ul>
                <li>
                    <div class="table-responsive">
                        <table class="table">
                            <th>{{ trans('message.date') }}</th>
                            <th>{{ trans('message.event') }} , {{ trans('message.activities') }}</th>
                            <tbody>
                                @if($event_schedule->count())
                                @foreach ($event_schedule as $item)
                                <tr>
                                    <td><h4>{{ $item->date }}</h4></td>
                                    <td width="65%"><a target="_blank" href="{{ url($item->link) }}"><h4 style="font-weight:bolder">{{ $item->title }}</h4></a>
                                    <small class="text-muted">{{ $item->location }}</small>
                                    <div class="container-fluid margin-top-20">
                                        <div class="row">
                                            <div class="col-12 mt-3">
                                                <div class="card">
                                                    <div class="card-horizontal">
                                                        <div class="img-square-wrapper" wire:ignore>
                                                            <div class="" >
                                                                @if ($item->images)
                                                                    <img class="optionalstuff"  src="{{ asset('storage/'.$item->images) }}" alt="Card image cap">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="card-text">
                                                            {!! Str::limit($item->activities,500) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="3">No Events here.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    @if($event_schedule->hasMorePages())
                    <div class="col-md-12 btn btn-sm"> <a wire:click="$emit('load-mores')" class="button border margin-top-20">{{ trans('message.view-more') }}</a> </div>
                    @endif
                </li>
            </ul>
         </div>
    </div>
    @include('layouts.footer')


@push('scripts')
<script>
$(document).on('change','#categories',function(){
        @this.set('category', this.value);
    });

</script>
@endpush
