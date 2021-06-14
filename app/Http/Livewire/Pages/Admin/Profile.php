<?php

namespace App\Http\Livewire\Pages\Admin;

use Livewire\Component;

class Profile extends Component
{

    public $fullname;
    public $why = [];
    public $phone_number;
    public $email_bussiness;
    public $job_title;
    public $city;
    public $country;
    public $address;

    public function mount(){
        $data = [];
        $this->why = [
            'Mencari peluang bisnis waralaba maupun peluang bisnis lainnya' => trans('message.looking-franchise'),
            'Mencari produk dan layanan untuk usah' => trans('message.looking-product'),
            'Mengetahui informasi terkini mengenai peluang bisnis waralaba' => trans('message.looking-information'),
            'Menambah jejaring' => trans('networking'),
            'Lain-lain' => trans('others'),
        ];

    }


    public function register(){
        dd('Profile');
    }


    public function render()
    {
        return view('livewire.pages.admin.profile')->extends('layouts.admin.app')->section('content');
    }
}
