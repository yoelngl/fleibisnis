<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use DB;
use Carbon\Carbon;
use Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;

class Forgot extends Component
{
    public $email;

    private function sendResetEmail($email, $token)
    {
    //Retrieve the user from the database
    $user = DB::table('users')->where('email', $email)->select('username', 'email')->first();
    //Generate, the password reset link. The token generated is embedded in the link


    $send = Mail::to($user->email)->send(new ResetPassword($user,$token));

    }

    public function forgot(){
        $user = User::where('email',$this->email)->count();
        if($user < 1){
            session()->flash('failed',trans('message.user_exist'));
            return redirect()->route('home');
        }

        DB::table('password_resets')->insert([
            'email' => $this->email,
            'token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $tokenData = DB::table('password_resets')
                     ->where('email', $this->email)->first();

         if ($tokenData) {
             $this->sendResetEmail($this->email, $tokenData->token);
             session()->flash('success',trans('message.reset_link'));
             return redirect()->route('home');
         }

    }



    public function render()
    {
        return view('livewire.auth.forgot');
    }
}
