<?php

namespace App\Http\Livewire\Pages\Master\Widget\Footer;

use Livewire\Component;

class FooterForm extends Component
{
    public function render()
    {
        return view('livewire.pages.master.widget.footer.footer-form')->extends('layouts.master.app')->section('content');
    }
}
