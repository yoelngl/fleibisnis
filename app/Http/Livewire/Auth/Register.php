<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use App\Mail\VerifyMail;
use App\Models\VerifyUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Register extends Component
{

    public $username;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'username' => 'required|max:40',
        'email' => 'required|unique:users|email',
        'password' => 'required|min:8',
        'password_confirmation' => 'required|min:8|same:password',
    ];

    public function register(){
        $this->validate();

        $user = User::create([
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'users',
        ]);
        $user->assignRole('users');
        $user->givePermissionTo('not-valid');
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time()),
        ]);
        $send = Mail::to($user->email)->send(new VerifyMail($user));
        if(!$send){
            User::whereId($user->id)->delete();
        }
        session()->flash('success',trans('message.register-success'));
        Auth::logout();
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
