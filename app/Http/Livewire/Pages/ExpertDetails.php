<?php

namespace App\Http\Livewire\Pages;

use App\Models\AskExpert;
use App\Models\Expert;
use Livewire\Component;
use App\Models\Banner;

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
        $ads = Banner::where('category','=','Ads Expert')->first();
        $banner = Banner::where('category','=','Ask Expert')->first();
        return view('livewire.pages.expert-details',compact('banner','ads'))->extends('layouts.app')->section('content');
    }
}
