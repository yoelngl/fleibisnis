<?php

namespace App\Http\Livewire\Pages\Master\Franchise;

use Livewire\Component;
use App\Models\FranchiseCategory;
use App\Models\FranchiseDirectory;
use Livewire\WithFileUploads;

class FranchiseForm extends Component
{
    use WithFileUploads;

    public $tab = 'brand';
    public $edit;

    // Brand
    public $brand_name;
    public $franchise_category;
    public $bussiness_concept;
    public $bussiness_category;
    public $bussiness_type;
    public $company_outlet;
    public $company_year;
    public $brand_origin;
    public $brand_country;
    public $brand_description;
    public $brand_images;
    public $brand_logo;
    public $brand_brochure;
    public $tag;

    // Investment
    public $currency;
    public $investment_value;
    public $initial_cost;
    public $royalty_fee;
    public $license_time;
    public $roi;
    public $estimated_profit;

    // Company
    public $company_name;
    public $company_address;
    public $company_email;
    public $whatsapp_contact;
    public $instagram;
    public $website;

    // Additional
    public $employees_number;
    public $store_area;
    public $store_location_requirements;
    public $store_services_requirements;
    public $employees_training;
    public $sop;
    public $crm_system;
    public $operational;
    public $hki;
    public $stpw;
    public $nib;
    public $store_images;

    // Contact
    public $fullname;
    public $email_address;
    public $phone_number;
    public $position;

    public $packet = [];
    public $packet_name;
    public $jenis_paket;
    public $ukuran_gerai;
    public $harga_investasi;
    public $biaya_awal;
    public $return_investment;
    public $perkiraan_laba;
    public $inputs = [];
    public $i = 1;

    protected $rules = [
        // Brand
        'franchise_category' => 'required',
        // 'brand_name' => 'required',
        // 'franchise_category' => 'required',
        // 'bussiness_concept' => 'required',
        // 'bussiness_type' => 'required',
        // 'bussiness_category' => 'required',
        // 'company_outlet' => 'required|numeric',
        // 'company_year' => 'required|numeric',
        // 'brand_origin' => 'required',
        // 'brand_country' => 'required',
        // 'brand_description' => 'required',
        // 'brand_images' => 'required|image|mimes:png,jpg,svg,jpeg|max:10024',
        // 'brand_logo' => 'required|image|mimes:png,jpg,svg,jpeg|max:10024',
        // 'brand_brochure' => 'required|mimes:pdf,jpg,png,svg,jpeg|max:10024',
        // 'tag' => 'required',
        //
        // // Investment
        // 'investment_value' => 'required|numeric',
        // 'initial_cost' => 'required|numeric',
        // 'royalty_fee' => 'required|numeric',
        // 'license_time' => 'required|numeric',
        // 'roi' => 'required|numeric',
        // 'estimated_profit' => 'required|numeric',
        // 'currency' => 'required',
        //
        // // Company
        // 'company_name' => 'required',
        // 'company_email' => 'required|email',
        // 'company_address' => 'required',
        // 'whatsapp_contact' => 'required|numeric',
        // 'instagram' => 'required',
        // 'website' => 'required',
        // 'store_images' => 'required|image|mimes:png,jpg,svg,jpeg|max:10024',
        //
        // // Additional Informations
        // 'employees_number' => 'required|numeric',
        // 'store_area' => 'required|numeric',
        // 'store_location_requirements' => 'required',
        // 'store_services_requirements' => 'required',
        // 'employees_training' => 'required',
        // 'sop' => 'required',
        // 'operational' => 'required',
        // 'hki' => 'required',
        // 'stpw' => 'required',
        // 'nib' => 'required',
        // 'crm_system' => 'required',

    ];



