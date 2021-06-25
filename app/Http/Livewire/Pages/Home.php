<?php

namespace App\Http\Livewire\Pages;

use App\Models\FranchiseDirectory;
use App\Models\TodayNews;
use Livewire\Component;
use App\Models\Banner;
use App\Models\Slider;

class Home extends Component
{
    public function render()
    {
        $ads = Banner::where('category','=','Ads Home')->first();
        $slider = Slider::all();

        $franchises = FranchiseDirectory::with('category')->latest()->get();
        $today_news = TodayNews::with('category')->latest()->get();
        return view('livewire.pages.home',compact('franchises','today_news','ads','slider'))->extends('layouts.app')->section('content');
    }
}
