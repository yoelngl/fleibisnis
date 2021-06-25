<?php

namespace App\Http\Livewire\Pages\Directory;

use Livewire\Component;
use App\Models\RetailDirectory;
use App\Models\Banner;

class RetailDetails extends Component
{
    public $data;

    public function mount($slug){
        $this->data = RetailDirectory::where('slug',$slug)->first();
    }

    public function render()
    {
        $banner = Banner::where('category','=','Retail')->first();

        return view('livewire.pages.directory.retail-details',compact('banner'))->extends('layouts.app')->section('content');
    }
}
