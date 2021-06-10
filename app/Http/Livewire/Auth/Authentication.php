<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use App\Mail\VerifyMail;
use App\Models\VerifyUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Authentication extends Component
{
    public function render()
    {
        return view('livewire.auth.authentication');
    }
}
