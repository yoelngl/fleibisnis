<?php

namespace App\Http\Livewire\Pages\Directory;

use Livewire\Component;
use App\Models\FranchiseDirectory;
use App\Models\Banner;

class FranchiseDetails extends Component
{
    public $data;

    public function mount($slug){
      $this->data = FranchiseDirectory::with('user','category')->where('slug',$slug)->first();
    }

    public function render()
    {
        $banner = Banner::where('category','=','Franchise')->first();
        return view('livewire.pages.directory.franchise-details',compact('banner'))->extends('layouts.app')->section('content');
    }
}
