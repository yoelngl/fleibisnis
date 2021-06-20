<?php

namespace App\Http\Livewire\Pages;

use App\Models\TodayNews;
use Livewire\Component;

class TodayNewsDetail extends Component
{
    public $today_news;
    public $more_news;

    public function mount($slug){
        $this->today_news = TodayNews::with('user')->where('slug',$slug)->first();
        $this->more_news = TodayNews::where('category_id',$this->today_news->category_id)->where('id','!=',$this->today_news->id)->get();
    }

    public function render()
    {
        return view('livewire.pages.today-news-detail')->extends('layouts.app')->section('content');
    }
}
