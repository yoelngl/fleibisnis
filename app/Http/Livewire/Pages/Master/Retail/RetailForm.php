<?php

namespace App\Http\Livewire\Pages\Master\Retail;

use App\Models\Categories;
use Livewire\Component;

class RetailForm extends Component
{
    public $product_name;
    public $product_category;
    public $product_information;


    public function render()
    {
        $company_type = [
            'Manufacture',
            'Distributor/Agents',
            'Retailers',
        ];
        $looking_for = [
          'Distributor/Agents',
          'Retailers',
          'Bussiness Owners'
        ];

        $categories = Categories::all();
        return view('livewire.pages.master.retail.retail-form',compact('categories','company_type','looking_for'))->extends('layouts.master.app')->section('content');
    }
}
