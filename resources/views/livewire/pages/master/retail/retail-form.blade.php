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
                    <li class="breadcrumb-item"><a href="{{ route('admin.retail') }}">Retail Directory</a>
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
                <form class="mt-2" wire:submit.prevent="{{ isset($edit) ? 'updateRetail("'.$edit->slug.'")' : 'createRetail' }}
                    ">

                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                    <a class="nav-link {{ $tab == 'product' ? 'active' : '' }}" wire:click="$set('tab', 'product')" id="product-tab-fill" data-toggle="pill" href="#product-fill" aria-expanded="true"
                        >Product</a
                    >
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ $tab == 'company' ? 'active' : '' }}" wire:click="$set('tab', 'company')" id="company-tab-fill" data-toggle="pill" href="#company-fill" aria-expanded="false"
                        >Company</a
                    >
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ $tab == 'user' ? 'active' : '' }}" wire:click="$set('tab', 'user')" id="user-tab-fill" data-toggle="pill" href="#user-fill" aria-expanded="false"
                        >User</a
                    >
                    </li>
                </ul>
                <div class="tab-content" >

                    <div
                    role="tabpanel"
                    class="tab-pane {{ ($tab == 'product') ? 'active' : '' }}"
                    id="product-fill"
                    aria-labelledby="product-tab-fill"
                    aria-expanded="true"
                    >
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="product_name">Product Name</label>
                                <input
                                type="text"
                                id="product_name"
                                class="form-control"
                                wire:model.defer="product_name"
                                placeholder="Product Name"
                                />
                            @error('product_name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="retail_category">Retail Category</label>
                                <div wire:ignore>
                                    <select id="retail_category" wire:model.defer="category" class="select2 form-control">
                                    <option value="">-- Retail Category --</option>
                                    @foreach($categories as $category)
                                        <option {{ ($retail_category == $category->id) ? 'selected' : '' }} value="{{ $category->id }}" >{{ $category->title }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                @error('retail_category') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-2">
                                <label for="product_origin">Product Origin</label>
                                <div class="form-check form-check-primary">
                                    <input type="radio" wire:model="product_origin" id="product_origin_local" value="Local(Indonesia)" class="form-check-input">
                                    <label for="product_origin_local" class="form-check-label">Local (Indonesia)</label>
                                </div>
                                <div class="form-check form-check-primary ">
                                    <input type="radio" wire:model="product_origin" id="product_origin_overseas" value="Overseas(International)" class="form-check-input">
                                    <label for="product_origin_overseas" class="form-check-label">Overseas (International)</label>
                                </div>
                                @error('product_origin') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-2">
                                <label for="practices">Usage Training</label>
                                <div class="form-check form-check-primary">
                                    <input type="radio" wire:model="practices" id="practices1" value="Y" class="form-check-input">
                                    <label for="practices1" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-primary ">
                                    <input type="radio" wire:model="practices" id="practices2" value="N" class="form-check-input">
                                    <label for="practices2" class="form-check-label">No</label>
                                </div>
                                @error('practices') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-2">
                                <label for="books">Books Guide</label>
                                <div class="form-check form-check-primary">
                                    <input type="radio" wire:model="books" id="books1" value="Y" class="form-check-input">
                                    <label for="books1" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-primary ">
                                    <input type="radio" wire:model="books" id="books2" value="N" class="form-check-input">
                                    <label for="books2" class="form-check-label">No</label>
                                </div>
                                @error('books') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-2">
                                <label for="services">After-Sales Service</label>
                                <div class="form-check form-check-primary">
                                    <input type="radio" wire:model="services" id="services1" value="Y" class="form-check-input">
                                    <label for="services" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-primary ">
                                    <input type="radio" wire:model="services" id="services2" value="N" class="form-check-input">
                                    <label for="services" class="form-check-label">No</label>
                                </div>
                                @error('services') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-2">
                                <label for="currency">Currency</label>
                                <input
                                type="text"
                                id="currency"
                                class="form-control"
                                wire:model.defer="currency"
                                placeholder="Ex. Rupiah,Dollar"
                                />
                            @error('currency') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-2">
                                <label for="price">Price</label>
                                <input
                                type="number"
                                id="price"
                                class="form-control"
                                wire:model.defer="price"
                                placeholder="Price"
                                />
                            @error('price') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-2">
                                <label for="guarantee">Guarantee (Year)</label>
                                <input
                                type="number"
                                id="guarantee"
                                class="form-control"
                                wire:model.defer="guarantee"
                                placeholder="Ex. 2020, 2021"
                                />
                            @error('guarantee') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-2">
                                <label for="product_country">Product Country</label>
                                <input
                                type="text"
                                id="product_country"
                                class="form-control"
                                wire:model.defer="product_country"
                                placeholder="Ex. Jakarta, Tokyo"
                                />
                            @error('product_country') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="product_category">Product Category</label>
                                <input
                                type="text"
                                id="product_category"
                                class="form-control"
                                wire:model.defer="product_category"
                                placeholder="Product Category"
                                />
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
                                wire:model.defer="product_type"
                                placeholder="Product Type"
                                />
                            @error('product_type') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <label for="tag">Tag</label>
                            <div class="form-group ">
                                @foreach ($tag_data as $key => $value)
                                    <div class="form-check form-check-primary form-check-inline">
                                        <input type="radio" wire:model="tag" id="tag{{ $value }}" value="{{ $value }}" class="form-check-input">
                                        <label for="tag{{ $value }}" class="form-check-label">{{ $value }}</label>
                                    </div>
                                @endforeach
                            </div>
                            @error('tag') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-12">
                        <div class="form-group mb-2 mt-2" >
                            <label>Product Information</label>
                            <div wire:ignore>
                                <textarea id="product_information"  wire:model.defer="product_information"></textarea>
                            </div>
                                @error('product_information') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group mb-2" >
                            <label>Product Features</label>
                            <div wire:ignore>
                                <textarea id="product_features" wire:model.defer="product_features"></textarea>
                            </div>
                                @error('product_features') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group mb-2" >
                            <label>Product Spesification</label>
                            <div wire:ignore>
                                <textarea id="product_spesification" wire:model.defer="product_spesification"></textarea>
                            </div>
                                @error('product_spesification') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group mb-2" >
                            <label>Additional Information</label>
                            <div wire:ignore>
                                <textarea id="description_add" wire:model.defer="description_add"></textarea>
                            </div>
                                @error('description_add') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        </div>
                        <div class="col-12 mb-2">
                        <div class="border rounded p-2">
                            <h4 class="mb-1">Product Image</h4>
                            <div class="media flex-column flex-md-row ">

                            <img
                                <?php if(isset($edit->product_images)) {
                                    $data = 'storage/'.$edit->product_images;
                                }else{
                                    $data = 'backend-assets/images/slider/03.jpg';
                                }
                                ?>
                                src="{{ asset($data) }}"
                                id="blog-feature-image"
                                class="rounded mr-2 mb-1 mb-md-0"
                                width="170"
                                height="110"
                                alt="Retail Directory Form Images"
                                 wire:ignore.self
                            />
                            <div class="media-body" >
                                <small class="text-muted">Recommended image resolution 620x430, image size 10mb.</small>
                                <p class="my-50">
                                    <a href="javascript:void(0);" id="blog-image-text" hidden>C:\fakepath\banners.jpg</a>
                                </p>
                                <div class="d-inline-block">
                                <div class="form-group mb-0">
                                    <div class="custom-file" wire:ignore>
                                        <input type="file" wire:model.defer="product_images" class="custom-file-input" id="blogCustomFile" accept="image/*" />
                                    <label class="custom-file-label" for="blogCustomFiles">Choose file</label>
                                    </div>
                                    @error('product_images') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div
                    class="tab-pane {{ ($tab == 'company') ? 'active' : '' }}"
                    id="company-fill"
                    role="tabpanel"
                    aria-labelledby="company-tab-fill"
                    aria-expanded="false"
                    >
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mb-2" >
                                <label for="product_name">Company Name</label>
                                <input
                                type="text"
                                id="company_name"
                                class="form-control"
                                wire:model.defer="company_name"
                                placeholder="Company Name"
                                />
                            @error('company_name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                        <div class="form-group mb-2" >
                            <label>Company Address</label>
                            <div wire:ignore>
                                <textarea id="company_address" wire:model="company_address"></textarea>
                            </div>
                                @error('company_address') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-2">
                                <label for="whatsapp_contact">Whatsapp Contact</label>
                                <input
                                type="text"
                                id="whatsapp_contact"
                                class="form-control"
                                wire:model.defer="whatsapp_contact"
                                placeholder="Whatsapp Contact"
                                />
                            @error('whatsapp_contact') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-2">
                                <label for="instagram">Instagram</label>
                                <input
                                type="text"
                                id="instagram"
                                class="form-control"
                                wire:model.defer="instagram"
                                placeholder="Instagram"
                                />
                            @error('instagram') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-2">
                                <label for="company_email">Email</label>
                                <input
                                type="email"
                                id="company_email"
                                class="form-control"
                                wire:model.defer="company_email"
                                placeholder="Email"
                                />
                            @error('company_email') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-2">
                                <label for="website">Website</label>
                                <input
                                type="text"
                                id="website"
                                class="form-control"
                                wire:model.defer="website"
                                placeholder="Website"
                                />
                            @error('website') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="partner">Wanted Partner</label>
                                @foreach($partner_data as $key => $value)
                                    <div class="form-check form-check-primary">
                                        <input type="checkbox" wire:model="partner.{{ $key }}" id="partner{{ $key }}" value="{{ $value }}" name="partner" class=" form-check-input">
                                        <label for="partner{{ $key }}" class="form-check-label">{{ $value }}</label>
                                    </div>
                                @endforeach
                                @error('partner') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="col-12 mb-2">
                        <div class="border rounded p-2">
                            <h4 class="mb-1">Catalog/Brochure</h4>
                            <div class="media flex-column flex-md-row">
                            <div class="media-body" >
                                <small class="text-muted">Recommended image resolution 1.654x2.339, image/pdf size 10mb.</small>
                                <p class="my-50">
                                    <a href="javascript:void(0);" id="blog-image-text" hidden>C:\fakepath\banners.jpg</a>
                                </p>
                                <div class="d-inline-block">
                                <div class="form-group mb-0">
                                    <div class="custom-file" wire:ignore>
                                        <input type="file" wire:model.defer="catalog_brochure" class="custom-file-input" id="blogCustomFiless"/>
                                    <label class="custom-file-label" for="blogCustomFiless">Choose file</label>
                                    </div>
                                    @error('catalog_brochure') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div
                    class="tab-pane {{ ($tab == 'user') ? 'active' : '' }}"
                    id="user-fill"
                    role="tabpanel"
                    aria-labelledby="user-tab-fill"
                    aria-expanded="false"
                    >
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mb-2">
                                <label for="fullname">Full Name</label>
                                <input
                                type="text"
                                id="fullname"
                                class="form-control"
                                wire:model.defer="fullname"
                                placeholder="Full Name"
                                />
                            @error('fullname') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="contact_email">Email Address</label>
                                <input
                                type="email"
                                id="contact_email"
                                class="form-control"
                                wire:model.defer="email_address"
                                placeholder="Email Address"
                                />
                            @error('email_address') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="phone_number">Phone Number</label>
                                <input
                                type="text"
                                id="phone_number"
                                class="form-control"
                                wire:model.defer="phone_number"
                                placeholder="Phone Number"
                                />
                            @error('phone_number') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="position">Position</label>
                                <input
                                type="text"
                                id="position"
                                class="form-control"
                                wire:model.defer="position"
                                placeholder="Ex. CTO, CEO, Franchises"
                                />
                            @error('position') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 mt-50">
                        <img src="{{ asset('icons/loading.gif') }}" wire:loading wire:target="{{ isset($edit) ? 'updateRetail("'.$edit->slug.'")' : 'createRetail' }}" alt="" width="60px">
                        <button type="submit" class="btn btn-primary mr-1" wire:target="{{ isset($edit) ? 'updateRetail("'.$edit->slug.'")' : 'createRetail' }}" wire:loading.attr="hidden"
                        wire:loading.attr="hidden"> Submit</button>
                        <a href="{{ route('admin.retail') }}" wire:target="{{ isset($edit) ? 'updateRetail("'.$edit->slug.'")' : 'createRetail' }}"  class="btn btn-danger" wire:loading.class="btn btn-secondary" wire:loading.attr="hidden">Back</a>
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

@push('scripts')
<script src="{{ asset('backend-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('backend-assets/js/scripts/pages/page-blog-edit.min.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/hbjeuw3i2rynhza5stqc8laavo0yd57y5q6chx8fr61bvmhr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    $('#retail_category').select2().val({!! isset($retail_category) ? $retail_category :  "\"\"" !!}).trigger('change');

    $(document).ready(function() {
        @this.set('retail_category',{!! isset($retail_category) ? $retail_category :  "\"\"" !!});
    });



    $(document).on('change','#retail_category',function(){
        @this.set('retail_category', this.value);
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
    tinymce.init({
        selector: "textarea#description_add",
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
                @this.set('description_add', editor.getContent());
            });
        },
    });
    tinymce.init({
        selector: "textarea#product_features",
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
                @this.set('product_features', editor.getContent());
            });
        },
    });
    tinymce.init({
        selector: "textarea#product_spesification",
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
                @this.set('product_spesification', editor.getContent());
            });
        },
    });
    tinymce.init({
        selector: "textarea#company_address",
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
                @this.set('company_address', editor.getContent());
            });
        },
    });
</script>
@endpush
