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