    public function mount($slug = null){

        if($slug){
            $this->edit = FranchiseDirectory::where('slug',$slug)->first();
            $this->brand_name = $this->edit['brand_name'];
            $this->franchise_category = $this->edit['category_id'];
            $this->brand_description = $this->edit['brand_description'];
            $this->bussiness_type = $this->edit['bussiness_type'];
            $this->bussiness_concept = $this->edit['bussiness_concept'];
            $this->bussiness_category = $this->edit['bussiness_category'];
            $this->company_outlet = $this->edit['company_outlet'];
            $this->company_year = $this->edit['company_year'];
            $this->brand_origin = $this->edit['brand_origin'];
            $this->brand_country = $this->edit['brand_country'];
            $this->crm_system = $this->edit['crm_system'];
            $this->brand_images = $this->edit['brand_image'];
            $this->brand_logo = $this->edit['$brand_logo'];
            $this->brand_brochure = $this->edit['brand_brochure'];
            $this->store_images = $this->edit['store_images'];
            $this->tag = $this->edit['tag'];
            $this->investment_value = $this->edit['investment_value'];
            $this->initial_cost = $this->edit['initial_cost'];
            $this->currency = $this->edit['currency'];
            $this->royalty_fee = $this->edit['royalty_fee'];
            $this->license_time = $this->edit['license_time'];
            $this->roi = $this->edit['roi'];
            $this->estimated_profit = $this->edit['estimated_profit'];
            $this->brand_image = $this->edit['brand_image'];
            $this->brand_logo = $this->edit['brand_logo'];
            $this->brand_brochure = $this->edit['brand_brochure'];
            $this->company_name = $this->edit['company_name'];
            $this->company_address = $this->edit['company_address'];
            $this->whatsapp_contact = $this->edit['whatsapp_contact'];
            $this->instagram = $this->edit['instagram'];
            $this->company_email = $this->edit['company_email'];
            $this->website = $this->edit['website'];
            $this->employees_number = $this->edit['employees_number'];
            $this->store_services_requirements = $this->edit['store_services_requirements'];
            $this->employees_training = $this->edit['employees_training'];
            $this->sop = $this->edit['sop'];
            $this->store_area = $this->edit['store_area'];
            $this->store_location_requirements = $this->edit['store_location_requirements'];
            $this->operational = $this->edit['operational'];
            $this->hki = $this->edit['hki'];
            $this->stpw = $this->edit['stpw'];
            $this->nib = $this->edit['nib'];
            $this->i = 1;
            if($this->edit['packet']){
                foreach(json_decode($this->edit['packet']) as $key => $value) {
                    $this->packet_name[$key + 1] = $value->packet_name;
                    $this->jenis_paket[$key + 1] = $value->jenis_paket;
                    $this->ukuran_gerai[$key + 1] = $value->ukuran_gerai;
                    $this->harga_investasi[$key + 1] = $value->harga_investasi;
                    $this->biaya_awal[$key + 1] = $value->biaya_awal;
                    $this->return_investment[$key + 1] = $value->return_investment;
                    $this->perkiraan_laba[$key + 1] = $value->perkiraan_laba;
                    $this->i = $this->i + 1;
                    array_push($this->inputs ,$this->i);
                }
            }
            $this->fullname = $this->edit['contact_name'];
            $this->email_address = $this->edit['contact_email'];
            $this->phone_number = $this->edit['contact_phone'];
            $this->position = $this->edit['contact_position'];

        }
    }

    public function addPacket($i){
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
        $i = $i + 1;
        unset($this->packet_name[$i + 1]);
    }

