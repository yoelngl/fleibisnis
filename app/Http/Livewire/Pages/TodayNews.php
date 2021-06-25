<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\NewsCategories;
use Illuminate\Support\Facades\DB;
use App\Models\Banner;
use App\Models\TodayNews as ModelsTodayNews;

class TodayNews extends Component
{
    public $load_more = 4;
    public $search;
    public $category_id = null;

    public $listeners = ['load-more' => 'loadMore'];

    public function loadMore(){
        $this->load_more = $this->load_more + 4;
    }

    public function category($id = null){
        if($id){
            $this->category_id = $id;
        }
    }

    public function render()
    {
        $banner = Banner::where('category','=','Today News')->first();
        $searchTerm = '%' . $this->search . '%';

        $today_news = DB::table('today_news')->join('users','today_news.user_id','=','users.id')->select('today_news.*','users.username')->latest('today_news.created_at')->first();

        $more_news = ModelsTodayNews::with('category')->where('id','!=',$today_news->id)->where('title','like',$searchTerm)->paginate($this->load_more);
        if(isset($this->category_id)){
            $more_news = ModelsTodayNews::with('category')->where('id','!=',$today_news->id)->where('title','like',$searchTerm)->where('category_id',$this->category_id)->paginate($this->load_more);
        }
        $categories = NewsCategories::all();
        return view('livewire.pages.today-news',compact('categories','today_news','more_news','banner'))->extends('layouts.app')->section('content');
    }
}
