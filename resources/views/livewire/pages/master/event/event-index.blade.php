@section('title')
Event
@endsection

@section('vendor')
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/vendors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
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
                    <h2 class="content-header-title float-left mb-0">Event</h2>
                    <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.event') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Event
                        </li>
                    </ol>
                    </div>
                </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block ">
                <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <a href="{{ route('admin.event.add') }}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" >Create Event Schedule</a>
                    <a href="{{ route('admin.franchise-week') }}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" >Create Franchise Week</a>
                </div>
                </div>
            </div>
            </div>
            <div class="content-detached content-left">
                <div class="content-body"><!-- Blog List -->
                    <div class="blog-list-wrapper">
                      <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                            <div class="card-body">
                                  <h3>Franchise Week</h3>
                                  <div class="row col-12" wire:ignore >
                                          <div class="table-responsive">
                                            <table id="datatable" class="datatables-basic table ">
                                              <thead>
                                                <tr>
                                                  <th>Images</th>
                                                  <th>Title</th>
                                                  <th>Category</th>
                                                  <th>Actions</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach ($franchise_weeks as $item)
                                                  <tr>
                                                      <td><img src="{{ asset('storage/'.$item->images) }}" alt="" width="100"></td>
                                                      <td>{{ $item->title }}</td>
                                                      <td>{{ $item->category->title }}</td>
                                                      <td>
                                                          <a class="badge badge-sm badge-warning cursor-pointer text-light" href="{{ route('admin.franchise-week.edit',['slug' => $item->slug]) }}">edit</a>
                                                          <span class="badge badge-sm badge-danger cursor-pointer" wire:click.prevent="$emit('deleteFranchiseWeek','{{ $item->slug }}')">delete</span></td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>

                                            </table>
                                          </div>
                                    </div>
                                <div id="blog-editor-wrapper" hidden>
                                    <div id="blog-editor-container">
                                      <div class="editor">
                                      </div>
                                    </div>
                               </div>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="card">
                            <div class="card-body">
                                  <h3>Event Schedule</h3>
                                  <div class="row col-12" wire:ignore >
                                          <div class="table-responsive">
                                            <table id="datatables" class="datatables-basic table ">
                                              <thead>
                                                <tr>
                                                  <th>Poster</th>
                                                  <th>Title</th>
                                                  <th>Category</th>
                                                  <th>Date</th>
                                                  <th>Actions</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach ($event_schedules as $item)
                                                  <tr>
                                                      <td><img src="{{ asset('storage/'.$item->images) }}" alt="" width="100"></td>
                                                      <td>{{ $item->title }}</td>
                                                      <td>{{ $item->category->title }}</td>
                                                      <td>{{ $item->date }}</td>
                                                      <td>
                                                          <a class="badge badge-sm badge-warning cursor-pointer text-light" href="{{ route('admin.event.edit',['slug' => $item->slug]) }}">edit</a>
                                                          <span class="badge badge-sm badge-danger cursor-pointer" wire:click.prevent="$emit('deleteEvent','{{ $item->slug }}')">delete</span></td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>

                                            </table>
                                          </div>
                                    </div>
                                <div id="blog-editor-wrapper" hidden>
                                    <div id="blog-editor-container">
                                      <div class="editor">
                                      </div>
                                    </div>
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
<script src="{{ asset('backend-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/tables/datatable/jszip.min.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
<script>
    @include('vendor.helpers')

    $(document).ready(function () {
        $('#datatable').DataTable();
        $('#datatables').DataTable();

        @this.on('deleteFranchiseWeek', slug => {
            Swal.fire({
                title: 'Are You Sure?',
                text: 'Franchise Week will be deleted permanently!',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#7367F0',
                cancelButtonColor: '#EA5455',
                confirmButtonText: 'Yes, Delete!'
            }).then((result) => {
            //if user clicks on delete
                if (result.value) {
            // calling destroy method to delete
                    @this.call('deleteFranchiseWeek',slug)
            // success response
                    Swal.fire({title: 'Deleted',
                            text: 'Franchise Week successfully deleted!',
                            icon: 'success'});
                } else {
                    Swal.fire({
                        title: 'Cancelled!',
                        text: 'Franchise Week delete Cancelled!',
                        icon: 'error'
                    });
                }
            });
        });

        @this.on('deleteEvent', slug => {
            Swal.fire({
                title: 'Are You Sure?',
                text: 'Event Schedule will be deleted permanently!',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#7367F0',
                cancelButtonColor: '#EA5455',
                confirmButtonText: 'Yes, Delete!'
            }).then((result) => {
            //if user clicks on delete
                if (result.value) {
            // calling destroy method to delete
                    @this.call('deleteEvent',slug)
            // success response
                    Swal.fire({title: 'Deleted',
                            text: 'Event Schedule successfully deleted!',
                            icon: 'success'});
                } else {
                    Swal.fire({
                        title: 'Cancelled!',
                        text: 'Event Schedule delete Cancelled!',
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
