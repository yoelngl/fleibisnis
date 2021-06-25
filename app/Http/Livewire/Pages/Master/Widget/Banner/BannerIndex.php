<?php

namespace App\Http\Livewire\Pages\Master\Widget\Banner;

use Livewire\Component;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerIndex extends Component
{

    public function deleteBanner($id){
        $data = Banner::find($id);
        Storage::disk('public')->delete($data['image']);
        $data->delete();
        session()->flash('success','Banner deleted successfully');
        return redirect()->route('admin.banner');
    }

    public function render()
    {
        $banners = Banner::all();
        return view('livewire.pages.master.widget.banner.banner-index',compact('banners'))->extends('layouts.master.app')->section('content');
    }
}
