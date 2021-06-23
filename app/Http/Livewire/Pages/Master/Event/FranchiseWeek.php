<?php

namespace App\Http\Livewire\Pages\Master\Event;

use Livewire\Component;
use App\Models\EventCategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\FranchiseWeek as ModelsFranchiseWeek;

class FranchiseWeek extends Component
{

    use WithFileUploads;
    public $title;
    public $category;
    public $description;
    public $images;
    public $url;
    public $edit;

    protected $rules = [
        'title' => 'required',
        'category' => 'required',
        'description' => 'required',
        'images' => 'required|image|mimes:png,jpg,jpeg,svg',
        'url' => 'required',
    ];

    public function mount($slug = null){
        if($slug){
            $this->edit = ModelsFranchiseWeek::where('slug',$slug)->first();
            $this->title = $this->edit['title'];
            $this->category = $this->edit['category_id'];
            $this->description = $this->edit['description'];
            $this->url = $this->edit['url'];
            $this->images = $this->edit['images'];
        }
    }

    public function updateFranchise($slug){
        $franchise_week = ModelsFranchiseWeek::where('slug',$slug)->first();
        if($franchise_week['images'] == $this->images){
            $this->rules['images'] = 'required';
        }else{
            $this->rules['images'] = 'required|image|mimes:png,jpg,jpeg,svg';
        }

        $this->validate($this->rules);

        $data = [
            'category_id'       => $this->category,
            'title'         => $this->title,
            'description'   => $this->description,
            'url'           => $this->url,
        ];
        if($franchise_week['images'] == $this->images){
            $data['images'] = $this->images;
        }else{
            Storage::disk('public')->delete($franchise_week['images']);
            $data['images'] = $this->images->store('franchise_week', 'public');
        }

        ModelsFranchiseWeek::where('slug',$slug)->update($data);
        Session::flash('success', 'Franchise Week successfully updated!');
        redirect()->route('admin.event');
    }

    public function createFranchise(){
        $this->validate();

        $data = [
            'category_id'       => $this->category,
            'title'         => $this->title,
            'description'   => $this->description,
            'url'           => $this->url,
        ];
        $data['images'] = $this->images->store('franchise_week', 'public');

        ModelsFranchiseWeek::create($data);
        Session::flash('success', 'Franchise Week successfully created!');
        redirect()->route('admin.event');
    }

    public function render()
    {
        $categories = EventCategory::all();
        return view('livewire.pages.master.event.franchise-week',compact('categories'))->extends('layouts.master.app')->section('content');
    }
}
