@section('title')
    Add Retails Directory
@endsection

@section('vendor')
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/vendors/css/forms/select/select2.min.css') }}">

@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('backend-assets/css/pages/page-blog.min.css') }}">

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
                  <h2 class="content-header-title float-left mb-0">Retails Directory Form</h2>
                  <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">Main App
                      </li>
                      <li class="breadcrumb-item"><a href="{{ route('admin.retail') }}"">Retail Directory</a>
                      </li>
                      <li class="breadcrumb-item active">Form
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <section id="filled-pills">
            <div class="row match-height">
              <!-- Filled Pills Start -->
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Retail Directory Form</h4>
                  </div>
                  <div class="card-body">
                    <form class="mt-2" wire:submit.prevent="{{ isset($edit) ? 'updateNews("'.$edit->slug.'")' : 'createRetail' }}" >

                    <ul class="nav nav-pills nav-fill">
                      <li class="nav-item">
                        <a class="nav-link active" id="product-tab-fill" data-toggle="pill" href="#product-fill" aria-expanded="true"
                          >Product</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="company-tab-fill" data-toggle="pill" href="#company-fill" aria-expanded="false"
                          >Company</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="user-tab-fill" data-toggle="pill" href="#user-fill" aria-expanded="false"
                          >User</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div
                        role="tabpanel"
                        class="tab-pane active"
                        id="product-fill"
                        aria-labelledby="product-tab-fill"
                        aria-expanded="true"
                      >
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2">
                                    <label for="product_name">Product Name</label>
                                    <input
                                    type="text"
                                    id="product_name"
                                    class="form-control"
                                    wire:model="product_name"
                                    placeholder="Product Name"
                                    />


                                @error('product_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="product_category">Product Category</label>
                                    <div wire:ignore>
                                        <select id="product_category" wire:model="product_category" class="select2 form-control">
                                        <option value="" selected>-- Product Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" >{{ $category->title }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    @error('product_category') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="product_type">Product Type</label>
                                    <input
                                    type="text"
                                    id="product_type"
                                    class="form-control"
                                    wire:model="product_type"
                                    placeholder="Product Type"
                                    />


                                @error('product_type') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                            <div class="form-group mb-2" >
                                <label>Product Information</label>
                                <div wire:ignore>
                                    <textarea id="product_information" wire:model="product_information"></textarea>
                                </div>
                                    @error('product_information') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            </div>

                            <div class="col-12 mb-2">
                            <div class="border rounded p-2">
                                <h4 class="mb-1">Product Image</h4>
                                <div class="media flex-column flex-md-row">
                                <img
                                <?php isset($edit->images) ? $data = 'storage/'.$edit->images
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
                                <img src="{{ asset('icons/loading.gif') }}" wire:loading wire:target="{{ isset($edit) ? 'updateNews("'.$edit->slug.'")' : 'createRetail' }}" alt="" width="60px">
                                <button type="submit" class="btn btn-primary mr-1" wire:loading.delay wire:loading.class="btn btn-secondary" wire:target="{{ isset($edit) ? 'updateNews("'.$edit->slug.'")' : 'createRetail' }}" wire:loading.attr="hidden"> Submit</button>
                                <a href="{{ route('admin.retail') }}"  class="btn btn-danger"  wire:target="{{ isset($edit) ? 'updateNews("'.$edit->slug.'")' : 'createRetail' }}" wire:loading.class="btn btn-secondary" wire:loading.attr="hidden">Back</a>
                            </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane"
                        id="company-fill"
                        role="tabpanel"
                        aria-labelledby="company-tab-fill"
                        aria-expanded="false"
                      >
                        <p>
                          Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy
                          cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice
                          icing cupcake.Bear claw chocolate chocolate cake jelly-o pudding lemon drops sweet roll sweet candy.
                          Chocolate sweet chocolate bar candy chocolate bar chupa chups gummi bears lemon drops.
                        </p>
                      </div>
                      <div
                        class="tab-pane"
                        id="user-fill"
                        role="tabpanel"
                        aria-labelledby="user-tab-fill"
                        aria-expanded="false"
                      >
                        <p>
                          Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                          cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder
                          tootsie roll cake.Chocolate bonbon chocolate chocolate cake halvah tootsie roll marshmallow. Brownie
                          chocolate toffee toffee jelly beans bonbon sesame snaps sugar plum candy canes.
                        </p>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- END: Content-->
</div>

@push('scripts')
<script src="{{ asset('backend-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('backend-assets/js/scripts/pages/page-blog-edit.min.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/hbjeuw3i2rynhza5stqc8laavo0yd57y5q6chx8fr61bvmhr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


<script>
    $(document).on('change','#product_category',function(){
        console.log(this.value);
        @this.set('product_category', this.value);
    });

    tinymce.init({
        selector: "textarea#product_information",
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
                @this.set('product_information', editor.getContent());
            });
        },
    });
</script>
@endpush
