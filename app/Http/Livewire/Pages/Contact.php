<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Banner;

class Contact extends Component
{
    public function render()
    {
        $banner = Banner::where('category','=','Contact')->first();
        return view('livewire.pages.contact',compact('banner'))->extends('layouts.app')->section('content');
    }
}
