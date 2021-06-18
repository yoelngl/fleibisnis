@section('title')
Retail Directory
@endsection
<div>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Retail Directory</h2>
                    <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Retail Directory
                        </li>
                    </ol>
                    </div>
                </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block ">
                <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <a href="{{ route('admin.retail.add') }}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" >Create Retails</a>
                </div>
                </div>
            </div>
            </div>
            <div class="content-detached content-left">
                <div class="content-body"><!-- Blog List -->
                    <div class="blog-list-wrapper">
                      <div class="row">
                      @if($retail->count())
                        @foreach($retail as $item)
                          <div class="col-md-4 col-12">
                          <div class="card">
                              <a href="{{ route('retail-details',['slug' => $item->slug]) }}">
                              <img class="card-img-top img-fluid" width="200" src="{{ asset('storage/'.$item->product_images) }}" alt="Blog Post pic" />
                              </a>
                              <div class="card-body">
                              <h4 class="card-title">
                                  <a href="{{ route('retail-details',['slug' => $item->slug]) }}" class="blog-title-truncate text-body-heading">
                                      {{ $item->product_name }}
                                  </a>
                              </h4>
                              <div class="media">
                                  <div class="avatar mr-50">
                                  <img src="{{ asset('backend-assets/images/portrait/small/avatar-s-7.jpg') }}" alt="Avatar" width="24" height="24" />
                                  </div>
                                  <div class="media-body">
                                  <small class="text-muted mr-25">by</small>
                                  <small><a href="javascript:void(0);" class="text-body">{{ $item->user->username }}</a></small>
                                  <span class="text-muted ml-50 mr-25">|</span>
                                  <small class="text-muted">{{ $item->created_at->format('d F, Y') }}</small>
                                  </div>
                              </div>
                              <div class="my-1 py-25">
                                  <a wire:click="tags('{{ $item->category->slug }}')">
                                  <div class="badge badge-light-primary mr-50">{{ $item->category->title }}</div>
                                  </a>
                              </div>
                              <hr />
                              <div class="d-flex justify-content-between align-items-center">
                                  <a href="page-blog-detail.html#blogComment">
                                  <div class="d-flex align-items-center">
                                  </div>
                                  </a>
                                  <div>
                                  <a href="{{ route('retail-details',['slug' => $item->slug]) }}" class="font-weight-bold  mr-1">Details</a>
                                  <a href="{{ route('admin.retail.edit',['slug' => $item->slug]) }}" class="font-weight-bold text-warning mr-1">Edit</a>
                                  <a wire:click.prevent="$emit('deleteRetail','{{ $item->slug }}')" class="font-weight-bold text-danger mr-1">Delete</a>
                                  </div>

                              </div>
                              </div>
                          </div>
                          </div>
                        @endforeach
                        @if($retail->hasMorePages())
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" wire:click="$emit('load-more')">Load more!</button>
                        </div>
                        @endif
                      @else
                          <div class="col-12">
                              <div class="alert alert-warning" role="alert">
                              <div class="alert-body">
                                  <strong>Warning:</strong> There is no retail here yet, please add retail by pressing the Create Retails button!
                              </div>
                              </div>
                          </div>
                      @endif
                      </div>
                        <!--/ Blog List Items -->
                    </div>
                </div>
              </div>
            <div class="sidebar-detached sidebar-right">
                <div class="sidebar"><div class="blog-sidebar my-2 my-lg-0">
                    <!-- Search bar -->
                    <div class="blog-search">
                        <div class="input-group input-group-merge">
                            <input type="text" wire:model="search" class="form-control" placeholder="Search here" />
                            <div class="input-group-append">
                            <span class="input-group-text cursor-pointer" wire:ignore>
                                <i data-feather="search"></i>
                            </span>
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="blog-categories mt-2">
                        <h6 class="section-label">Add Categories</h6>
                        <form wire:submit.prevent="categoriesAdd">
                            <div class="form-group mb-1">
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" wire:model="title" placeholder="Categories title" />
                                <div class="input-group-append">
                                        <span class="input-group-text" wire:ignore>
                                            <i data-feather="tag"></i>
                                        </span>
                                </div>
                            </div>
                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <img src="{{ asset('icons/loading.gif') }}" wire:loading wire:target="categoriesAdd" alt="" width="50px">
                                <button type="submit" class="btn btn-sm btn-primary mr-1" wire:target="categoriesAdd" wire:loading.attr="hidden"> Submit</button>
                        </form>
                    <h6 class="section-label mt-2">Categories</h6>
                    @if($categories->count())
                    @foreach ($categories as $category)
                        <div class="mt-1">
                            <div class="d-flex  align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-primary rounded">
                                                <div class="avatar-content">
                                                <div wire:ignore><i data-feather="arrow-right" class="avatar-icon font-medium-1"></i></div>
                                        </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" wire:ignore>
                                        <div class="blog-category-title text-body">{{ $category->title }} <span class="badge badge-danger" wire:click.prevent="$emit('deleteCategory','{{ $category->slug }}')">delete</span></div>
                                    </a>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <div class="mt-1">
                        <div class="d-flex  align-items-center mb-75">
                            <a href="javascript:void(0);">
                                <div class="blog-category-title text-body">There are no categories here!</div>
                            </a>
                        </div>
                    </div>
                    @endif

                    </div>
                    <!--/ Categories -->
                </div>

                </div>
              </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('backend-assets/js/scripts/extensions/ext-component-sweet-alerts.min.js') }}"></script>
    <script>
        @include('vendor.helpers')
        $(document).ready(function () {
          @this.on('deleteRetail', slug => {
              Swal.fire({
                  title: 'Are You Sure?',
                  text: 'Retail will be deleted permanently!',
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: '#7367F0',
                  cancelButtonColor: '#EA5455',
                  confirmButtonText: 'Yes, Delete!'
              }).then((result) => {
              //if user clicks on delete
                  if (result.value) {
              // calling destroy method to delete
                      @this.call('deleteRetail',slug)
              // success response
                      Swal.fire({title: 'Deleted',
                              text: 'Retail successfully deleted!',
                              icon: 'success'});
                  } else {
                      Swal.fire({
                          title: 'Cancelled!',
                          text: 'Retail delete Cancelled!',
                          icon: 'error'
                      });
                  }
              });
          });
            @this.on('deleteCategory', slug => {
                Swal.fire({
                    title: 'Are You Sure?',
                    text: 'Category will be deleted permanently!',
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#7367F0',
                    cancelButtonColor: '#EA5455',
                    confirmButtonText: 'Yes, Delete!'
                }).then((result) => {
                //if user clicks on delete
                    if (result.value) {
                // calling destroy method to delete
                        @this.call('deleteCategory',slug)
                // success response
                        Swal.fire({title: 'Deleted',
                                text: 'Category successfully deleted!',
                                icon: 'success'});
                    } else {
                        Swal.fire({
                            title: 'Cancelled!',
                            text: 'Category delete Cancelled!',
                            icon: 'error'
                        });
                    }
                });
            });
        });
    </script>
@endpush
