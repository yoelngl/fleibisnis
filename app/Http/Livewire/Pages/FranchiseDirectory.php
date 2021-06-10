<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class FranchiseDirectory extends Component
{
    public function render()
    {
        return view('livewire.pages.franchise-directory')->extends('layouts.app')->section('content');
    }
}
