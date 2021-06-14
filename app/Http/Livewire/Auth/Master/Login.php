<?php

namespace App\Http\Livewire\Auth\Master;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function authorize(){
        if(Auth::check()){
            return redirect()->route('admin.dashboard');
        }
    }

    public function login(){
        $this->validate();

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            session()->flash('success','You have Successfully Logged in!');
            return redirect()->route('admin.dashboard');
        }else{
            session()->flash('error','Email or password wrong!');
            return redirect()->route('admin.login');
        }

    }

    public function render()
    {
        $this->authorize();
        return view('livewire.auth.master.login')->extends('layouts.master.app')->section('content');
    }
}
