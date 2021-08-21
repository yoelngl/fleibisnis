<?php

namespace App\Http\Livewire\Pages\Master\Users;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public function render()
    {
        $users = ModelsUser::where('verified',1)->where('role','users')->get();
        return view('livewire.pages.master.users.user',compact('users'))->extends('layouts.master.app')->section('content');
    }
}
