<?php

namespace App\Http\Livewire\Pages\Master\Retail;

use App\Models\Categories;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\RetailDirectory;

class RetailForm extends Component
{

    use WithFileUploads;

    public $tab = 'product';
    public $product_name;
    public $product_category;
    public $product_information;
    public $product_type;
    public $product_features;
    public $product_spesification;
    public $price;
    public $guarantee;
    public $product_images;

    // Company
    public $company_name;
    public $company_type;
    public $company_information;
    public $company_city;
    public $company_country;
    public $company_address;
    public $looking_for;
    public $whatsapp_contact;
    public $catalog_brochure;
    public $legal_entity;

    public $fullname;
    public $email_address;
    public $phone_number;
    public $enquiries;



    protected $rules = [
        'product_name' => 'required',
        'product_category' => 'required',
        'product_type' => 'required',
        'product_information' => 'required',
        'product_features' => 'required',
        'product_spesification' => 'required',
        'price' => 'required|numeric',
        'guarantee' => 'required',
        'product_images' => 'required|image|mimes:png,jpg,svg,jpeg||max:10024',

        // company
        'company_name' => 'required',
        'company_type' => 'required',
        'company_city' => 'required',
        'company_country' => 'required',
        'company_information' => 'required',
        'catalog_brochure' => 'required|mimes:pdf,jpg,png,svg,jpeg|max:10024',
        'looking_for' => 'required',
        'whatsapp_contact' => 'required|numeric',
        'company_address' => 'required',
        'legal_entity' => 'required',
    ];


    public function createRetail(){
      $this->validate();

      $data = [
        'product_name' => $this->product_name,
        'product_type' => $this->product_type,
        'category_id' => $this->product_category,
        'product_information' => $this->product_information,
        'product_spesification' => $this->product_spesification,
        'price' => $this->price,
        'guarantee' => $this->guarantee,
        'product_features' => $this->product_features,
        'company_name' => $this->company_name,
        'company_type' => $this->company_type,
        'company_city' => $this->company_city,
        'company_country' => $this->company_country,
        'company_information' => $this->company_information,
        'company_address' => $this->company_address,
        'looking_for' => $this->looking_for,
        'whatsapp_contact' => $this->whatsapp_contact,
        'fullname' => $this->fullname,
        'email_address' => $this->email_address,
        'phone_number' => $this->phone_number,
        'enquiries' => $this->enquiries,
        'legal_entity' => $this->legal_entity,
        'user_id' => auth()->user()->id
      ];

      $data['brand_brochure'] = $this->catalog_brochure->store('catalog', 'public');
      $data['product_images'] = $this->product_images->store('product', 'public');

      RetailDirectory::create($data);
      session()->flash('success','Retail Directory added Successfully!');
      return redirect()->route('admin.retail');

    }

    public function render()
    {
        $company_type_data = [
            'Manufacture',
            'Distributor/Agents',
            'Retailers',
        ];
        $looking_for_data = [
          'Distributor/Agents',
          'Retailers',
          'Bussiness Owners'
        ];
        $tab = $this->tab;

        $categories = Categories::all();
        return view('livewire.pages.master.retail.retail-form',compact('tab','categories','company_type_data','looking_for_data'))->extends('layouts.master.app')->section('content');
    }
}
