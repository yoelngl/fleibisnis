<?php

namespace App\Http\Livewire\Pages\Master\Widget\Slider;

use Livewire\Component;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderIndex extends Component
{

    public function deleteSlider($id){
        $data = Slider::find($id);
        Storage::disk('public')->delete($data['images']);
        $data->delete();
        session()->flash('success','Slider deleted successfully');
        return redirect()->route('admin.slider');
    }

    public function render()
    {
        $slider = Slider::latest()->get();
        return view('livewire.pages.master.widget.slider.slider-index',compact('slider'))->extends('layouts.master.app')->section('content');
    }
}
