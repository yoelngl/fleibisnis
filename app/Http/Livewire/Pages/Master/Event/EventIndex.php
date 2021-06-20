<?php

namespace App\Http\Livewire\Pages\Master\Event;

use Livewire\Component;

class EventIndex extends Component
{
    public function render()
    {
        return view('livewire.pages.master.event.event-index')->extends('layouts.master.app')->section('content');
    }
}
