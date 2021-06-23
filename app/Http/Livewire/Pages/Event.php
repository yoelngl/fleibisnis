<?php

namespace App\Http\Livewire\Pages;

use App\Models\EventCategory;
use App\Models\EventSchedule;
use App\Models\FranchiseWeek;
use Livewire\Component;

class Event extends Component
{
    public $load_more = 6;
    public $load_mores = 3;

    public $search;
    public $category;

    public $listeners = ['load-more' => 'loadMore', 'load-mores' => 'loadMores'];

    public function loadMore(){
        $this->load_more = $this->load_more + 3;
    }

    public function loadMores(){
        $this->load_mores = $this->load_mores + 3;
    }



    public function render()
    {
        $searchTerm = '%' . $this->search . '%';

        $franchise_week = FranchiseWeek::latest()->where('title','like',$searchTerm)->paginate($this->load_more);
        $event_schedule = EventSchedule::latest()->where('title','like',$searchTerm)->paginate($this->load_mores);
        if($this->category != null){
            $franchise_week = FranchiseWeek::where('category_id',$this->category)->paginate($this->load_more);
            $event_schedule = EventSchedule::where('category_id',$this->category)->paginate($this->load_more);

        }
        $categories = EventCategory::all();
        return view('livewire.pages.event',compact('franchise_week','event_schedule','categories'))->extends('layouts.app')->section('content');
    }
}
