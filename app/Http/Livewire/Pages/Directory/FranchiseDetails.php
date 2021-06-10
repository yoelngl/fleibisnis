<?php

namespace App\Http\Livewire\Pages\Directory;

use Livewire\Component;

class FranchiseDetails extends Component
{
    public function render()
    {
        return view('livewire.pages.directory.franchise-details')->extends('layouts.app')->section('content');
    }
}
