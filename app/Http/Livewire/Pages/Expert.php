<?php

namespace App\Http\Livewire\Pages;

use App\Models\AskExpert;
use App\Models\Expert as ModelsExpert;
use Livewire\Component;
use App\Models\Banner;

class Expert extends Component
{
    public $load_more = 2;
    public $search;
    public $listeners = ['load-more' => 'loadMore'];
    public $experts_name;

    public function loadMore(){
        $this->load_more = $this->load_more + 2;
    }


    public function render()
    {
        $banner = Banner::where('category','=','Ask Expert')->first();

        $searchTerm = '%' . $this->search . '%';

        $experts = ModelsExpert::all();
        $qna = AskExpert::with('expert')->where('title','like',$searchTerm)->latest()->paginate($this->load_more);
        if(isset($this->experts_name) && $this->experts_name != "" ){
            $qna = AskExpert::with('expert')->where('title','like',$searchTerm)->where('expert_id',$this->experts_name)->paginate($this->load_more);
        }
        return view('livewire.pages.expert',compact('experts','qna','banner'))->extends('layouts.app')->section('content');
    }
}
