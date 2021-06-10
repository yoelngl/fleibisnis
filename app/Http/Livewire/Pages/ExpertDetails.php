<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class ExpertDetails extends Component
{
    public function render()
    {
        return view('livewire.pages.expert-details')->extends('layouts.app')->section('content');
    }
}
