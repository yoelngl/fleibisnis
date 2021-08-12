<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Banner;
use App\Models\Footer;
use Auth;
use App\Models\Customer;
use Mail;

class Contact extends Component
{
    public $name;
    public $email;
    public $subject;
    public $comments;

    public function mount(){
        if(Auth::check()){
            $user = Customer::where('user_id',Auth::user()->id)->with('user')->first();
            if($user){
                $this->name = $user->fullname;
                $this->email = $user->user->email;
            }
        }

    }

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'comments' => 'required',
    ];

    public function contact(){
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'comments' => $this->comments
        ];
        $email = Footer::first();
        $to_name = 'Fleibisnis';
        $to_email = $email->email;
        $data = array("name" => $this->name,"email" => $this->email,"subject" => $this->subject, "body" => $this->comments);
        Mail::send('vendor.contact.email', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject($this->subject);
            $message->from($this->email,$this->name);
        });

        session()->flash('success',trans('message.email_deliver'));
        return redirect()->route('contact');
    }

    public function render()
    {
        $banner = Banner::where('category','=','Contact')->first();
        $footer = Footer::first();
        return view('livewire.pages.contact',compact('banner','footer'))->extends('layouts.app')->section('content');
    }
}