    public function updateFranchise($slug){
        $franchise = FranchiseDirectory::where('slug',$slug)->first();
        // if($franchise['brand_image'] == $this->brand_images){
        //     $this->rules['brand_images'] = 'required';
        // }else{
        //     $this->rules['brand_images'] = 'required|image|mimes:png,jpg,svg,jpeg||max:10024';
        // }
        // if($franchise['brand_brochure'] == $this->brand_brochure){
        //     $this->rules['brand_brochure'] = 'required';
        // }else{
        //     $this->rules['brand_brochure'] = 'required|mimes:pdf,jpg,png,svg,jpeg|max:10024';
        // }
        // if($franchise['brand_logo'] == $this->brand_logo){
        //     $this->rules['brand_logo'] = 'required';
        // }else{
        //     $this->rules['brand_logo'] = 'required|mimes:pdf,jpg,png,svg,jpeg|max:10024';
        // }
        // if($franchise['store_images'] == $this->store_images){
        //     $this->rules['store_images'] = 'required';
        // }else{
        //     $this->rules['store_images'] = 'required|mimes:pdf,jpg,png,svg,jpeg|max:10024';
        // }

        $this->validate($this->rules);

        $data = [
            'brand_name' => $this->brand_name,
            'category_id' => $this->franchise_category,
            'bussiness_type' => $this->bussiness_type,
            'bussiness_concept' => $this->bussiness_concept,
            'bussiness_category' => $this->bussiness_category,
            'company_outlet' => $this->company_outlet,
            'company_year' => $this->company_year,
            'brand_origin' => $this->brand_origin,
            'brand_country' => $this->brand_country,
            'tag' => $this->tag,
            'roi' => $this->roi,
            'brand_description' => $this->brand_description,
            'investment_value' => $this->investment_value,
            'initial_cost' => $this->initial_cost,
            'royalty_fee' => $this->royalty_fee,
            'license_time' => $this->license_time,
            'currency' => $this->currency,
            'estimated_profit' => $this->estimated_profit,
            'company_name' => $this->company_name,
            'company_address' => $this->company_address,
            'whatsapp_contact' => $this->whatsapp_contact,
            'instagram' => $this->instagram,
            'company_email' => $this->company_email,
            'website' => $this->website,
            'employees_number' => $this->employees_number,
            'store_area' => $this->store_area,
            'store_location_requirements' => $this->store_location_requirements,
            'store_services_requirements' => $this->store_services_requirements,
            'employees_training' => $this->employees_training,
            'sop' => $this->sop,
            'crm_system' => $this->crm_system,
            'operational' => $this->operational,
            'hki' => $this->hki,
            'stpw' => $this->stpw,
            'nib' => $this->nib,
            'contact_name' => $this->fullname,
            'contact_email' => $this->email_address,
            'contact_phone' => $this->phone_number,
            'contact_position' => $this->position,
            'user_id' => auth()->user()->id
          ];

          if($franchise['brand_image'] == $this->brand_images){
            $data['brand_image'] = $this->brand_images;
          }else{
            Storage::disk('public')->delete($franchise['brand_image']);
            $data['brand_image'] = $this->brand_images->store('brand', 'public');

          }
          if($franchise['brand_brochure'] == $this->brand_brochure){
            $data['brand_brochure'] = $this->brand_brochure;
          }else{
                Storage::disk('public')->delete($franchise['brand_brochure']);
                $data['brand_brochure'] = $this->brand_brochure->store('catalog', 'public');
          }
          if($franchise['brand_logo'] == $this->brand_logo){
            $data['brand_logo'] = $this->brand_logo;
          }else{
                Storage::disk('public')->delete($franchise['brand_logo']);
                $data['brand_logo'] = $this->brand_logo->store('logo', 'public');
          }
          if($franchise['store_images'] == $this->store_images){
            $data['store_images'] = $this->store_images;
          }else{
                Storage::disk('public')->delete($franchise['store_images']);
                $data['store_images'] = $this->store_images->store('grow', 'public');
          }
          if($this->packet_name){
              foreach($this->packet_name as $key => $value){
                  $this->packet[] = [
                      'packet_name' => $this->packet_name[$key],
                      'jenis_paket' => $this->jenis_paket[$key],
                      'ukuran_gerai' => $this->ukuran_gerai[$key],
                      'harga_investasi' => $this->harga_investasi[$key],
                      'biaya_awal' => $this->biaya_awal[$key],
                      'return_investment' => $this->return_investment[$key],
                      'perkiraan_laba' => $this->perkiraan_laba[$key],
                  ];
              }
              $data['packet'] = json_encode($this->packet);
          }


          FranchiseDirectory::where('slug',$slug)->update($data);
          session()->flash('success', 'Franchise successfully updated!');
          redirect()->route('admin.franchise');


    }

