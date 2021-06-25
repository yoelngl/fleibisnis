<?php

namespace App\Http\Livewire\Pages;

use App\Models\FranchiseDirectory;
use App\Models\TodayNews;
use Livewire\Component;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\Slider;

class Home extends Component
{
    public $search;
    public $category;

    public function find(){

    }

    public function render()
    {
        $ads = Banner::where('category','=','Ads Home')->first();
        $search = Banner::where('category','=','Search')->first();
        $slider = Slider::all();
        $brand = Brand::all();
        $categories = Categories::all();

        $franchises = FranchiseDirectory::with('category')->latest()->get();
        $today_news = TodayNews::with('category')->latest()->get();
        return view('livewire.pages.home',compact('franchises','today_news','ads','slider','search','brand','categories'))->extends('layouts.app')->section('content');
    }
}
