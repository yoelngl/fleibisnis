<?php

namespace App\Http\Livewire\Pages\Master\Retail;

use Livewire\Component;
use App\Models\RetailCategory;
use Livewire\WithFileUploads;
use App\Models\RetailDirectory;
use Illuminate\Support\Facades\Storage;

class RetailForm extends Component
{

    use WithFileUploads;

    public $tab = 'product';
    public $edit;
    public $product_name;
    public $retail_category;
    public $product_origin;
    public $practices;
    public $books;
    public $services;
    public $currency;
    public $price;
    public $guarantee;
    public $product_country;
    public $product_category;
    public $product_type;
    public $product_information;
    public $product_features;
    public $product_spesification;
    public $description_add;
    public $product_images;
    public $tag;

    // Company
    public $company_name;
    public $company_address;
    public $company_email;
    public $whatsapp_contact;
    public $instagram;
    public $website;
    public $partner = [];
    public $catalog_brochure;

    public $fullname;
    public $email_address;
    public $phone_number;
    public $position;


    protected $rules = [
        // 'product_name' => 'required',
        'retail_category' => 'required',
        // 'product_type' => 'required',
        // 'product_information' => 'required',
        // 'product_features' => 'required',
        // 'product_spesification' => 'required',
        // 'price' => 'required|numeric',
        // 'product_origin' => 'required',
        // 'practices' => 'required',
        // 'guarantee' => 'required',
        // 'books' => 'required',
        // 'services' => 'required',
        // 'currency' => 'required',
        // 'product_country' => 'required',
        // 'product_category' => 'required',
        // 'product_images' => 'required|image|mimes:png,jpg,svg,jpeg||max:10024',
        // 'tag' => 'required',
        //
        // // company
        // 'company_name' => 'required',
        // 'company_email' => 'required|email',
        // 'company_address' => 'required',
        // 'catalog_brochure' => 'required|mimes:pdf,jpg,png,svg,jpeg|max:10024',
        // 'whatsapp_contact' => 'required|numeric',
        // 'instagram' => 'required',
        // 'partner' => 'required'
    ];

    public function mount($slug = null){
        if($slug){
            $this->edit = RetailDirectory::where('slug',$slug)->first();

            // Product Form
            $this->product_name = $this->edit['product_name'];
            $this->price = $this->edit['product_price'];
            $this->product_spesification = $this->edit['product_spesification'];
            $this->retail_category = $this->edit['category_id'];
            $this->product_features = $this->edit['product_features'];
            $this->product_information = $this->edit['product_description'];
            $this->product_images = $this->edit['product_images'];
            $this->product_category = $this->edit['product_category'];
            $this->product_type = $this->edit['product_type'];
            $this->guarantee = $this->edit['guarantee'];
            $this->description_add = $this->edit['description_add'];
            $this->currency = $this->edit['currency'];
            $this->product_country = $this->edit['product_country'];
            $this->product_origin = $this->edit['product_origin'];
            $this->practices = $this->edit['practices'];
            $this->books = $this->edit['books'];
            $this->services = $this->edit['services'];
            $this->tag = $this->edit['tag'];

            // Company Form
            $this->company_name = $this->edit['company_name'];
            $this->company_address = $this->edit['company_address'];
            $this->whatsapp_contact = $this->edit['company_phone'];
            $this->instagram = $this->edit['instagram'];
            $this->website = $this->edit['website'];
            $this->company_email = $this->edit['company_email'];
            $partner = explode(",", $this->edit['partner']);
            if($partner){
                foreach($partner as $key => $value){
                    $this->partner[$key] = $value;
                }
            }
            $this->catalog_brochure = $this->edit['brand_brochure'];

            // Contact Form
            $this->fullname = $this->edit['contact_name'];
            $this->email_address = $this->edit['contact_email'];
            $this->phone_number = $this->edit['contact_phone'];
            $this->position = $this->edit['contact_position'];
        }
    }


