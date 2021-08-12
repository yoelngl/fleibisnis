<?php

namespace App\Http\Livewire\Vendor;

use Livewire\Component;
use App\Models\Footer;
use Mail;
use App\Models\Subscribe as SubscribeModels;

class Subscribe extends Component
{

    public $email;

    protected $rules = [
        'email' => 'required|unique:subscribes,email'
    ];

    public function subscribe(){
        $this->validate();

        $data = [
            'email' => $this->email,
        ];

        $email = Footer::first();
        $to_name = 'Fleibisnis';
        $to_email = $email->email;
        Mail::send('vendor.subscribe.email', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('New Subscribe');
            $message->from($this->email);
        });

        SubscribeModels::create($data);

        session()->flash('success', trans('message.subscribed'));
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.vendor.subscribe');
    }
}
