<?php

namespace App\Http\Livewire\Admin\Classroom;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Question extends Component
{
    public $question;
    public $inputQuestion;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function mount()
    {

        $this->inputQuestion = $this->question->content;
    }

    public function updateQuestion()
    {
        $validatedData = Validator::make(
            ['Content' => $this->inputQuestion],
            ['Content' => 'required|max:255'],
            [
                'required' => ':attribute cần phải được nhập',
                'max' => 'Tối đa là 255 ký tự',
            ]
        )->validate();

        // dd($validatedData);
        // $this->question->content = $this->inputQuestion;
        // $this->question->save();
    }

    public function render()
    {
        return view('livewire.admin.classroom.question');
    }
}
