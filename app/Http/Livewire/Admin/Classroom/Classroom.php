<?php

namespace App\Http\Livewire\Admin\Classroom;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class Classroom extends Component
{
    use WithPagination;

    public $classroom;

    public $newQuestionContent;

    protected $listeners = ['refreshClassroom' => '$refresh'];

    protected $rules = [
        'newQuestionContent' => 'required|string|max:255',
    ];

    public function mount()
    {
    }

    public function addQuestion()
    {
        $this->validate();
        $newQuestion = new Question;
        $newQuestion->classroom_id = $this->classroom->id;
        $newQuestion->content = $this->newQuestionContent;
        $newQuestion->save();

        $this->newQuestionContent = "";
    }

    public function render()
    {
        return view('livewire.admin.classroom.classroom', ['questions' => Question::where('classroom_id', '=', $this->classroom->id)->orderBy('id', 'DESC')->paginate(5)]);
    }
}
