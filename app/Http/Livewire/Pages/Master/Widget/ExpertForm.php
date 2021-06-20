<?php

namespace App\Http\Livewire\Pages\Master\Widget;

use App\Models\Expert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ExpertForm extends Component
{

    use WithFileUploads;

    public $expert_name;
    public $images;
    public $description;
    public $address;
    public $facebook;
    public $instagram;
    public $linkedin;
    public $twitter;
    public $edit;
    public $position;


    protected $rules = [
        'expert_name' => 'required',
        'images' => 'required|image|mimes:png,svg,jpeg,jpg',
        'description' => 'required',
        'address' => 'required',
        'position' => 'required',
    ];

    public function createExpert(){
        $this->validate();

        $data = [
            'name' => $this->expert_name,
            'description' => $this->description,
            'address' => $this->address,
            'position' => $this->position,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'linkedin' => $this->linkedin,
            'twitter' => $this->twitter,
        ];

      $data['images'] = $this->images->store('expert', 'public');
      Expert::create($data);
      session()->flash('success','Expert Succesfully created!');
      return redirect()->route('admin.expert');
    }

    public function mount($slug = null){
        if($slug){
            $this->edit = Expert::where('slug',$slug)->first();
            $this->expert_name = $this->edit['name'];
            $this->address = $this->edit['address'];
            $this->position = $this->edit['position'];
            $this->description = $this->edit['description'];
            $this->facebook = $this->edit['facebook'];
            $this->instagram = $this->edit['instagram'];
            $this->linkedin = $this->edit['linkedin'];
            $this->twitter = $this->edit['twitter'];
            $this->images = $this->edit['images'];
        }
    }

    public function updateExpert($slug){
        $expert = Expert::where('slug',$slug)->first();
        if($expert['images'] == $this->images){
            $this->rules['images'] = 'required';
        }else{
            $this->rules['images'] = 'required|image|mimes:png,jpg,jpeg,svg';
        }

        $this->validate($this->rules);

        $data = [
            'name' => $this->expert_name,
            'description' => $this->description,
            'address' => $this->address,
            'position' => $this->position,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'linkedin' => $this->linkedin,
            'twitter' => $this->twitter,
        ];
        if($expert['images'] == $this->images){
            $data['images'] = $this->images;
        }else{
            Storage::disk('public')->delete($expert['images']);
            $data['images'] = $this->images->store('expert', 'public');
        }

        Expert::where('slug',$slug)->update($data);
        Session::flash('success', 'Expert successfully updated!');
        redirect()->route('admin.expert');
    }

    public function render()
    {
        return view('livewire.pages.master.widget.expert-form')->extends('layouts.master.app')->section('content');
    }
}
