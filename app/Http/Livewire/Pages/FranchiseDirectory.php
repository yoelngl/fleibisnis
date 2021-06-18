<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Categories;
use App\Models\FranchiseDirectory as Franchise;


class FranchiseDirectory extends Component
{
    public $search;
    public $load_more = 5;
    public $category_id;
    public $origins;
    public $investments;


    public $listeners = ['load-more' => 'loadMore'];

    public function loadMore(){
      $this->load_more = $this->load_more + 4;
    }



    public function render()
    {

        $searchTerm = '%' . $this->search . '%';
        $investment = ['Below IDR 100.000.000','IDR 100.000.001 - IDR 200.000.000','IDR 200.000.001 - IDR 500.000.000','IDR 500.000.001 - IDR 1.000.000.000','IDR 1.000.000.001 - IDR 2.000.000.000','Above IDR 2.000.000.000'];
        $origin = ['Local' => 'Local (Indonesia)','Overseas' => 'Overseas (International)'];

        $franchises = Franchise::with('user','category')->where('brand_name','like',$searchTerm)->paginate($this->load_more);
        if($this->category_id != null){
            $franchises = Franchise::with('user','category')->where('category_id',$this->category_id)->paginate($this->load_more);
        }
        if($this->investments != null){
            $franchises = Franchise::with('user','category')->where('investments',$this->investments)->paginate($this->load_more);
        }
        if($this->origins != null){
            $franchises = Franchise::with('user','category')->where('origin',$this->origins)->paginate($this->load_more);
        }
        $categories = Categories::all();
        return view('livewire.pages.franchise-directory',compact('categories','origin','investment','franchises'))->extends('layouts.app')->section('content');
    }
}
