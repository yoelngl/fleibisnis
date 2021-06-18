<?php

namespace App\Http\Livewire\Pages;

use App\Models\Categories;
use Livewire\Component;
use App\Models\RetailDirectory as Retail;

class RetailDirectory extends Component
{
    public $search;
    public $load_more = 5;
    public $category_id;
    public $listeners = ['load-more' => 'loadMore'];

    public function loadMore(){
      $this->load_more = $this->load_more + 4;
    }

    public function render()
    {
        $searchTerm = '%' . $this->search . '%';
        $category = Categories::all();
        $retail = Retail::with('user','category')->where('product_name','like',$searchTerm)->latest()->paginate($this->load_more);
        if($this->category_id != null){
            $retail = Retail::with('user','category')->where('category_id',$this->category_id)->latest()->paginate($this->load_more);
        }
        return view('livewire.pages.retail-directory',compact('retail','category'))->extends('layouts.app')->section('content');
    }
}
