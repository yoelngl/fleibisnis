<?php

namespace App\Http\Livewire\Pages\Master\Expert;

use App\Models\AskExpert;
use Livewire\Component;

class ExpertIndex extends Component
{
    public function render()
    {
        $ask_expert = AskExpert::with('expert')->latest()->get();
        return view('livewire.pages.master.expert.expert-index',compact('ask_expert'))->extends('layouts.master.app')->section('content');
    }
}
