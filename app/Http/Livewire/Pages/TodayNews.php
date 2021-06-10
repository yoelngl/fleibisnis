<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class TodayNews extends Component
{
    public function render()
    {
        return view('livewire.pages.today-news')->extends('layouts.app')->section('content');
    }
}
