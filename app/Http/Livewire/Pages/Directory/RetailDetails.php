<?php

namespace App\Http\Livewire\Pages\Directory;

use Livewire\Component;
use App\Models\RetailDirectory;

class RetailDetails extends Component
{
    public $data;

    public function mount($slug){
        $this->data = RetailDirectory::where('slug',$slug)->first();
    }

    public function render()
    {
        return view('livewire.pages.directory.retail-details')->extends('layouts.app')->section('content');
    }
}
