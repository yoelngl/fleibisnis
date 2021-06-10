<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Expert extends Component
{
    public function render()
    {
        return view('livewire.pages.expert')->extends('layouts.app')->section('content');
    }
}
