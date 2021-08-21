<?php

namespace App\Http\Livewire\Pages\Master\Users;

use App\Models\Subscribe as ModelsSubscribe;
use Livewire\Component;

class Subscribe extends Component
{
    public function render()
    {
        $users = ModelsSubscribe::all();
        return view('livewire.pages.master.users.subscribe',compact('users'))->extends('layouts.master.app')->section('content');
    }
}
