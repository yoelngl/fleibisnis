<?php

namespace App\Http\Livewire\Pages\Master;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.pages.master.dashboard')->extends('layouts.master.app')->section('content');
    }
}
