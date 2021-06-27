<?php

namespace App\Http\Livewire\Pages\Master\Widget\Footer;

use Livewire\Component;
use App\Models\Footer;

class FooterIndex extends Component
{

    public $website;
    public $phone;
    public $about;
    public $address;
    public $facebook;
    public $instagram;
    public $linkedin;
    public $twitter;
    public $youtube;
    public $email;
    public $copyright;
    public $edit;

    protected $rules = [
        'website' => 'required',
        'phone' => 'required|numeric',
        'about' => 'required',
        'address' => 'required',
        'email' => 'required|email',
        'copyright' => 'required',
    ];

    public function mount(){
        $footer = Footer::first();
        if(isset($footer)){
            $this->edit = Footer::first();
            $this->website = $this->edit['website'];
            $this->about = $this->edit['about'];
            $this->address = $this->edit['address'];
            $this->email = $this->edit['email'];
            $this->phone = $this->edit['phone'];
            $this->facebook = $this->edit['facebook'];
            $this->instagram = $this->edit['instagram'];
            $this->linkedin = $this->edit['linkedin'];
            $this->youtube = $this->edit['youtube'];
            $this->twitter = $this->edit['twitter'];
            $this->copyright = $this->edit['copyright'];
        }
    }

    public function createFooter(){
        $this->validate();

        $data = [
            'website' => $this->website,
            'phone' => $this->phone,
            'about' => $this->about,
            'address' => $this->address,
            'email' => $this->email,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'linkedin' => $this->linkedin,
            'twitter' => $this->twitter,
            'youtube' => $this->youtube,
            'copyright' => $this->copyright
        ];

        Footer::create($data);
        session()->flash('success','Footer successfully changed!');
        return redirect()->route('admin.footer');
    }

    public function updateFooter($id){
        $this->validate();

        $data = [
            'website' => $this->website,
            'phone' => $this->phone,
            'about' => $this->about,
            'address' => $this->address,
            'email' => $this->email,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'linkedin' => $this->linkedin,
            'twitter' => $this->twitter,
            'youtube' => $this->youtube,
            'copyright' => $this->copyright
        ];

        Footer::whereId($id)->update($data);
        session()->flash('success','Footer successfully changed!');
        return redirect()->route('admin.footer');
    }


    public function render()
    {
        return view('livewire.pages.master.widget.footer.footer-index')->extends('layouts.master.app')->section('content');
    }
}
