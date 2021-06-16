<?php

namespace App\Http\Livewire\Pages\Master\Retail;

use Livewire\Component;
use App\Models\Categories;
use Livewire\WithFileUploads;
use App\Models\RetailDirectory;
use Illuminate\Support\Facades\Storage;

class RetailForm extends Component
{

    use WithFileUploads;

    public $tab = 'product';
    public $edit;
    public $product_name;
    public $product_category;
    public $product_information;
    public $product_type;
    public $product_features;
    public $product_spesification;
    public $price;
    public $guarantee;
    public $product_images;
    public $product_images_data;

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

    public function mount($slug = null){
        if($slug){
            $this->edit = RetailDirectory::where('slug',$slug)->first();
            $this->product_name = $this->edit['product_name'];
            $this->price = $this->edit['price'];
            $this->product_spesification = $this->edit['product_spesification'];
            $this->product_features = $this->edit['product_features'];
            $this->product_information = $this->edit['product_information'];
            $this->product_images = $this->edit['product_images'];
            $this->product_category = $this->edit['category_id'];
            $this->product_type = $this->edit['product_type'];
            $this->guarantee = $this->edit['guarantee'];
            $this->company_name = $this->edit['company_name'];
            $this->company_city = $this->edit['company_city'];
            $this->legal_entity = $this->edit['legal_entity'];
            $this->company_country = $this->edit['company_country'];
            $this->company_address = $this->edit['company_address'];
            $this->whatsapp_contact = $this->edit['brand_whatsapp'];
            $this->company_type = "'" . $this->edit['company_type'] . "'";
            $this->looking_for = "'" . $this->edit['looking_for'] . "'";
            $this->product_category = $this->edit['category_id'];
            $this->company_information = $this->edit['company_information'];

            $this->fullname = $this->edit['full_name'];
            $this->catalog_brochure = $this->edit['brand_brochure'];
            $this->email_address = $this->edit['email_address'];
            $this->phone_number = $this->edit['phone_numbers'];
            $this->enquiries = $this->edit['enquiries'];
        }
    }


    public function updateRetail($slug){
        $retail = RetailDirectory::where('slug',$slug)->first();
        if($retail['product_images'] == $this->product_images){
            $this->rules['product_images'] = 'required';
        }else{
            $this->rules['product_images'] = 'required|image|mimes:png,jpg,svg,jpeg||max:10024';
        }
        if($retail['brand_brochure'] == $this->catalog_brochure){
            $this->rules['catalog_brochure'] = 'required';
        }else{
            $this->rules['catalog_brochure'] = 'required|mimes:pdf,jpg,png,svg,jpeg|max:10024';
        }

        $this->validate($this->rules);

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
            'brand_whatsapp' => $this->whatsapp_contact,
            'full_name' => $this->fullname,
            'email_address' => $this->email_address,
            'phone_numbers' => $this->phone_number,
            'enquiries' => $this->enquiries,
            'legal_entity' => $this->legal_entity,
            'user_id' => auth()->user()->id
          ];
          if($retail['product_images'] == $this->product_images){
            $data['product_images'] = $this->product_images;
          }else{
            Storage::disk('public')->delete($retail['product_images']);
            $data['product_images'] = $this->product_images->store('product', 'public');

          }
          if($retail['brand_brochure'] == $this->catalog_brochure){
            $data['brand_brochure'] = $this->catalog_brochure;
          }else{
                Storage::disk('public')->delete($retail['brand_brochure']);
                $data['brand_brochure'] = $this->catalog_brochure->store('catalog', 'public');
          }


          RetailDirectory::where('slug',$slug)->update($data);
          session()->flash('success', 'Retail successfully updated!');
          redirect()->route('admin.retail');


    }

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
        'brand_whatsapp' => $this->whatsapp_contact,
        'full_name' => $this->fullname,
        'email_address' => $this->email_address,
        'phone_numbers' => $this->phone_number,
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
            'Distributors/Agents',
            'Retailers',
        ];
        $looking_for_data = [
          'Distributors/Agents',
          'Retailers',
          'Bussiness Owners'
        ];
        $tab = $this->tab;

        $categories = Categories::all();
        return view('livewire.pages.master.retail.retail-form',compact('tab','categories','company_type_data','looking_for_data'))->extends('layouts.master.app')->section('content');
    }
}
