<?php

namespace App\Http\Livewire\Pages\Master\Franchise;

use Livewire\Component;
use App\Models\Categories;
use App\Models\FranchiseDirectory;
use Livewire\WithFileUploads;

class FranchiseForm extends Component
{
    use WithFileUploads;

    public $tab = 'brand';
    public $edit;
    public $brand_name;
    public $brand_category;
    public $origin_brands;
    public $budget_investment;
    public $brand_whatsapp;
    public $investment_duration;
    public $legal_entity;
    public $year_established;
    public $brand_images;
    public $total_outlets;
    public $brand_information;
    public $brand_logo;
    public $brand_brochure;
    public $fullname;
    public $email_address;
    public $phone_number;
    public $enquiries;

    protected $rules = [
        'brand_name' => 'required',
        'brand_category' => 'required',
        'budget_investment' => 'required',
        'origin_brands' => 'required',
        'brand_whatsapp' => 'required|numeric',
        'investment_duration' => 'required|numeric',
        'legal_entity' => 'required',
        'year_established' => 'required',
        'brand_images' => 'required|image|mimes:png,jpg,svg,jpeg|max:10024',
        'total_outlets' => 'required',
        'brand_information' => 'required',
        'brand_logo' => 'required|image|mimes:png,jpg,svg,jpeg|max:10024',
        'brand_brochure' => 'required|mimes:pdf,jpg,png,svg,jpeg|max:10024',
    ];



    public function mount($slug = null){
        if($slug){
            $this->edit = FranchiseDirectory::where('slug',$slug)->first();
            $this->brand_name = $this->edit['brand_name'];
            $this->brand_category = $this->edit['category_id'];
            $this->brand_information = $this->edit['brand_information'];
            $this->origin_brands = "'" . $this->edit['origin'] . "'";
            $this->budget_investment = "'" . $this->edit['investments'] . "'";
            $this->brand_whatsapp = $this->edit['brand_whatsapp'];
            $this->year_established = $this->edit['year_of_established'];
            $this->total_outlets = $this->edit['total_outlet'];
            $this->brand_brochure = $this->edit['brand_brochure'];
            $this->brand_logo = $this->edit['brand_logo'];
            $this->investment_duration = $this->edit['investment_duration'];
            $this->legal_entity = $this->edit['legal_entity'];
            $this->brand_images = $this->edit['brand_image'];

            $this->fullname = $this->edit['full_name'];
            $this->email_address = $this->edit['email_address'];
            $this->phone_number = $this->edit['phone_numbers'];
            $this->enquiries = $this->edit['enquiries'];
        }
    }

    public function updateFranchise($slug){
        $franchise = FranchiseDirectory::where('slug',$slug)->first();
        if($franchise['brand_image'] == $this->brand_images){
            $this->rules['brand_images'] = 'required';
        }else{
            $this->rules['brand_images'] = 'required|image|mimes:png,jpg,svg,jpeg||max:10024';
        }
        if($franchise['brand_brochure'] == $this->brand_brochure){
            $this->rules['brand_brochure'] = 'required';
        }else{
            $this->rules['brand_brochure'] = 'required|mimes:pdf,jpg,png,svg,jpeg|max:10024';
        }
        if($franchise['brand_logo'] == $this->brand_logo){
            $this->rules['brand_logo'] = 'required';
        }else{
            $this->rules['brand_logo'] = 'required|mimes:pdf,jpg,png,svg,jpeg|max:10024';
        }

        $this->validate($this->rules);

        $data = [
            'brand_name' => $this->brand_name,
            'category_id' => $this->brand_category,
            'origin' => $this->origin_brands,
            'investments' => $this->budget_investment,
            'investment_duration' => $this->investment_duration,
            'brand_whatsapp' => $this->brand_whatsapp,
            'legal_entity' => $this->legal_entity,
            'year_of_established' => $this->year_established,
            'total_outlet' => $this->total_outlets,
            'brand_information' => $this->brand_information,
            'full_name' => $this->fullname,
            'email_address' => $this->email_address,
            'phone_numbers' => $this->phone_number,
            'enquiries' => $this->enquiries,
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

          FranchiseDirectory::where('slug',$slug)->update($data);
          session()->flash('success', 'Franchise successfully updated!');
          redirect()->route('admin.franchise');


    }

    public function createFranchise(){
        $this->validate();

        $data = [
            'brand_name' => $this->brand_name,
            'category_id' => $this->brand_category,
            'origin' => $this->origin_brands,
            'investments' => $this->budget_investment,
            'investment_duration' => $this->investment_duration,
            'brand_whatsapp' => $this->brand_whatsapp,
            'legal_entity' => $this->legal_entity,
            'year_of_established' => $this->year_established,
            'total_outlet' => $this->total_outlets,
            'brand_information' => $this->brand_information,
            'full_name' => $this->fullname,
            'email_address' => $this->email_address,
            'phone_numbers' => $this->phone_number,
            'enquiries' => $this->enquiries,
            'user_id' => auth()->user()->id
          ];

          $data['brand_brochure'] = $this->brand_brochure->store('catalog', 'public');
          $data['brand_image'] = $this->brand_images->store('brand', 'public');
          $data['brand_logo'] = $this->brand_logo->store('logo', 'public');


          FranchiseDirectory::create($data);
          session()->flash('success','Franchise Directory added Successfully!');
          return redirect()->route('admin.franchise');

    }

    public function render()
    {
        $investment = ['Below IDR 100.000.000','IDR 100.000.001 - IDR 200.000.000','IDR 200.000.001 - IDR 500.000.000','IDR 500.000.001 - IDR 1.000.000.000','IDR 1.000.000.001 - IDR 2.000.000.000','Above IDR 2.000.000.000'];

        $origins = ['Local' => 'Local (Indonesia)','Overseas' => 'Overseas (International)'];
        $categories = Categories::all();

        return view('livewire.pages.master.franchise.franchise-form',compact('categories','investment','origins'))->extends('layouts.master.app')->section('content');
    }
}