    public function updateRetail($slug){
        $retail = RetailDirectory::where('slug',$slug)->first();
        // if($retail['product_images'] == $this->product_images){
        //     $this->rules['product_images'] = 'required';
        // }else{
        //     $this->rules['product_images'] = 'required|image|mimes:png,jpg,svg,jpeg||max:10024';
        // }
        // if($retail['brand_brochure'] == $this->catalog_brochure){
        //     $this->rules['catalog_brochure'] = 'required';
        // }else{
        //     $this->rules['catalog_brochure'] = 'required|mimes:pdf,jpg,png,svg,jpeg|max:10024';
        // }

        $this->validate($this->rules);
        $data = [
            // Product Form
          'product_name' => $this->product_name,
          'product_type' => $this->product_type,
          'category_id' => $this->retail_category,
          'product_description' => $this->product_information,
          'product_spesification' => $this->product_spesification,
          'product_price' => $this->price,
          'guarantee' => $this->guarantee,
          'product_features' => $this->product_features,
          'books' => $this->books,
          'practices' => $this->practices,
          'services' => $this->services,
          'currency' => $this->currency,
          'product_country' => $this->product_country,
          'product_category' => $this->product_category,
          'product_origin' => $this->product_origin,
          'description_add' => $this->description_add,
          'tag' => $this->tag,

          // Company Form
          'company_name' => $this->company_name,
          'company_address' => $this->company_address,
          'company_phone' => $this->whatsapp_contact,
          'instagram' => $this->instagram,
          'website' => $this->website,
          'company_email' => $this->company_email,
          'partner' => implode(($this->partner >= 1) ? "," : "", $this->partner),

          // Contact Form
          'contact_name' => $this->fullname,
          'contact_email' => $this->email_address,
          'contact_position' => $this->position,
          'contact_phone' => $this->phone_number,
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
        // Product Form
        'product_name' => $this->product_name,
        'product_type' => $this->product_type,
        'category_id' => $this->retail_category,
        'product_description' => $this->product_information,
        'product_spesification' => $this->product_spesification,
        'product_price' => $this->price,
        'guarantee' => $this->guarantee,
        'product_features' => $this->product_features,
        'books' => $this->books,
        'practices' => $this->practices,
        'services' => $this->services,
        'currency' => $this->currency,
        'product_country' => $this->product_country,
        'product_category' => $this->product_category,
        'product_origin' => $this->product_origin,
        'description_add' => $this->description_add,
        'tag' => $this->tag,

        // Company
        'company_name' => $this->company_name,
        'company_address' => $this->company_address,
        'company_phone' => $this->whatsapp_contact,
        'instagram' => $this->instagram,
        'website' => $this->website,
        'company_email' => $this->company_email,
        'partner' => implode(($this->partner >= 1) ? "," : "", $this->partner),

        // Contact Form
        'contact_name' => $this->fullname,
        'contact_email' => $this->email_address,
        'contact_position' => $this->phone_number,
        'contact_phone' => $this->phone_number,
        'user_id' => auth()->user()->id
      ];

      if($this->catalog_brochure){
      $data['brand_brochure'] = $this->catalog_brochure->store('catalog', 'public');
      }
      if($this->product_images){
          $data['product_images'] = $this->product_images->store('product', 'public');
      }

      RetailDirectory::create($data);
      session()->flash('success','Retail Directory added Successfully!');
      return redirect()->route('admin.retail');
    }

    public function render()
    {
        $tab = $this->tab;

        $partner_data = [
            'Distributors',
            'Agent & Retailer',
            'Bussiness Owners/End Users'
        ];

        $tag_data = [
            'Terpopuler',
            'Rekomendasi',
            'Termurah',
            'Terbaik',
            'Terbaru',
            'Trending',
            'Best Seller'
        ];

        $categories = RetailCategory::all();
        return view('livewire.pages.master.retail.retail-form',compact('tab','categories','partner_data','tag_data'))->extends('layouts.master.app')->section('content');
    }
}
