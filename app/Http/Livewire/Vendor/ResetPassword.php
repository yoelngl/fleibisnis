<?php

namespace App\Http\Livewire\Vendor;

use Livewire\Component;
use DB;
use App\Models\User;

class ResetPassword extends Component
{
    public $email;
    public $token;
    public $password;
    public $password_confirmation;

    public function mount(){
        $this->token = request()->token;
        $this->email = request()->email;
    }

    protected $rules = [
        'email' => 'required|email|exists:users,email',
        'password' => 'required|min:8|confirmed',
    ];

    public function resetPassword(){
        $this->validate();

        $tokenData = DB::table('password_resets')
                    ->where('token', $this->token)->first();
        if (!$tokenData){
            return redirect()->route('home');
        }

        $user = User::where('email', $tokenData->email)->first();
        if($user->email != $this->email){
            session()->flash('failed',trans('message.email_failed'));
            return redirect()->route('home');
        }

        $user->password = \Hash::make($this->password);
        $user->update(); //or $user->save();

        DB::table('password_resets')->where('email', $user->email)
        ->delete();

        session()->flash('success',trans('message.reset_success'));
        return redirect()->route('home');




    }

    public function render()
    {
        return view('livewire.vendor.reset-password')->extends('layouts.admin.app')->section('content');
    }
}
