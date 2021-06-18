<?php

namespace App\Http\Livewire\Pages\Master\News;

use Livewire\Component;
use App\Models\NewsCategories;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\TodayNews;

class NewsForm extends Component
{
    use WithFileUploads;
    public $title;
    public $category;
    public $description;
    public $images;
    public $edit;

    protected $rules = [
        'title' => 'required',
        'category' => 'required',
        'description' => 'required',
        'images' => 'required|image|mimes:png,jpg,jpeg,svg',
    ];

    public function createNews(){
        $this->validate();

        $data = [
            'title' => $this->title,
            'category_id' => $this->category,
            'description' => $this->description,
            'user_id' => auth()->user()->id,
        ];

        $data['images'] = $this->images->store('news', 'public');

        TodayNews::create($data);
        session()->flash('success','News Successfully created!');
        return redirect()->route('admin.today_news');

    }

    public function render()
    {
        $categories = NewsCategories::all();
        return view('livewire.pages.master.news.news-form',compact('categories'))->extends('layouts.master.app')->section('content');
    }
}
