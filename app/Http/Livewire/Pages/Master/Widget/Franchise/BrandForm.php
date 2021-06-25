<?php

namespace App\Http\Livewire\Pages\Master\Widget\Franchise;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class BrandForm extends Component
{

    use WithFileUploads;

    public $images;
    public $link;
    public $edit;

    protected $rules = [
        'link' => 'required',
        'images' => 'required|image|mimes:png,svg,jpg,jpeg'
    ];

    public function mount($id = null){
        if($id){
            $this->edit = Brand::where('id',$id)->first();
            $this->images = $this->edit['images'];
            $this->link = $this->edit['link'];
        }
    }

    public function createBrand(){
        $this->validate();

        $data = [
            'link' => $this->link,
        ];

        $data['images'] = $this->images->store('brand', 'public');
        Brand::create($data);
        session()->flash('success','Brand Succesfully created!');
        return redirect()->route('admin.brand');
    }

    public function updateBrand($id){
        $brand = Brand::find($id);
        if($brand['images'] == $this->images){
            $this->rules['images'] = 'required';
        }else{
            $this->rules['images'] = 'required|image|mimes:png,svg,jpg,jpeg';
        }
        $this->validate($this->rules);

        $data = [
            'link' => $this->link,
        ];

        if($brand['images'] == $this->images){
            $data['images'] = $this->images;
        }else{
            Storage::disk('public')->delete($brand['images']);
            $data['images'] = $this->images->store('brand', 'public');
        }

        Brand::find($id)->update($data);
        session()->flash('success', 'Brand successfully updated!');
        redirect()->route('admin.brand');
    }

    public function render()
    {
        return view('livewire.pages.master.widget.franchise.brand-form')->extends('layouts.master.app')->section('content');
    }
}
