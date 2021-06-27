<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Banner;
use App\Models\Footer;

class Contact extends Component
{
    public function render()
    {
        $banner = Banner::where('category','=','Contact')->first();
        $footer = Footer::first();
        return view('livewire.pages.contact',compact('banner','footer'))->extends('layouts.app')->section('content');
    }
}
