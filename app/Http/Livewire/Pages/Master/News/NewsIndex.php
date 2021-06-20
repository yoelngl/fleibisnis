<?php

namespace App\Http\Livewire\Pages\Master\News;

use Livewire\Component;
use App\Models\TodayNews;
use App\Models\NewsCategories;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Session\Session;

class NewsIndex extends Component
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

        NewsCategories::create([
            'title' => $this->title,
        ]);
        session()->flash('success','Category added successfully!');
        $this->title = '';
        return redirect()->route('admin.today_news');
    }

    public function deleteCategory($slug){
        NewsCategories::where('slug',$slug)->delete();
        session()->flash('success','Category deleted successfully');
        return redirect()->route('admin.today_news');
    }

    public function deleteNews($slug){
        $data = TodayNews::where('slug',$slug)->first();
        Storage::disk('public')->delete($data['images']);
        $data->delete();
        session()->flash('success','News deleted successfully');
        return redirect()->route('admin.today_news');
    }

    public function render()
    {
        $searchTerm = '%' . $this->search . '%';
        $news = TodayNews::with('category','user')->where('title','like',$searchTerm)->latest()->paginate($this->load_more);
        $categories = NewsCategories::all();
        return view('livewire.pages.master.news.news-index',compact('categories','news'))->extends('layouts.master.app')->section('content');
    }
}
