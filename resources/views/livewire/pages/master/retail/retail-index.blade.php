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
                            <div class="col-md-6 col-12">
                                <div class="card">
                                <a href="page-blog-detail.html">
                                    <img class="card-img-top img-fluid" src="../../../app-assets/images/slider/02.jpg" alt="Blog Post pic" />
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading"
                                        >The Best Features Coming to iOS and Web design</a
                                    >
                                    </h4>
                                    <div class="media">
                                    <div class="avatar mr-50">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" width="24" height="24" />
                                    </div>
                                    <div class="media-body">
                                        <small class="text-muted mr-25">by</small>
                                        <small><a href="javascript:void(0);" class="text-body">Ghani Pradita</a></small>
                                        <span class="text-muted ml-50 mr-25">|</span>
                                        <small class="text-muted">Jan 10, 2020</small>
                                    </div>
                                    </div>
                                    <div class="my-1 py-25">
                                    <a href="javascript:void(0);">
                                        <div class="badge badge-pill badge-light-info mr-50">Quote</div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="badge badge-pill badge-light-primary">Fashion</div>
                                    </a>
                                    </div>
                                    <p class="card-text blog-content-truncate">
                                    Donut fruitcake soufflé apple pie candy canes jujubes croissant chocolate bar ice cream.
                                    </p>
                                    <hr />
                                    <div class="d-flex justify-content-between align-items-center">
                                    <a href="page-blog-detail.html#blogComment">
                                        <div class="d-flex align-items-center">
                                        <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                        <span class="text-body font-weight-bold">76 Comments</span>
                                        </div>
                                    </a>
                                    <a href="page-blog-detail.html" class="font-weight-bold">Read More</a>
                                    </div>
                                </div>
                                </div>
                            </div>
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
                            <input type="text" class="form-control" placeholder="Search here" />
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
