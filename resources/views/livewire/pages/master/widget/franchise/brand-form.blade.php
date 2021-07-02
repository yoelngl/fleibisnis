@section('title')
Brand Form
@endsection

@section('vendor')
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/forms/select/select2.min.css') }}">
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/css/pages/page-blog.min.css') }}">
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
                  <h2 class="content-header-title float-left mb-0">Brand Form</h2>
                  <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Widgets
                        </li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.brand') }}">Brand</a>
                        </li>
                        <li class="breadcrumb-item active">Form
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
                <div class="col-md-10">
                    <div class="card">
                    <div class="card-body">
                        <form class="mt-2" wire:submit.prevent="{{ isset($edit) ? 'updateBrand("'.$edit->id.'")' : 'createBrand' }}" >
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2">
                                    <label for="link">Link</label>
                                    <input
                                    type="text"
                                    id="link"
                                    class="form-control"
                                    wire:model.defer="link"
                                    placeholder="www.google.com"
                                    />
                                @error('link') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                            <div class="border rounded p-2">
                                <h4 class="mb-1">Images</h4>
                                <div class="media flex-column flex-md-row">
                                <img
                                <?php isset($images) ? $data = 'storage/'.$images
                                                           : $data = 'backend-assets/images/slider/03.jpg' ?>
                                    src="{{ asset($data) }}"
                                    id="blog-feature-image"
                                    class="rounded mr-2 mb-1 mb-md-0"
                                    width="170"
                                    height="110"
                                    alt="News Form Images"
                                    wire:ignore.self
                                />
                                <div class="media-body" >
                                    <small class="text-muted">Recommended image resolution 200x80, image size 10mb.</small>
                                    <p class="my-50">
                                        <a href="javascript:void(0);" id="blog-image-text" hidden>C:\fakepath\banners.jpg</a>
                                    </p>
                                    <div class="d-inline-block">
                                    <div class="form-group mb-0">
                                        <div class="custom-file" wire:ignore>
                                            <input type="file" wire:model="images" class="custom-file-input" id="blogCustomFile" accept="image/*" />
                                        <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                        </div>
                                        @error('images') <small class="text-danger">{{ $message }}</small> @enderror

                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-12 mt-50">
                                <img src="{{ asset('icons/loading.gif') }}" wire:loading wire:target="{{ isset($edit) ? 'updateBrand("'.$edit->id.'")' : 'createBrand' }}" alt="" width="60px">
                                <button type="submit" class="btn btn-primary mr-1" wire:target="{{ isset($edit) ? 'updateBrand("'.$edit->id.'")' : 'createBrand' }}" wire:loading.attr="hidden"
                                wire:loading.attr="hidden"> Submit</button>
                                <a href="{{ route('admin.brand') }}" wire:target="{{ isset($edit) ? 'updateBrand("'.$edit->id.'")' : 'createBrand' }}"  class="btn btn-danger" wire:loading.class="btn btn-secondary" wire:loading.attr="hidden">Back</a>
                            </div>
                        </div>
                        </form>
                        <!--/ Form -->
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
      <!-- END: Content-->
</div>

@push('scripts')
<script src="{{ asset('backend-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('backend-assets/js/scripts/pages/page-blog-edit.min.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/hbjeuw3i2rynhza5stqc8laavo0yd57y5q6chx8fr61bvmhr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endpush
