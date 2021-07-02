<?php

namespace App\Http\Livewire\Pages\Master\Widget\Slider;

use Livewire\Component;
use App\Models\Slider;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class SliderForm extends Component
{

    use WithFileUploads;

    public $title;
    public $images;
    public $link;
    public $description;
    public $edit;

    protected $rules = [
        'images' => 'required|image|mimes:png,svg,jpg,jpeg'
    ];

    public function mount($id = null){
        if($id){
            $this->edit = Slider::where('id',$id)->first();
            $this->title = $this->edit['title'];
            $this->description = $this->edit['description'];
            $this->images = $this->edit['images'];
            $this->link = $this->edit['link'];
        }
    }

    public function createSlider(){
        $this->validate();

        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'link' => $this->link,
        ];

        $data['images'] = $this->images->store('slider', 'public');
        Slider::create($data);
        session()->flash('success','Slider Succesfully created!');
        return redirect()->route('admin.slider');
    }

    public function updateSlider($id){
        $slider = Slider::find($id);
        if($slider['images'] == $this->images){
            $this->rules['images'] = 'required';
        }else{
            $this->rules['images'] = 'required|image|mimes:png,svg,jpg,jpeg';
        }
        $this->validate($this->rules);

        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'link' => $this->link,
        ];

        if($slider['images'] == $this->images){
            $data['images'] = $this->images;
        }else{
            Storage::disk('public')->delete($slider['images']);
            $data['images'] = $this->images->store('slider', 'public');
        }

        Slider::find($id)->update($data);
        session()->flash('success', 'Slider successfully updated!');
        redirect()->route('admin.slider');
    }

    public function render()
    {
        return view('livewire.pages.master.widget.slider.slider-form')->extends('layouts.master.app')->section('content');
    }
}
