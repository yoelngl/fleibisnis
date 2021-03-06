<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\FranchiseCategory;
use App\Models\FranchiseDirectory as Franchise;
use App\Models\Banner;


class FranchiseDirectory extends Component
{
    public $search;
    public $load_more = 5;
    public $category_id;
    public $origins;
    public $investments;
    public $brand;
    public $category;
    protected $queryString = ['brand','category'];


    public $listeners = ['load-more' => 'loadMore'];

    public function loadMore(){
      $this->load_more = $this->load_more + 4;
    }

    public function render()
    {
        $banner = Banner::where('category','=','Franchise')->first();
        $ads = Banner::where('category','=','Ads Franchise')->first();

        $searchTerm = '%' . $this->search . '%';

        $origin = ['Local(Indonesia)' => 'Local (Indonesia)','Overseas(International)' => 'Overseas (International)'];

        $franchises = Franchise::with('user','category')->where('brand_name','like',$searchTerm)->paginate($this->load_more);

        if($this->brand){
            $searchBrand = '%' . $this->brand . '%';
            $franchises = Franchise::with('user','category')->where('brand_name','like',$searchBrand)->paginate($this->load_more);
        }
        if($this->category){
            $franchises = Franchise::with('user','category')->whereHas('category', function($q){
                $q->where('slug', '=', $this->category);
            })->paginate($this->load_more);
        }
        if($this->category && $this->brand){
            $searchBrand = '%' . $this->brand . '%';
            $franchises = Franchise::with('user','category')->whereHas('category', function($q){
                $q->where('slug', '=', $this->category);
            })->where('brand_name','like',$searchBrand)->paginate($this->load_more);
        }
        if($this->category_id != null){
            $franchises = Franchise::with('user','category')->where('category_id',$this->category_id)->paginate($this->load_more);
        }
        if($this->origins != null){
            $franchises = Franchise::with('user','category')->where('brand_origin',$this->origins)->paginate($this->load_more);
        }
        $categories = FranchiseCategory::all();
        return view('livewire.pages.franchise-directory',compact('categories','origin','franchises','banner','ads'))->extends('layouts.app')->section('content');
    }
}
