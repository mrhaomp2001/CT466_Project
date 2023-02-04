<?php

namespace App\Http\Livewire\Admin\Classroom;

use Livewire\Component;

class Answer extends Component
{
    public $answer;

    protected $rules = [
        'answer.content' => 'required|string|max:255',
        'answer.post_content' => 'required|string|max:255',
        'answer.exp' => 'required|numeric|min:0|max:100',
        'answer.money' => 'required|numeric|min:0|max:100',
        'answer.correct' => 'numeric|min:0|max:1',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function setCorrect($value)
    {
        $this->answer->correct = $value;
        $this->answer->save();
    }

    public function updateAnswer()
    {
        $this->validate();
        $this->answer->save();
        $this->emit('refreshQuestion');
    }

    public function deleteAnswer()
    {
        $this->answer->delete();
        $this->emit('refreshQuestion');
    }

    public function render()
    {
        return view('livewire.admin.classroom.answer');
    }
}
