<?php

namespace App\Http\Livewire\Pages\Master\Expert;

use App\Models\Expert;
use Livewire\Component;
use App\Models\AskExpert;
use Illuminate\Support\Facades\Session;

class ExpertForm extends Component
{
    public $answer;
    public $experts;
    public $question;
    public $title;
    public $edit;

    protected $rules = [
        'experts' => 'required',
        'title' => 'required',
        'answer' => 'required',
        'question' => 'required',
    ];

    public function mount($slug = null){
        if($slug){
            $this->edit = AskExpert::where('slug',$slug)->first();
            $this->title = $this->edit['title'];
            $this->experts = $this->edit['expert_id'];
            $this->question = $this->edit['question'];
            $this->answer = $this->edit['answer'];
        }
    }

    public function updateAsk($slug){
        $this->validate();

        $data = [
            'title' => $this->title,
            'expert_id' => $this->experts,
            'answer' => $this->answer,
            'question' => $this->question,
        ];

        AskExpert::where('slug',$slug)->update($data);
        Session::flash('success', 'Ask Expert successfully updated!');
        redirect()->route('admin.ask_expert');
    }

    public function createAsk(){
        $this->validate();

        $data = [
            'title' => $this->title,
            'expert_id' => $this->experts,
            'answer' => $this->answer,
            'question' => $this->question,
        ];

        AskExpert::create($data);
        session()->flash('success','Ask Expert succesfully created!');
        return redirect()->route('admin.ask_expert');
    }

    public function render()
    {
        $expert = Expert::all();
        return view('livewire.pages.master.expert.expert-form',compact('expert'))->extends('layouts.master.app')->section('content');
    }
}
