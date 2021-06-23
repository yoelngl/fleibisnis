<?php

namespace App\Http\Livewire\Pages\Master\Expert;

use Livewire\Component;
use App\Models\AskExpert;
use App\Models\Expert;
use Illuminate\Support\Facades\Storage;

class ExpertIndex extends Component
{
    public function deleteExpert($slug){
        $data = AskExpert::where('slug',$slug)->first();
        $data->delete();
        session()->flash('success','Ask Expert deleted successfully');
        return redirect()->route('admin.ask_expert');
    }

    public function render()
    {
        $ask_expert = AskExpert::with('expert')->latest()->get();
        return view('livewire.pages.master.expert.expert-index',compact('ask_expert'))->extends('layouts.master.app')->section('content');
    }
}
