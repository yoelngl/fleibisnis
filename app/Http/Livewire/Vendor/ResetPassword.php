<?php

namespace App\Http\Livewire\Vendor;

use Livewire\Component;

class ResetPassword extends Component
{
    public $email;

    public function mount(){
        $this->email = request()->email;
    }

    public function render()
    {
        return view('livewire.vendor.reset-password')->extends('layouts.admin.app')->section('content');
    }
}
