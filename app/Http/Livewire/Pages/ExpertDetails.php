<?php

namespace App\Http\Livewire\Pages;

use App\Models\AskExpert;
use App\Models\Expert;
use Livewire\Component;

class ExpertDetails extends Component
{
    public $expert;
    public $qna;

    public function mount($slug){
        $this->expert = Expert::where('slug',$slug)->first();
        $this->qna = AskExpert::where('expert_id',$this->expert->id)->get();
    }

    public function render()
    {

        return view('livewire.pages.expert-details')->extends('layouts.app')->section('content');
    }
}
