<?php

namespace App\Http\Livewire\Pages\Master\Event;

use Livewire\Component;
use App\Models\EventCategory;
use App\Models\EventSchedule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class EventForm extends Component
{
    use WithFileUploads;
    public $title;
    public $category;
    public $activities;
    public $images;
    public $date;
    public $url;
    public $edit;
    public $location;

    protected $rules = [
        'title' => 'required',
        'category' => 'required',
        'activities' => 'required',
        // 'images' => 'required|image|mimes:png,jpg,jpeg,svg',
        'url' => 'required',
        'date' => 'required',
        'location' => 'required',
    ];

    public function createEvent(){
        $this->validate();

        $data = [
            'category_id'       => $this->category,
            'title'             => $this->title,
            'activities'        => $this->activities,
            'date'              => $this->date,
            'link'              => $this->url,
            'location'          => $this->location,
        ];
        if($this->images){
            $data['images'] = $this->images->store('event_schedule', 'public');
        }

        EventSchedule::create($data);
        Session::flash('success', 'Event Schedule successfully created!');
        redirect()->route('admin.event');
    }

    public function mount($slug = null){
        if($slug){
            $this->edit = EventSchedule::where('slug',$slug)->first();
            $this->title = $this->edit['title'];
            $this->category = $this->edit['category_id'];
            $this->activities = $this->edit['activities'];
            $this->url = $this->edit['link'];
            $this->date = $this->edit['date'];
            $this->location = $this->edit['location'];
            $this->images = $this->edit['images'];
        }
    }

    public function updateEvent($slug){
        $event_schedule = EventSchedule::where('slug',$slug)->first();

        $this->validate($this->rules);

        $data = [
            'category_id'       => $this->category,
            'title'             => $this->title,
            'activities'        => $this->activities,
            'date'              => $this->date,
            'link'              => $this->url,
            'location'          => $this->location,
        ];
        if($event_schedule['images'] == $this->images){
            $data['images'] = $this->images;
        }else{
            Storage::disk('public')->delete($event_schedule['images']);
            $data['images'] = $this->images->store('event_schedule', 'public');
        }

        EventSchedule::where('slug',$slug)->update($data);
        Session::flash('success', 'Event Schedule successfully updated!');
        redirect()->route('admin.event');
    }



    public function render()
    {
        $categories = EventCategory::all();
        return view('livewire.pages.master.event.event-form',compact('categories'))->extends('layouts.master.app')->section('content');
    }
}
