<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use App\Mail\VerifyMail;
use App\Models\VerifyUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
                $verifyUser = VerifyUser::create([
                    'user_id' => Auth::user()->id,
                    'token' => sha1(time()),
                ]);
                $send = Mail::to(Auth::user()->email)->send(new VerifyMail(Auth::user()));
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
