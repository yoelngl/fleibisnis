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
                        <a class="nav-link {{ $tab == 'company' ? 'active' : '' }}" wire:click="$set('tab', 'company')" id="company-tab-fill" data-toggle="pill" href="#company-fill" aria-expanded="false"
                            >Company</a
                        >
                        </li>
                        <li class="nav-item">
                        <a class="nav-link {{ $tab == 'investments' ? 'active' : '' }}" wire:click="$set('tab', 'investments')" id="investments-tab-fill" data-toggle="pill" href="#investments-fill" aria-expanded="false"
                            >Investment</a
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
                        <h4>Brand Information</h4>
                        <div class="row">
                            <div class="col-md-6 col-12">
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
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="franchise_category">Franchise Category</label>
                                    <div wire:ignore>
                                        <select id="franchise_category" wire:model.defer="franchise_category" class="select2 form-control">
                                        <option value="">-- Franchise Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" >{{ $category->title }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    @error('franchise_category') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <label for="bussiness_concept">Bussiness Concept</label>
                                <div class="form-group mb-2">
                                    @foreach ($concept as $key => $value)
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input type="radio" wire:model="bussiness_concept" id="bussiness_concept{{ $key }}" value="{{ $value }}" class="form-check-input">
                                            <label for="bussiness_concept{{ $key }}" class="form-check-label">{{ $value }}</label>
                                        </div>
                                    @endforeach
                                    <div class="">
                                        @error('bussiness_concept') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="bussiness_category">Bussiness Category</label>
                                    <input
                                    type="text"
                                    id="bussiness_category"
                                    class="form-control"
                                    wire:model.defer="bussiness_category"
                                    placeholder="Ex: Automotive Services & Products"
                                    />
                                @error('bussiness_category') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="bussiness_type">Bussiness Type</label>
                                    <input
                                    type="text"
                                    id="bussiness_type"
                                    class="form-control"
                                    wire:model.defer="bussiness_type"
                                    placeholder="Ex: Laundry,Apotek"
                                    />
                                @error('bussiness_type') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="company_outlet">Company Outlets</label>
                                    <input
                                    type="number"
                                    id="company_outlet"
                                    class="form-control"
                                    wire:model.defer="company_outlet"
                                    placeholder="Ex. 10,20,30"
                                    />
                                @error('company_outlet') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="company_year">Years of Standing</label>
                                    <input
                                    type="number"
                                    id="company_year"
                                    class="form-control"
                                    wire:model.defer="company_year"
                                    placeholder="Ex. 1,2,3"
                                    />
                                @error('company_year') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="brand_origin">Brand Origin</label>
                                    <div class="form-check form-check-primary">
                                        <input type="radio" wire:model="brand_origin" id="brand_origin_local" value="Local(Indonesia)" class="form-check-input">
                                        <label for="brand_origin_local" class="form-check-label">Local (Indonesia)</label>
                                    </div>
                                    <div class="form-check form-check-primary ">
                                        <input type="radio" wire:model="brand_origin" id="brand_origin_overseas" value="Overseas(International)" class="form-check-input">
                                        <label for="brand_origin_overseas" class="form-check-label">Overseas (International)</label>
                                    </div>
                                    @error('brand_origin') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-9 col-12">
                                <div class="form-group mb-2">
                                    <label for="brand_country">Brand Country</label>
                                    <input
                                    type="text"
                                    id="brand_country"
                                    class="form-control"
                                    wire:model.defer="brand_country"
                                    placeholder="Ex. Indonesia,Malaysia"
                                    />
                                @error('brand_country') <small class="text-danger">{{ $message }}</small> @enderror
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
                            <div class="form-group mb-2" >
                                <label>Brand Description</label>
                                <div wire:ignore>
                                    <textarea id="brand_description"  wire:model.defer="brand_description"></textarea>
                                </div>
                                    @error('brand_description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            </div>
                        </div>
                        <h4>Investment Information</h4>

                        <div class="row">
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="currency">Currency</label>
                                    <input
                                    type="text"
                                    id="currency"
                                    class="form-control"
                                    wire:model.defer="currency"
                                    placeholder="Ex. Rupiah"
                                    />
                                @error('currency') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="investment_value">Investment Value</label>
                                    <input
                                    type="number"
                                    id="investment_value"
                                    class="form-control"
                                    wire:model.defer="investment_value"
                                    placeholder="Ex. Rp. 20.000"
                                    />
                                @error('investment_value') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="initial_cost">Initial Cost</label>
                                    <input
                                    type="number"
                                    id="initial_cost"
                                    class="form-control"
                                    wire:model.defer="initial_cost"
                                    placeholder="Ex. Rp. 20.000"
                                    />
                                @error('initial_cost') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="royalty_fee">Royalty Fee</label>
                                    <input
                                    type="number"
                                    id="royalty_fee"
                                    class="form-control"
                                    wire:model.defer="royalty_fee"
                                    placeholder="Ex. Rp. 20.000"
                                    />
                                @error('royalty_fee') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="license_time">License Duration</label>
                                    <input
                                    type="number"
                                    id="license_time"
                                    class="form-control"
                                    wire:model.defer="license_time"
                                    placeholder="Ex. 1/Year"
                                    />
                                @error('license_time') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="roi">Return Of Investment(ROI)</label>
                                    <input
                                    type="number"
                                    id="roi"
                                    class="form-control"
                                    wire:model.defer="roi"
                                    placeholder="Ex. Rp. 20.000/Tahun"
                                    />
                                @error('roi') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="estimated_profit">Estimated Profit</label>
                                    <input
                                    type="number"
                                    id="estimated_profit"
                                    class="form-control"
                                    wire:model.defer="estimated_profit"
                                    placeholder="Ex. Rp. 20.000/Bulan"
                                    />
                                @error('estimated_profit') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
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

                        <div
                        class="tab-pane {{ ($tab == 'company') ? 'active' : '' }}"
                        id="company-fill"
                        role="tabpanel"
                        aria-labelledby="company-tab-fill"
                        aria-expanded="false"
                        >
                        <h4>Company Information</h4>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2" >
                                    <label for="company_name">Company Name</label>
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



                        </div>
                        <h4>Additional Information</h4>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2" >
                                    <label for="employees_number">Number of Employees</label>
                                    <input
                                    type="number"
                                    id="employees_number"
                                    class="form-control"
                                    wire:model.defer="employees_number"
                                    placeholder="Ex. 10,50,100"
                                    />
                                @error('employees_number') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2" >
                                    <label for="store_area">Store Area</label>
                                    <input
                                    type="number"
                                    id="store_area"
                                    class="form-control"
                                    wire:model.defer="store_area"
                                    placeholder="Ex. 10 m2"
                                    />
                                @error('store_area') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="store_location_requirements">Store Location Requirements</label>
                                    @foreach ($yon as $key => $value)
                                        <div class="form-check form-check-primary">
                                            <input type="radio" wire:model="store_location_requirements" id="store_location_requirements{{ $key }}" value="{{ $key }}" class="form-check-input">
                                            <label for="store_location_requirements{{ $key }}" class="form-check-label">{{ $value }}</label>
                                        </div>
                                    @endforeach
                                    @error('store_location_requirements') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="store_services_requirements">Store Services Requirements</label>
                                    @foreach ($yon as $key => $value)
                                        <div class="form-check form-check-primary">
                                            <input type="radio" wire:model="store_services_requirements" id="store_services_requirements{{ $key }}" value="{{ $key }}" class="form-check-input">
                                            <label for="store_services_requirements{{ $key }}" class="form-check-label">{{ $value }}</label>
                                        </div>
                                    @endforeach
                                    @error('store_services_requirements') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="employees_training">Employees Training</label>
                                    @foreach ($yon as $key => $value)
                                        <div class="form-check form-check-primary">
                                            <input type="radio" wire:model="employees_training" id="employees_training{{ $key }}" value="{{ $key }}" class="form-check-input">
                                            <label for="employees_training{{ $key }}" class="form-check-label">{{ $value }}</label>
                                        </div>
                                    @endforeach
                                    @error('employees_training') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="sop">Books Guide/SOP</label>
                                    @foreach ($yon as $key => $value)
                                        <div class="form-check form-check-primary">
                                            <input type="radio" wire:model="sop" id="sop{{ $key }}" value="{{ $key }}" class="form-check-input">
                                            <label for="sop{{ $key }}" class="form-check-label">{{ $value }}</label>
                                        </div>
                                    @endforeach
                                    @error('sop') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="form-group mb-2">
                                    <label for="crm_system">CRM System</label>
                                    @foreach ($yon as $key => $value)
                                        <div class="form-check form-check-primary">
                                            <input type="radio" wire:model="crm_system" id="crm_system{{ $key }}" value="{{ $key }}" class="form-check-input">
                                            <label for="crm_system{{ $key }}" class="form-check-label">{{ $value }}</label>
                                        </div>
                                    @endforeach
                                    @error('crm_system') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mb-2">
                                    <label for="operational">Provision of Operational Equipment</label>
                                    @foreach ($yon as $key => $value)
                                        <div class="form-check form-check-primary">
                                            <input type="radio" wire:model="operational" id="operational{{ $key }}" value="{{ $key }}" class="form-check-input">
                                            <label for="operational{{ $key }}" class="form-check-label">{{ $value }}</label>
                                        </div>
                                    @endforeach
                                    @error('operational') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="form-group mb-2">
                                    <label for="hki">HKI</label>
                                    @foreach ($yon as $key => $value)
                                        <div class="form-check form-check-primary">
                                            <input type="radio" wire:model="hki" id="hki{{ $key }}" value="{{ $key }}" class="form-check-input">
                                            <label for="hki{{ $key }}" class="form-check-label">{{ $value }}</label>
                                        </div>
                                    @endforeach
                                    @error('hki') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="form-group mb-2">
                                    <label for="stpw">STPW</label>
                                    @foreach ($yon as $key => $value)
                                        <div class="form-check form-check-primary">
                                            <input type="radio" wire:model="stpw" id="stpw{{ $key }}" value="{{ $key }}" class="form-check-input">
                                            <label for="stpw{{ $key }}" class="form-check-label">{{ $value }}</label>
                                        </div>
                                    @endforeach
                                    @error('stpw') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="form-group mb-2">
                                    <label for="nib">NIB</label>
                                    @foreach ($yon as $key => $value)
                                        <div class="form-check form-check-primary">
                                            <input type="radio" wire:model="nib" id="nib{{ $key }}" value="{{ $key }}" class="form-check-input">
                                            <label for="nib{{ $key }}" class="form-check-label">{{ $value }}</label>
                                        </div>
                                    @endforeach
                                    @error('nib') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                            <div class="border rounded p-2">
                                <h4 class="mb-1">Store Grow Up</h4>
                                <div class="media flex-column flex-md-row">
                                <div class="media-body" >
                                    <small class="text-muted">Recommended image resolution 620x430, image/pdf size 10mb.</small>
                                    <p class="my-50">
                                        <a href="javascript:void(0);" id="blog-image-text" hidden>C:\fakepath\banners.jpg</a>
                                    </p>
                                    <div class="d-inline-block">
                                    <div class="form-group mb-0">
                                        <div class="custom-file" wire:ignore>
                                            <input type="file" wire:model.defer="store_images" class="custom-file-input" id="blogCustomFiless"/>
                                        <label class="custom-file-label" for="blogCustomFiless">Choose file</label>
                                        </div>
                                        @error('store_images') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div
                        class="tab-pane {{ ($tab == 'investments') ? 'active' : '' }}"
                        id="investments-fill"
                        role="tabpanel"
                        aria-labelledby="investments-tab-fill"
                        aria-expanded="false"
                        >
                        <h4>Paket 1</h5>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2">
                                    <label for="packet_name">Nama Paket</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    wire:model.defer="packet_name.1"
                                    placeholder="Nama Paket"
                                    />
                                @error('packet_name.1') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="jenis_paket">Jenis Paket</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    wire:model.defer="jenis_paket.1"
                                    placeholder="Jenis Paket"
                                    />
                                @error('jenis_paket.1') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="ukuran_gerai">Ukuran Gerai</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    wire:model.defer="ukuran_gerai.1"
                                    placeholder="Ex. 10m"
                                    />
                                @error('ukuran_gerai.1') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="harga_investasi">Harga Investasi</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    wire:model.defer="harga_investasi.1"
                                    placeholder="Ex. Rp. 20.000"
                                    />
                                @error('harga_investasi.1') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="biaya_awal">Biaya Awal</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    wire:model.defer="biaya_awal.1"
                                    placeholder="Ex. Rp. 20.000"
                                    />
                                @error('biaya_awal.1') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="return_investment">Return Of Investment</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    wire:model.defer="return_investment.1"
                                    placeholder="Ex. Rp. 20.000/Tahun"
                                    />
                                @error('return_investment.1') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="perkiraan_laba">Perkiraan Laba</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    wire:model.defer="perkiraan_laba.1"
                                    placeholder="Ex. Rp. 20.000/Bulan"
                                    />
                                @error('perkiraan_laba.1') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                        </div>
                        <?php $no = 1; ?>
                        @foreach($inputs as $key => $value)
                        <?php $no = $no + 1 ?>
                        <h4>Paket {{ $no  }} <a class="badge badge-danger text-light badge-sm" wire:click="remove({{ $key }})" > Delete</a></h5>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mb-2">
                                    <label for="packet_name">Nama Paket</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    wire:model.defer="packet_name.{{ $value }}"
                                    placeholder="Nama Paket"
                                    />
                                @error('packet_name.{{ $value }}') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="jenis_paket">Jenis Paket</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    wire:model.defer="jenis_paket.{{ $value }}"
                                    placeholder="Jenis Paket"
                                    />
                                @error('jenis_paket.{{ $value }}') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="ukuran_gerai">Ukuran Gerai</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    wire:model.defer="ukuran_gerai.{{ $value }}"
                                    placeholder="Ex. 10m"
                                    />
                                @error('ukuran_gerai.{{ $value }}') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="harga_investasi">Harga Investasi</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    wire:model.defer="harga_investasi.{{ $value }}"
                                    placeholder="Ex. Rp. 20.000"
                                    />
                                @error('harga_investasi.{{ $value }}') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="biaya_awal">Biaya Awal</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    wire:model.defer="biaya_awal.{{ $value }}"
                                    placeholder="Ex. Rp. 20.000"
                                    />
                                @error('biaya_awal.{{ $value }}') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="return_investment">Return Of Investment</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    wire:model.defer="return_investment.{{ $value }}"
                                    placeholder="Ex. Rp. 20.000/Tahun"
                                    />
                                @error('return_investment.{{ $value }}') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group mb-2">
                                    <label for="perkiraan_laba">Perkiraan Laba</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    wire:model.defer="perkiraan_laba.{{ $value }}"
                                    placeholder="Ex. Rp. 20.000/Bulan"
                                    />
                                @error('perkiraan_laba.{{ $value }}') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <button type="button" class="mb-3 btn btn-primary" wire:click="addPacket({{ $i }})">Tambah Paket</button>


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

    $('#franchise_category').select2().val({!! isset($franchise_category) ? $franchise_category : "\"\""  !!}).trigger('change');

    $(document).ready(function() {
        @this.set('franchise_category',{!! isset($franchise_category) ? $franchise_category : "\"\"" !!});
    });

    $(document).on('change','#franchise_category',function(){
        @this.set('franchise_category', this.value);
    });

    tinymce.init({
        selector: "textarea#brand_description",
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
                @this.set('brand_description', editor.getContent());
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
