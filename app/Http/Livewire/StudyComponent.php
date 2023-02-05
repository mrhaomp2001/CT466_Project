<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class StudyComponent extends Component
{
    public $user;

    public $postContent;

    protected $listeners = ['refreshStudyComponent' => '$refresh'];

    public function mount()
    {
        $this->user = Auth::user();
        // $this->question = $this->user->question;
        // $this->answers = $this->question->getAnswersRandom;
        $this->postContent = 'Hãy chọn 1 đáp án!';
    }

    public function answerQuestion($id)
    {
        $answeredQuestion = Answer::find($id);

        if ($this->user->question->id != $answeredQuestion->question->id) {
            $this->postContent = 'Này bạn, Bạn định bố đời à :D, đã có lỗi xảy ra, hãy báo lại cho chúng tôi nhé :D';
            return;
        }

        $newQuestion = $this->user->classroom->questionsRandom->first();

        $this->user->question_id = $newQuestion->id;
        $this->user->save();

        $this->postContent = $answeredQuestion->post_content;

        $this->emit('refreshStudyComponent');
        $this->dispatchBrowserEvent('answerQuestion-studyConponent-event', ['message' => 'Nội dung từ Event']);
    }

    public function render()
    {
        return view('livewire.study-component');
    }
}
