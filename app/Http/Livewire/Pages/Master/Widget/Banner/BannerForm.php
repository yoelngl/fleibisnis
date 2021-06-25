<?php

namespace App\Http\Livewire\Pages\Master\Widget\Banner;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class BannerForm extends Component
{
    use WithFileUploads;

    public $category;
    public $images;
    public $link;
    public $edit;

    protected $rules = [
        'category' => 'required',
        'images' => 'required|image|mimes:png,svg,jpg,jpeg'
    ];

    public function mount($id = null){
        if($id){
            $this->edit = Banner::where('id',$id)->first();
            $this->images = $this->edit['image'];
            $this->link = $this->edit['link'];
            $this->category = "'" . $this->edit['category'] . "'";
        }
    }

    public function createBanner(){
        $this->validate();

        $data = [
            'link' => $this->link,
            'category' => $this->category
        ];

        $data['image'] = $this->images->store('banner', 'public');
        Banner::create($data);
        session()->flash('success','Banner Succesfully created!');
        return redirect()->route('admin.banner');
    }

    public function updateBanner($id){
        $banner = Banner::find($id);
        if($banner['image'] == $this->images){
            $this->rules['images'] = 'required';
        }else{
            $this->rules['images'] = 'required|image|mimes:png,svg,jpg,jpeg';
        }
        $this->validate($this->rules);

        $data = [
            'link' => $this->link,
            'category' => $this->category
        ];
        if($banner['image'] == $this->images){
            $data['image'] = $this->images;
        }else{
            Storage::disk('public')->delete($banner['image']);
            $data['image'] = $this->images->store('banner', 'public');
        }

        Banner::find($id)->update($data);
        session()->flash('success', 'Banner successfully updated!');
        redirect()->route('admin.banner');
    }

    public function render()
    {
        $categories = Banner::getPossibleEnumValues('category');

        return view('livewire.pages.master.widget.banner.banner-form',compact('categories'))->extends('layouts.master.app')->section('content');
    }
}
