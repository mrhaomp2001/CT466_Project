<?php

namespace App\Http\Livewire\Admin\Classroom;

use Livewire\Component;

class Question extends Component
{
    public $question;
    public $isShow;
    public $isDeleted;
    public $newAnswer;

    protected $rules = [
        'question.content' => 'required|string|max:255',
    ];

    protected $listeners = ['refreshQuestion' => '$refresh'];

    public function mount()
    {
        $this->isShow = false;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updateQuestion()
    {
        $this->validate();
        $this->question->save();
        $this->emit('refreshClassroom');
    }

    public function deleteQuestion()
    {
        $this->question->answers->each->delete();
        $this->question->delete();
        $this->isDeleted = true;
        $this->emit('refreshClassroom');
    }

    public function addAnswer()
    {
        
    }

    public function render()
    {
        return view('livewire.admin.classroom.question');
    }
}
