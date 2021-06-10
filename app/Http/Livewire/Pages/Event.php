<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Event extends Component
{
    public function render()
    {
        return view('livewire.pages.event')->extends('layouts.app')->section('content');
    }
}
