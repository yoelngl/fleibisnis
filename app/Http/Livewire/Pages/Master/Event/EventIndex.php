<?php

namespace App\Http\Livewire\Pages\Master\Event;

use Livewire\Component;
use App\Models\EventCategory;
use App\Models\EventSchedule;
use App\Models\FranchiseWeek;
use Illuminate\Support\Facades\Storage;

class EventIndex extends Component
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

        EventCategory::create([
            'title' => $this->title,
        ]);
        session()->flash('success','Category added successfully!');
        $this->title = '';
        return redirect()->route('admin.event');
    }

    public function deleteCategory($slug){
        EventCategory::where('slug',$slug)->delete();
        session()->flash('success','Category deleted successfully');
        return redirect()->route('admin.event');
    }

    public function deleteFranchiseWeek($slug){
        $data = FranchiseWeek::where('slug',$slug)->first();
        Storage::disk('public')->delete($data['images']);
        $data->delete();
        session()->flash('success','Franchise Week deleted successfully');
        return redirect()->route('admin.event');
    }

    public function deleteEvent($slug){
        $data = EventSchedule::where('slug',$slug)->first();
        Storage::disk('public')->delete($data['images']);
        $data->delete();
        session()->flash('success','Event Schedule deleted successfully');
        return redirect()->route('admin.event');
    }

    public function render()
    {
        $categories = EventCategory::all();
        $franchise_weeks = FranchiseWeek::latest()->get();
        $event_schedules = EventSchedule::latest()->get();
        return view('livewire.pages.master.event.event-index',compact('categories','franchise_weeks','event_schedules'))->extends('layouts.master.app')->section('content');
    }
}
