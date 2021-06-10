<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function logout(){
        if(Auth::check()){
            Auth::logout();
            session()->flash('success',trans('message.logout-success'));
            return redirect()->route('home');
        }
    }
}
