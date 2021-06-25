<?php

namespace App\Http\Livewire\Pages\Master\Widget\Franchise;

use App\Models\Brand;
use Livewire\Component;

class BrandIndex extends Component
{
    public function render()
    {
        $brand = Brand::latest()->get();
        return view('livewire.pages.master.widget.franchise.brand-index',compact('brand'))->extends('layouts.master.app')->section('content');
    }
}
