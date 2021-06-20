@section('title')
Franchise Form
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
                    <h2 class="content-header-title float-left mb-0">Franchise Directory Form</h2>
                    <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Main App
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.franchise') }}">Franchise Directory</a>
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
                    <h4 class="card-title">Franchise Directory Form</h4>
                    </div>
                    <div class="card-body">
                    <form class="mt-2" wire:submit.prevent="{{ isset($edit) ? 'updateFranchise("'.$edit->slug.'")' : 'createFranchise' }}
                        ">

                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                        <a class="nav-link {{ $tab == 'brand' ? 'active' : '' }}" wire:click="$set('tab', 'brand')" id="brand-tab-fill" data-toggle="pill" href="#brand-fill" aria-expanded="true"
                            >Brand</a
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
                        class="tab-pane {{ ($tab == 'brand') ? 'active' : '' }}"
                        id="brand-fill"
                        aria-labelledby="brand-tab-fill"
                        aria-expanded="true"
                        >
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2">
                                    <label for="brand_name">Brand Name</label>
                                    <input
                                    type="text"
                                    id="brand_name"
                                    class="form-control"
                                    wire:model.defer="brand_name"
                                    placeholder="Brand Name"
                                    />
                                @error('brand_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="brand_category">Brand Category</label>
                                    <div wire:ignore>
                                        <select id="brand_category" wire:model.defer="brand_category" class="select2 form-control">
                                        <option value="">-- Brand Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" >{{ $category->title }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    @error('brand_category') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="origin_brands">Origin Brands</label>
                                    <div wire:ignore>
                                        <select id="origin_brands" wire:model.defer="origin_brands" class="select2 form-control">
                                        <option value="">-- Origin Brands --</option>
                                        @foreach($origins as $key => $value)
                                            <option value="{{ $key }}" >{{ $value }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    @error('origin_brands') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="budget_investment">Budget Of Investment</label>
                                    <div wire:ignore>
                                        <select id="budget_investment" wire:model.defer="budget_investment" class="select2 form-control">
                                        <option value="">-- Budget Of Investment --</option>
                                        @foreach($investment as $invest)
                                            <option value="{{ $invest }}" >{{ $invest }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    @error('budget_investment') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="brand_whatsapp">Brand Whatsapp</label>
                                    <input
                                    type="text"
                                    id="brand_whatsapp"
                                    class="form-control"
                                    wire:model.defer="brand_whatsapp"
                                    placeholder="Brand Whatsapp"
                                    />
                                @error('brand_whatsapp') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="investment_duration">Investment Duration (Year)</label>
                                    <input
                                    type="text"
                                    id="investment_duration"
                                    class="form-control"
                                    wire:model.defer="investment_duration"
                                    placeholder="Investment Duration"
                                    />
                                @error('investment_duration') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="product_type">Legal Entity</label>
                                    <input
                                    type="text"
                                    id="legal_entity"
                                    class="form-control"
                                    wire:model.defer="legal_entity"
                                    placeholder="Legal Entity"
                                    />
                                @error('legal_entity') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="year_established">Year of Established</label>
                                    <input
                                    type="text"
                                    id="year_established"
                                    class="form-control"
                                    wire:model.defer="year_established"
                                    placeholder="Year of Established"
                                    />
                                @error('year_established') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="total_outlets">Total Outlets</label>
                                    <input
                                    type="text"
                                    id="total_outlets"
                                    class="form-control"
                                    wire:model.defer="total_outlets"
                                    placeholder="Total Outlets"
                                    />
                                @error('total_outlets') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                            <div class="form-group mb-2" >
                                <label>Brand Information</label>
                                <div wire:ignore>
                                    <textarea id="brand_information"  wire:model.defer="brand_information"></textarea>
                                </div>
                                    @error('brand_information') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            </div>
                            <div class="col-12 mb-2">
                            <div class="border rounded p-2">
                                <h4 class="mb-1">Brand Images</h4>
                                <div class="media flex-column flex-md-row " >

                                <img
                                    <?php if(isset($edit->brand_image)) {
                                        $data = 'storage/'.$edit->brand_image;
                                    }else{
                                        $data = 'backend-assets/images/slider/03.jpg';
                                    }
                                    ?>
                                    src="{{ asset($data) }}"
                                    id="blog-feature-image"
                                    class="rounded mr-2 mb-1 mb-md-0"
                                    width="170"
                                    height="110"
                                    alt="Franchise Directory Form Images"
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
                                            <input type="file" wire:model.defer="brand_images" class="custom-file-input" id="blogCustomFile" accept="image/*" />
                                        <label class="custom-file-label" for="blogCustomFiles">Choose file</label>
                                        </div>
                                        @error('brand_images') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-12 mb-2">
                            <div class="border rounded p-2">
                                <h4 class="mb-1">Brand Logo</h4>
                                <div class="media flex-column flex-md-row " >
                                    @if(isset($edit->brand_logo))
                                    <img
                                    <?php if(isset($edit->brand_logo)) {
                                        $data = 'storage/'.$edit->brand_logo;
                                    }
                                    ?>
                                    src="{{ asset($data) }}"
                                    id="blog-feature-image"
                                    class="rounded mr-2 mb-1 mb-md-0"
                                    width="170"
                                    height="110"
                                    alt="Franchise Directory Form Images"
                                    wire:ignore.self
                                />
                                @endif

                                <div class="media-body" >
                                    <small class="text-muted">Recommended image resolution 620x430, image size 10mb.</small>
                                    <p class="my-50">
                                        <a href="javascript:void(0);" id="blog-image-text" hidden>C:\fakepath\banners.jpg</a>
                                    </p>
                                    <div class="d-inline-block">
                                    <div class="form-group mb-0">
                                        <div class="custom-file" wire:ignore>
                                            <input type="file" wire:model.defer="brand_logo" class="custom-file-input" id="blogCustomFile" accept="image/*" />
                                        <label class="custom-file-label" for="blogCustomFiles">Choose file</label>
                                        </div>
                                        @error('brand_logo') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-12 mb-2">
                            <div class="border rounded p-2">
                                <h4 class="mb-1">Brand Brochure</h4>
                                <div class="media flex-column flex-md-row ">

                                <div class="media-body" >
                                    <small class="text-muted">Recommended image resolution 620x430, image/pdf size 10mb.</small>
                                    <p class="my-50">
                                        <a href="javascript:void(0);" id="blog-image-text" hidden>C:\fakepath\banners.jpg</a>
                                    </p>
                                    <div class="d-inline-block">
                                    <div class="form-group mb-0">
                                        <div class="custom-file" wire:ignore>
                                            <input type="file" wire:model.defer="brand_brochure" class="custom-file-input" id="blogCustomFile"  />
                                        <label class="custom-file-label" for="blogCustomFiles">Choose file</label>
                                        </div>
                                        @error('brand_brochure') <small class="text-danger">{{ $message }}</small> @enderror
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
                                    <label for="product_name">Full Name</label>
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
                                    <label for="product_type">Email Address</label>
                                    <input
                                    type="email"
                                    id="email_address"
                                    class="form-control"
                                    wire:model.defer="email_address"
                                    placeholder="Email Address"
                                    />
                                @error('email_address') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="product_type">Phone Number</label>
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
                                    <label for="product_type">Enquiries</label>
                                    <input
                                    type="text"
                                    id="enquiries"
                                    class="form-control"
                                    wire:model.defer="enquiries"
                                    placeholder="Enquiries"
                                    />
                                @error('enquiries') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-12 mt-50">
                            <img src="{{ asset('icons/loading.gif') }}" wire:loading wire:target="{{ isset($edit) ? 'updateFranchise("'.$edit->slug.'")' : 'createFranchise' }}" alt="" width="60px">
                            <button type="submit" class="btn btn-primary mr-1" wire:target="{{ isset($edit) ? 'updateFranchise("'.$edit->slug.'")' : 'createFranchise' }}" wire:loading.attr="hidden"
                            wire:loading.attr="hidden"> Submit</button>
                            <a href="{{ route('admin.franchise') }}" wire:target="{{ isset($edit) ? 'updateFranchise("'.$edit->slug.'")' : 'createFranchise' }}"  class="btn btn-danger" wire:loading.class="btn btn-secondary" wire:loading.attr="hidden">Back</a>
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

    $('#brand_category').select2().val({{ isset($brand_category) ? $brand_category : 1  }}).trigger('change');
    $('#origin_brands').select2().val({!! isset($origin_brands) ? $origin_brands : 1 !!}).trigger('change');
    $('#budget_investment').select2().val({!! isset($budget_investment) ? $budget_investment : 1 !!}).trigger('change');

    $(document).ready(function() {
        @this.set('brand_category',{{ isset($brand_category) ? $brand_category : 1 }});
        @this.set('origin_brands',{!! isset($origin_brands) ? $origin_brands : 1 !!});
        @this.set('budget_investment',{!! isset($budget_investment) ? $budget_investment : 1 !!});
    });

    $(document).on('change','#brand_category',function(){
        @this.set('brand_category', this.value);
    });
    $(document).on('change','#origin_brands',function(){
        console.log(this.value);
        @this.set('origin_brands', this.value);
    });
    $(document).on('change','#budget_investment',function(){
        @this.set('budget_investment', this.value);
    });

    tinymce.init({
        selector: "textarea#brand_information",
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
                @this.set('brand_information', editor.getContent());
            });
        },
    });
</script>
@endpush
