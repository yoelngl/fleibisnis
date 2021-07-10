@section('title')
Event Schedule
@endsection

@section('vendor')
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/forms/select/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/pickers/pickadate/pickadate.css"') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">


@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/css/pages/page-blog.min.css') }}">

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
                        <h2 class="content-header-title float-left mb-0">Event Schedule</h2>
                        <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home
                            </li>
                            <li class="breadcrumb-item active"><a href="{{ route('admin.event') }}">Event</a>
                            </li>
                            <li class="breadcrumb-item">Event Schedule</li>
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
                          {{-- <div class="media">
                          <div class="avatar mr-75">
                              <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" width="38" height="38" alt="Avatar" />
                          </div>
                          <div class="media-body">
                              <h6 class="mb-25">Chad Alexander</h6>
                              <p class="card-text">May 24, 2020</p>
                          </div>
                          </div> --}}
                          <!-- Form -->

                          <form class="mt-2" wire:submit.prevent="{{ isset($edit) ? 'updateEvent("'.$edit->slug.'")' : 'createEvent' }}" >
                          <div class="row">
                              <div class="col-md-6 col-12">
                              <div class="form-group mb-2">
                                  <label for="title">Title</label>
                                  <input
                                  type="text"
                                  id="title"
                                  class="form-control"
                                  wire:model="title"
                                  placeholder="Title"
                                  />


                              @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                              </div>
                              </div>
                              <div class="col-md-6 col-12">
                                  <div class="form-group mb-2">
                                      <label for="categories">Category</label>
                                      <div wire:ignore>
                                          <select id="categories" wire:model="category" class="select2 form-control">
                                          <option value="" selected>-- Choose Category --</option>
                                          @foreach($categories as $category)
                                              <option value="{{ $category->id }}" >{{ $category->title }}</option>
                                          @endforeach
                                          </select>
                                      </div>
                                      @error('category') <small class="text-danger">{{ $message }}</small> @enderror
                                  </div>
                              </div>
                              <div class="col-md-4 col-12">
                                  <div class="form-group mb-2">
                                    <label for="range">Date</label>
                                    <input
                                      type="text"
                                      id="range"
                                      wire:model="date"
                                      class="form-control flatpickr-range"
                                      placeholder="YYYY-MM-DD to YYYY-MM-DD"
                                    />
                                  @error('date') <small class="text-danger">{{ $message }}</small> @enderror

                                  </div>

                              </div>
                              <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="url">Page Link</label>
                                    <input
                                    type="text"
                                    id="url"
                                    class="form-control"
                                    wire:model="url"
                                    placeholder="https://www.google.com/"
                                    />
                                    @error('url') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="url">Location</label>
                                    <input
                                    type="text"
                                    id="location"
                                    class="form-control"
                                    wire:model="location"
                                    placeholder="Jakarta"
                                    />
                                    @error('location') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                              <div class="col-12">
                              <div class="form-group mb-2" >
                                  <label>Activities</label>
                                  <div wire:ignore>
                                      <textarea id="activities"  wire:model="activities"></textarea>
                                  </div>
                                      @error('activities') <small class="text-danger">{{ $message }}</small> @enderror
                              </div>

                              </div>

                              <div class="col-12 mb-2">
                              <div class="border rounded p-2">
                                  <h4 class="mb-1">Poster</h4>
                                  <div class="media flex-column flex-md-row">
                                  <img
                                  <?php isset($edit->images) ? $data = 'storage/'.$edit->images
                                                             : $data = 'backend-assets/images/slider/03.jpg' ?>
                                      src="{{ asset($data) }}"
                                      id="blog-feature-image"
                                      class="rounded mr-2 mb-1 mb-md-0"
                                      width="170"
                                      height="110"
                                      alt="Poster"
                                      wire:ignore.self
                                  />
                                  <div class="media-body" >
                                      <small class="text-muted">Recommended image resolution 1366x768, image size 10mb.</small>
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
                                <img src="{{ asset('icons/loading.gif') }}" wire:loading wire:target="{{ isset($edit) ? 'updateEvent("'.$edit->slug.'")' : 'createEvent' }}" alt="" width="60px">
                                <button type="submit" class="btn btn-primary mr-1" wire:target="{{ isset($edit) ? 'updateEvent("'.$edit->slug.'")' : 'createEvent' }}" wire:loading.attr="hidden"
                                wire:loading.attr="hidden"> Submit</button>
                                <a href="{{ route('admin.event') }}" wire:target="{{ isset($edit) ? 'updateEvent("'.$edit->slug.'")' : 'createEvent' }}"  class="btn btn-danger" wire:loading.class="btn btn-secondary" wire:loading.attr="hidden">Back</a>
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

@push('scripts')
<script src="{{ asset('backend-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('backend-assets/js/scripts/pages/page-blog-edit.min.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/hbjeuw3i2rynhza5stqc8laavo0yd57y5q6chx8fr61bvmhr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: "textarea#activities",
        skin: "bootstrap",
        plugins: "lists, link, image, media",
        menubar: true,
        file_picker_types: 'file image media',
        a11y_advanced_options: true,
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.onchange = function () {
            var file = this.files[0];

            var reader = new FileReader();
            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), { title: file.name });
            };
            reader.readAsDataURL(file);
            };
            input.click();
        },
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        setup: (editor) => {
            // Apply the focus effect
            editor.on("init", () => {
            editor.getContainer().style.transition =
                "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
            });
            editor.on("focus", () => {
            (editor.getContainer().style.boxShadow =
                "0 0 0 .2rem rgba(0, 123, 255, .25)"),
                (editor.getContainer().style.borderColor = "#80bdff");
            });
            editor.on("blur", () => {
            (editor.getContainer().style.boxShadow = ""),
                (editor.getContainer().style.borderColor = "");
            });
            editor.on('change', function (e) {
                @this.set('activities', editor.getContent());
            });
        },
    });

    $('#range').flatpickr({
    mode: "range",
    minDate: "today",
    dateFormat: "d F, Y",
});

    $(document).ready(function() {
        $('#categories').select2().val({!! isset($category->id) ? $category->id : "\"\""  !!}).trigger('change');
        @this.set('category',{!! isset($category->id) ? $category->id : "\"\"" !!});
    });
    $(document).on('change','#categories',function(){
        @this.set('category', this.value);
    });
</script>
@endpush
