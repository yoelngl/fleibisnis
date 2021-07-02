<?php

namespace App\Http\Livewire\Pages;

use App\Models\FranchiseDirectory;
use App\Models\TodayNews;
use Livewire\Component;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\FranchiseCategory;
use App\Models\Slider;

class Home extends Component
{
    public $search_bg;
    public $category;
    public $search;

    public function find(){
        return redirect()->route('franchise-directory',['brand' => $this->search,'category' => $this->category]);
    }

    public function render()
    {
        $ads = Banner::where('category','=','Ads Home')->first();
        $this->search_bg = Banner::where('category','=','Search')->first();
        $slider = Slider::all();
        $brand = Brand::all();
        $categories = FranchiseCategory::all();

        $franchises = FranchiseDirectory::with('category')->latest()->get();
        $today_news = TodayNews::with('category')->latest()->get();
        return view('livewire.pages.home',compact('franchises','today_news','ads','slider','brand','categories'))->extends('layouts.app')->section('content');
    }
}
