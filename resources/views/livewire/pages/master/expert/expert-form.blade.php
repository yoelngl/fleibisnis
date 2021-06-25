@section('title')
Ask Expert
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
                      <h2 class="content-header-title float-left mb-0">Ask Expert</h2>
                      <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">Main App
                          </li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.ask_expert') }}">Ask Expert</a>
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

                            <form class="mt-2" wire:submit.prevent="{{ isset($edit) ? 'updateAsk("'.$edit->slug.'")' : 'createAsk' }}" >
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="title">Title</label>
                                        <input
                                        type="text"
                                        id="title"
                                        class="form-control"
                                        wire:model.defer="title"
                                        placeholder="Title"
                                        />
                                    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="expert">Expert</label>
                                        <div wire:ignore>
                                            <select id="expert" wire:model="experts" class="select2 form-control">
                                            <option value="" selected>-- Choose Expert --</option>
                                            @foreach($expert as $item)
                                                <option value="{{ $item->id }}" >{{ $item->name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        @error('experts') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                <div class="form-group mb-2" >
                                    <label>Question</label>
                                    <div wire:ignore>
                                        <textarea class="form-control" wire:model="question"></textarea>
                                    </div>
                                        @error('question') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-2" >
                                        <label>Answer</label>
                                        <div wire:ignore>
                                            <textarea id="answer" wire:model="answer"></textarea>
                                        </div>
                                            @error('answer') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    </div>
                                <div class="col-12 mt-50">
                                    <img src="{{ asset('icons/loading.gif') }}" wire:loading wire:target="{{ isset($edit) ? 'updateAsk("'.$edit->slug.'")' : 'createAsk' }}" alt="" width="60px">
                                    <button type="submit" class="btn btn-primary mr-1" wire:target="{{ isset($edit) ? 'updateAsk("'.$edit->slug.'")' : 'createAsk' }}" wire:loading.attr="hidden"
                                    wire:loading.attr="hidden"> Submit</button>
                                    <a href="{{ route('admin.ask_expert') }}" wire:target="{{ isset($edit) ? 'updateAsk("'.$edit->slug.'")' : 'createAsk' }}"  class="btn btn-danger" wire:loading.class="btn btn-secondary" wire:loading.attr="hidden">Back</a>
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

<script>
    $('#expert').select2().val({{ isset($experts) ? $experts : 1  }}).trigger('change');

    $(document).on('change','#expert',function(){
        @this.set('experts', this.value);
    });

    tinymce.init({
        selector: "textarea#question",
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
                @this.set('question', editor.getContent());
            });
        },
    });

    tinymce.init({
        selector: "textarea#answer",
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
                @this.set('answer', editor.getContent());
            });
        },
    });
</script>
@endpush
