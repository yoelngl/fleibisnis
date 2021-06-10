<?php

namespace App\Http\Livewire\Pages\Directory;

use Livewire\Component;

class RetailDetails extends Component
{
    public function render()
    {
        return view('livewire.pages.directory.retail-details')->extends('layouts.app')->section('content');
    }
}
