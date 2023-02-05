<?php

namespace App\Http\Livewire\Admin\Classroom;

use Illuminate\Support\Facades\Validator;

use App\Models\Answer;
use Livewire\Component;

class Question extends Component
{
    public $question;
    public $isShow;
    public $isDeleted;
    public $newAnswerContent;

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
        Validator::make(
            ['newAnswerContent' => $this->newAnswerContent],
            ['newAnswerContent' => 'required|max:255'],
            [
                'required' => 'The :attribute field is required',
                'max' => 'Độ dài tối đa của câu trả lời là 255 ký tự',
            ],
        )->validate();

        $newAnswer = new Answer;
        $newAnswer->question_id = $this->question->id;
        $newAnswer->content = $this->newAnswerContent;
        $newAnswer->post_content = 'Đây là câu trả lời sai.';
        $newAnswer->correct = 0;
        $newAnswer->exp = 0;
        $newAnswer->money = 0;

        $newAnswer->save();
        
        $this->newAnswerContent = "";
        $this->emit('refreshQuestion');
    }

    public function render()
    {
        return view('livewire.admin.classroom.question');
    }
}
