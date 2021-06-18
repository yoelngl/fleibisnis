<?php

namespace App\Http\Livewire\Pages\Master\Retail;

use App\Models\Categories;
use Livewire\Component;
use App\Models\RetailDirectory;
use Illuminate\Support\Facades\Storage;


class RetailIndex extends Component
{
    public $title;
    public $load_more = 6;
    public $search;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    protected $rules = [
        'title' => 'required|max:40',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function loadMore(){
        $this->load_more = $this->load_more + 3;
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

    public function deleteRetail($slug){
      $retail = RetailDirectory::where('slug',$slug)->first();

      Storage::disk('public')->delete($retail['product_images']);
      Storage::disk('public')->delete($retail['brand_brochure']);

      $retail->delete();

      session()->flash('success','Retail deleted successfully');
      return redirect()->route('admin.retail');
    }


    public function render()
    {
        $searchTerm = '%' . $this->search . '%';

        $retail = RetailDirectory::with('category','user')->where('product_name','like',$searchTerm)->latest()->paginate($this->load_more);
        $categories = Categories::all();
        return view('livewire.pages.master.retail.retail-index',compact('retail','categories'))->extends('layouts.master.app')->section('content');
    }
}
