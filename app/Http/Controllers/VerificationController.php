<?php

namespace App\Http\Controllers;

use App\Models\VerifyUser;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
            $verifyUser->user->verified = 1;
            $verifyUser->user->save();
            session()->flash('success',trans('message.verified-success'));
            return redirect()->route('home');
        } else {
            session()->flash('info',trans('message.already-verified'));
            return redirect()->route('home');
        }
        } else {
            return redirect()->route('home')->with('warning', trans('message.email-not-identified'));
        }
        return redirect()->route('home');
    }
}