    public function createFranchise(){
        $this->validate();

        $data = [
            'brand_name' => $this->brand_name,
            'category_id' => $this->franchise_category,
            'bussiness_type' => $this->bussiness_type,
            'bussiness_concept' => $this->bussiness_concept,
            'bussiness_category' => $this->bussiness_category,
            'company_outlet' => $this->company_outlet,
            'company_year' => $this->company_year,
            'brand_origin' => $this->brand_origin,
            'brand_country' => $this->brand_country,
            'tag' => $this->tag,
            'roi' => $this->roi,
            'brand_description' => $this->brand_description,
            'investment_value' => $this->investment_value,
            'initial_cost' => $this->initial_cost,
            'royalty_fee' => $this->royalty_fee,
            'license_time' => $this->license_time,
            'estimated_profit' => $this->estimated_profit,
            'company_name' => $this->company_name,
            'company_address' => $this->company_address,
            'whatsapp_contact' => $this->whatsapp_contact,
            'instagram' => $this->instagram,
            'company_email' => $this->company_email,
            'website' => $this->website,
            'employees_number' => $this->employees_number,
            'store_area' => $this->store_area,
            'currency' => $this->currency,
            'store_location_requirements' => $this->store_location_requirements,
            'store_services_requirements' => $this->store_services_requirements,
            'employees_training' => $this->employees_training,
            'sop' => $this->sop,
            'crm_system' => $this->crm_system,
            'operational' => $this->operational,
            'hki' => $this->hki,
            'stpw' => $this->stpw,
            'nib' => $this->nib,
            'contact_name' => $this->fullname,
            'contact_email' => $this->email_address,
            'contact_phone' => $this->phone_number,
            'contact_position' => $this->position,
            'user_id' => auth()->user()->id
          ];
          if($this->brand_brochure){
              $data['brand_brochure'] = $this->brand_brochure->store('catalog', 'public');
          }
          if($this->brand_images){
              $data['brand_image'] = $this->brand_images->store('brand', 'public');
          }
          if($this->brand_logo){
              $data['brand_logo'] = $this->brand_logo->store('logo', 'public');
          }
          if($this->store_images){
              $data['store_images'] = $this->brand_logo->store('grow', 'public');
          }

          if($this->packet_name){
              foreach($this->packet_name as $key => $value){
                  $this->packet[] = [
                      'packet_name' => $this->packet_name[$key],
                      'jenis_paket' => $this->jenis_paket[$key],
                      'ukuran_gerai' => $this->ukuran_gerai[$key],
                      'harga_investasi' => $this->harga_investasi[$key],
                      'biaya_awal' => $this->biaya_awal[$key],
                      'return_investment' => $this->return_investment[$key],
                      'perkiraan_laba' => $this->perkiraan_laba[$key],
                  ];
              }
              $data['packet'] = json_encode($this->packet);
          }





          FranchiseDirectory::create($data);
          session()->flash('success','Franchise Directory added Successfully!');
          return redirect()->route('admin.franchise');

    }

    public function render()
    {
        $tag_data = [
            'Terpopuler',
            'Rekomendasi',
            'Termurah',
            'Terbaik',
            'Terbaru',
            'Trending',
            'Best Seller'
        ];

        $concept = [
            'Franchise/Waralaba','Kemitraan','Peluang Usaha','Lain-Lain'
        ];

        $yon = [
            'Y' => 'Yes',
            'N' => 'No'
        ];

        $origins = ['Local' => 'Local (Indonesia)','Overseas' => 'Overseas (International)'];
        $categories = FranchiseCategory::all();

        return view('livewire.pages.master.franchise.franchise-form',compact('yon','tag_data','categories','concept','origins'))->extends('layouts.master.app')->section('content');
    }
}
