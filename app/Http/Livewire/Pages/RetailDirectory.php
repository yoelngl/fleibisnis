<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class RetailDirectory extends Component
{
    public function render()
    {
        return view('livewire.pages.retail-directory')->extends('layouts.app')->section('content');
    }
}
