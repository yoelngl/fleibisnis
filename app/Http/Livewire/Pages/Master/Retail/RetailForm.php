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
        $categories = Categories::all();
        return view('livewire.pages.master.retail.retail-form',compact('categories'))->extends('layouts.master.app')->section('content');
    }
}
