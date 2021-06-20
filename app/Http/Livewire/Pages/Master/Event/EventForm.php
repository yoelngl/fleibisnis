<?php

namespace App\Http\Livewire\Pages\Master\Event;

use Livewire\Component;

class EventForm extends Component
{
    public function render()
    {
        return view('livewire.pages.master.event.event-form')->extends('layouts.master.app')->section('content');
    }
}
