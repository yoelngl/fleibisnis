<?php

namespace App\Http\Livewire\Pages;

use App\Models\TodayNews;
use Livewire\Component;
use App\Models\Banner;
use App\Models\NewsViews;

class TodayNewsDetail extends Component
{
    public $today_news;
    public $more_news;
    public $views;

    public function mount($slug){
        $this->today_news = TodayNews::with('user')->where('slug',$slug)->first();
        $this->more_news = TodayNews::where('category_id',$this->today_news->category_id)->where('id','!=',$this->today_news->id)->get();
        if(!NewsViews::where('session_id',\Request::getSession()->getId())->where('id_post',$this->today_news->id)->exists()){
            NewsViews::createViewLog($this->today_news);
        }

        $this->views = NewsViews::where('id_post',$this->today_news->id)->count();
    }

    public function render()
    {
        $banner = Banner::where('category','=','Today News')->first();
        return view('livewire.pages.today-news-detail',compact('banner'))->extends('layouts.app')->section('content');
    }
}
