<?php

namespace App\Http\Livewire\Pages\Admin;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithFileUploads;
use Auth;
use Storage;

class Profile extends Component
{

    use WithFileUploads;

    public $fullname;
    public $phone_number;
    public $email_bussiness;
    public $job_title;
    public $city;
    public $country;
    public $address;
    public $images = '';

    public $edit;

    protected $rules = [
        'fullname' => 'required',
        'phone_number' => 'required|numeric',
        'email_bussiness' => 'required',
        'city' => 'required',
        'job_title' => 'required',
        'country' => 'required',
        'address' => 'required',
    ];

    public function mount(){
        $edit = Customer::where('user_id',Auth::user()->id)->first();
        if($edit){
            $this->edit = Customer::where('user_id',Auth::user()->id)->first();
            $this->fullname = $this->edit['fullname'];
            $this->phone_number = $this->edit['phone'];
            $this->email_bussiness = $this->edit['bussiness_email'];
            $this->city = $this->edit['city'];
            $this->address = $this->edit['address'];
            $this->country = $this->edit['country'];
            $this->job_title = $this->edit['job_title'];
        }
        // $this->why = [
        //     'Mencari peluang bisnis waralaba maupun peluang bisnis lainnya' => trans('message.looking-franchise'),
        //     'Mencari produk dan layanan untuk usah' => trans('message.looking-product'),
        //     'Mengetahui informasi terkini mengenai peluang bisnis waralaba' => trans('message.looking-information'),
        //     'Menambah jejaring' => trans('networking'),
        //     'Lain-lain' => trans('others'),
        // ];

    }

    public function update($id){
        sleep(2);
        $this->validate();
        $profile = Customer::where('user_id',$id)->first();

        $data = [
            'fullname' => $this->fullname,
            'phone' => $this->phone_number,
            'bussiness_email' => $this->email_bussiness,
            'city' => $this->city,
            'job_title' => $this->job_title,
            'country' => $this->country,
            'address' => $this->address,
            'user_id' => Auth::user()->id
        ];
        if($profile['images'] == $this->images){
          $data['images'] = $this->images;
        }else{
          Storage::disk('public')->delete($this->images);
          $data['images'] = $this->images->store('profile', 'public');
        }
        Customer::where('user_id',$id)->first()->update($data);
        session()->flash('success','Your Profile Successfully Updated');
        return redirect()->route('home');

    }

    public function register(){
        sleep(3);
        $this->validate();

        $data = [
            'fullname' => $this->fullname,
            'phone' => $this->phone_number,
            'bussiness_email' => $this->email_bussiness,
            'city' => $this->city,
            'job_title' => $this->job_title,
            'country' => $this->country,
            'address' => $this->address,
            'user_id' => Auth::user()->id
        ];

        if($this->images){
        $data['images'] = $this->images->store('profile', 'public');
        }
        Customer::create($data);

        session()->flash('success','Your Profile Successfully Updated');
        return redirect()->route('home');



    }


    public function render()
    {
        return view('livewire.pages.admin.profile')->extends('layouts.admin.app')->section('content');
    }
}
