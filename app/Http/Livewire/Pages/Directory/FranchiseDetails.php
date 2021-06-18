<?php

namespace App\Http\Livewire\Pages\Directory;

use Livewire\Component;
use App\Models\FranchiseDirectory;

class FranchiseDetails extends Component
{
    public $data;

    public function mount($slug){
      $this->data = FranchiseDirectory::with('user','category')->where('slug',$slug)->first();
    }

    public function render()
    {
        return view('livewire.pages.directory.franchise-details')->extends('layouts.app')->section('content');
    }
}
