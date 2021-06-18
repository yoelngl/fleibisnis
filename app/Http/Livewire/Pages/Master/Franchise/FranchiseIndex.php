<?php

namespace App\Http\Livewire\Pages\Master\Franchise;

use Livewire\Component;
use App\Models\Categories;
use App\Models\FranchiseDirectory;
use Illuminate\Support\Facades\Storage;

class FranchiseIndex extends Component
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
        return redirect()->route('admin.franchise');
    }

    public function deleteCategory($slug){
        Categories::where('slug',$slug)->delete();
        session()->flash('success','Category deleted successfully');
        return redirect()->route('admin.franchise');
    }

    public function deleteFranchise($slug){
      $franchise = FranchiseDirectory::where('slug',$slug)->first();

      Storage::disk('public')->delete($franchise['brand_image']);
      Storage::disk('public')->delete($franchise['brand_logo']);
      Storage::disk('public')->delete($franchise['brand_brochure']);

      $franchise->delete();

      session()->flash('success','Franchise deleted successfully');
      return redirect()->route('admin.franchise');
    }

    public function render()
    {
        $searchTerm = '%' . $this->search . '%';
        $franchise = FranchiseDirectory::with('category','user')->where('brand_name','like',$searchTerm)->latest()->paginate($this->load_more);
        $categories = Categories::all();
        return view('livewire.pages.master.franchise.franchise-index',compact('franchise','categories'))->extends('layouts.master.app')->section('content');
    }
}
