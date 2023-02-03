<?php

namespace App\Http\Livewire\Admin\Classroom;

use Livewire\Component;

class Answer extends Component
{
    public $answer;
    
    public function render()
    {
        return view('livewire.admin.classroom.answer');
    }
}
