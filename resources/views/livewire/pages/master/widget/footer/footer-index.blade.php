@section('title')
Footer
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
            <div class="content-header-left col-md-12 col-12 mb-2">
              <div class="row breadcrumbs-top">
                <div class="col-12">
                  <h2 class="content-header-title float-left mb-0">Footer</h2>
                  <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Widgets
                        </li>
                        <li class="breadcrumb-item active">Footer
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
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-body">
                        <form class="mt-2" wire:submit.prevent="{{ isset($edit) ? 'updateFooter("'.$edit->id.'")' : 'createFooter' }}" >
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="phone">Phone</label>
                                    <input
                                    type="text"
                                    id="phone"
                                    class="form-control"
                                    wire:model.defer="phone"
                                    placeholder="Contact Phone"
                                    />
                                @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="website">Website</label>
                                    <input
                                    type="text"
                                    id="website"
                                    class="form-control"
                                    wire:model.defer="website"
                                    placeholder="www.google.com"
                                    />
                                @error('website') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="linkedin">Email</label>
                                    <input
                                    type="email"
                                    id="email"
                                    class="form-control"
                                    wire:model="email"
                                    placeholder="Email"
                                    />
                                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="facebook">Facebook</label>
                                    <input
                                    type="text"
                                    id="facebook"
                                    class="form-control"
                                    wire:model="facebook"
                                    placeholder="Link Facebook"
                                    />
                                @error('facebook') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="instagram">Instagram</label>
                                    <input
                                    type="text"
                                    id="instagram"
                                    class="form-control"
                                    wire:model="instagram"
                                    placeholder="Link Instagram"
                                    />
                                @error('instagram') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="form-group mb-2">
                                    <label for="twitter">Twitter</label>
                                    <input
                                    type="text"
                                    id="twitter"
                                    class="form-control"
                                    wire:model="twitter"
                                    placeholder="Link Twitter"
                                    />
                                @error('twitter') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="form-group mb-2">
                                    <label for="linkedin">LinkedIn</label>
                                    <input
                                    type="text"
                                    id="linkedin"
                                    class="form-control"
                                    wire:model="linkedin"
                                    placeholder="Link LinkedIn"
                                    />
                                @error('linkedin') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="form-group mb-2">
                                    <label for="youtube">Youtube</label>
                                    <input
                                    type="text"
                                    id="youtube"
                                    class="form-control"
                                    wire:model="youtube"
                                    placeholder="Link Youtube"
                                    />
                                @error('youtube') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2">
                                    <label for="copyright">Copyright</label>
                                    <input
                                    type="text"
                                    id="copyright"
                                    class="form-control"
                                    wire:model="copyright"
                                    placeholder="PT. Pameran Masa Kini"
                                    />
                                @error('copyright') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2" >
                                    <label>Address</label>
                                    <div wire:ignore>
                                        <textarea class="form-control" wire:model="address"></textarea>
                                    </div>
                                        @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2" >
                                    <label>About</label>
                                    <div wire:ignore>
                                        <textarea class="form-control" wire:model="about"></textarea>
                                    </div>
                                        @error('about') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                            </div>
                            <div class="col-12 mt-50">
                                <img src="{{ asset('icons/loading.gif') }}" wire:loading wire:target="{{ isset($edit) ? 'updateFooter("'.$edit->id.'")' : 'createFooter' }}" alt="" width="60px">
                                <button type="submit" class="btn btn-primary mr-1" wire:target="{{ isset($edit) ? 'updateFooter("'.$edit->id.'")' : 'createFooter' }}" wire:loading.attr="hidden"
                                wire:loading.attr="hidden"> Submit</button>
                                <a href="{{ route('admin.ask_expert') }}" wire:target="{{ isset($edit) ? 'updateFooter("'.$edit->id.'")' : 'createFooter' }}"  class="btn btn-danger" wire:loading.class="btn btn-secondary" wire:loading.attr="hidden">Back</a>
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
<script type="text/javascript">
    @include('vendor.helpers')
</script>
@endpush
