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
    public $category_null = "";


    protected $rules = [
        'title' => 'required',
        'category' => 'required',
        'description' => 'required',
        'images' => 'required|image|mimes:png,jpg,jpeg,svg',
    ];

    public function mount($slug = null){
        if($slug){
            $this->edit = TodayNews::where('slug',$slug)->first();
            $this->title = $this->edit['title'];
            $this->category = $this->edit['category_id'];
            $this->description = $this->edit['description'];
            $this->images = $this->edit['images'];
        }
    }

    public function updateNews($slug){
        sleep(1);
        $today_news = TodayNews::where('slug',$slug)->first();
        if($today_news['images'] == $this->images){
            $this->rules['images'] = 'required';
        }else{
            $this->rules['images'] = 'required|image|mimes:png,jpg,jpeg,svg';
        }

        $this->validate($this->rules);

        $data = [
            'user_id'       => auth()->user()->id,
            'category_id'   => $this->category,
            'title'         => $this->title,
            'description'   => $this->description,
        ];
        if($today_news['images'] == $this->images){
            $data['images'] = $this->images;
        }else{
            Storage::disk('public')->delete($today_news['images']);
            $data['images'] = $this->images->store('news', 'public');
        }

        TodayNews::where('slug',$slug)->update($data);
        Session::flash('success', 'News successfully updated!');
        redirect()->route('admin.today_news');
    }

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
