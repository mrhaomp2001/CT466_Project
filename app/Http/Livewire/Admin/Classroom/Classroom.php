<?php

namespace App\Http\Livewire\Admin\Classroom;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class Classroom extends Component
{
    use WithPagination;

    public $classroom;

    protected $listeners = ['refreshClassroom' => '$refresh'];

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.admin.classroom.classroom', ['questions' => Question::where('classroom_id', '=', $this->classroom->id)->orderBy('id', 'DESC')->paginate(5)]);
    }
}
