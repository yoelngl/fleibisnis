<?php

namespace App\Http\Livewire\Pages\Master\Widget;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Expert as ModelsExpert;
use Illuminate\Support\Facades\Storage;

class Expert extends Component
{

    public function deleteExpert($slug){
      $expert = ModelsExpert::where('slug',$slug)->first();

      Storage::disk('public')->delete($expert['images']);

      $expert->delete();

      session()->flash('success','Expert deleted successfully');
      return redirect()->route('admin.expert');
    }

    public function render()
    {
        $experts = ModelsExpert::latest()->get();
        return view('livewire.pages.master.widget.expert',compact('experts'))->extends('layouts.master.app')->section('content');
    }
}
