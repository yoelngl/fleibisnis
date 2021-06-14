<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8',
    ];

    public function login(){
        $this->validate();

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            if(Auth::user()->verified == "0"){
                session()->flash('warning',trans('message.not-verified'));
                Auth::logout();
                return redirect()->route('home');
            }else{
                session()->flash('success',trans('message.login-success'));
                return redirect()->route('admin.profile');
            }
        }else{
            session()->flash('failed',trans('message.auth-failure'));
            return redirect()->route('home');
        }

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
