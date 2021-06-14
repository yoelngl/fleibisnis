<?php

namespace App\Http\Livewire\Pages\Master\Retail;

use App\Models\Categories;
use Livewire\Component;

class RetailIndex extends Component
{
    public $title;

    protected $rules = [
        'title' => 'required|max:40',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function categoriesAdd(){
        $this->validate();

        Categories::create([
            'title' => $this->title,
        ]);
        session()->flash('success','Category added successfully!');
        $this->title = '';
        return redirect()->route('admin.retail');
    }

    public function deleteCategory($slug){
        Categories::where('slug',$slug)->delete();
        session()->flash('success','Category deleted successfully');
        return redirect()->route('admin.retail');
    }


    public function render()
    {
        $categories = Categories::all();
        return view('livewire.pages.master.retail.retail-index',compact('categories'))->extends('layouts.master.app')->section('content');
    }
}
