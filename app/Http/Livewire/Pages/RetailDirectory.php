<?php

namespace App\Http\Livewire\Pages;

use App\Models\Categories;
use Livewire\Component;
use App\Models\RetailDirectory as Retail;

class RetailDirectory extends Component
{
    public $search;
    public $perPage = 10;
    public $category_id;

    public function render()
    {
        $searchTerm = '%' . $this->search . '%';
        $category = Categories::all();
        $retail = Retail::with('user','category')->where('product_name','like',$searchTerm)->latest()->paginate($this->perPage);
        if($this->category_id != null){
            $retail = Retail::with('user','category')->where('category_id',$this->category_id)->latest()->paginate($this->perPage);
        }
        return view('livewire.pages.retail-directory',compact('retail','category'))->extends('layouts.app')->section('content');
    }
}
