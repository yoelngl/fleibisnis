<?php

namespace App\Http\Livewire\Pages\Admin;

use Livewire\Component;

class Profile extends Component
{

    public $fullname;
    public $phone_number;
    public $email_bussiness;
    public $job_title;
    public $city;
    public $country;
    public $address;

    public function register(){
        dd('Profile');
    }


    public function render()
    {
        return view('livewire.pages.admin.profile')->extends('layouts.admin.app')->section('content');
    }
}
