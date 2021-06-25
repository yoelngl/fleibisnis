@section('title')
Franchise Brand
@endsection

@section('vendor')
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/vendors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

<div class="app-content content">
    <!-- BEGIN: Content-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Franchise Brand</h2>
                    <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Widgets</a>
                        </li>
                        <li class="breadcrumb-item active">Franchise Brand
                        </li>
                    </ol>
                    </div>
                </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block ">
                <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <a href="{{ route('admin.brand.add') }}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" >Create Brand</a>
                </div>
                </div>
            </div>
            </div>
        <div class="content-body">
            <!-- Blog Edit -->
          <div class="blog-edit-wrapper">
              <div class="row">
              <div class="col-md-12 col-12">
                  <div class="card">
                  <div class="card-body">
                        <div class="row col-12" >
                                <div class="table-responsive">
                                  <table id="datatable" class="datatables-basic table ">
                                    <thead>
                                      <tr>
                                        <th>Images</th>
                                        <th>Brand Link</th>
                                        <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brand as $item)
                                        <tr>
                                            <td><img src="{{ asset('storage/'.$item->images) }}" width="100px" alt=""></td>
                                            <td>{{ $item->link }}</td>
                                            <td>
                                                <a class="badge badge-sm badge-warning cursor-pointer text-light" href="{{ route('admin.brand.edit',['id' => $item->id]) }}">edit</a>
                                                <span class="badge badge-sm badge-danger cursor-pointer" wire:click.prevent="$emit('deleteBrand','{{ $item->id }}')">delete</span></td>
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
          </div>
        </div>
    </div>
</div>

@push('scripts')
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
          @this.on('deleteBrand', id => {
              Swal.fire({
                  title: 'Are You Sure?',
                text: 'Brand will be deleted permanently!',
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: '#7367F0',
                  cancelButtonColor: '#EA5455',
                  confirmButtonText: 'Yes, Delete!'
              }).then((result) => {
              //if user clicks on delete
                  if (result.value) {
              // calling destroy method to delete
                      @this.call('deleteBrand',id)
              // success response
                      Swal.fire({title: 'Deleted',
                              text: 'Brand successfully deleted!',
                              icon: 'success'});
                  } else {
                      Swal.fire({
                          title: 'Cancelled!',
                          text: 'Brand delete Cancelled!',
                          icon: 'error'
                      });
                  }
              });
          });
        });
</script>

@endpush
