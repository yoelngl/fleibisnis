<?php

namespace App\Http\Livewire\Pages;

use App\Models\FranchiseDirectory;
use App\Models\TodayNews;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $franchises = FranchiseDirectory::with('category')->latest()->get();
        $today_news = TodayNews::with('category')->latest()->get();
        return view('livewire.pages.home',compact('franchises','today_news'))->extends('layouts.app')->section('content');
    }
}
