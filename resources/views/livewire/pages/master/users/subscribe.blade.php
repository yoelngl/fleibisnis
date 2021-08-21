@section('title')
    Subscribes
@endsection

<div>
    <div class="app-content content">
        <!-- BEGIN: Content-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">User Subscription</h2>
                        <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Users</a>
                            </li>
                            <li class="breadcrumb-item active">User Subscription
                            </li>
                        </ol>
                        </div>
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
                                            <th>No</th>
                                            <th>Email</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->email }}</td>
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
        });
</script>

@endpush
    
