<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class StudyComponent extends Component
{
    public $question;
    public $user;
    public $answers;

    public $postContent;

    public $test;

    public function mount()
    {
        $this->test = "Test Textbox";
        $this->user = Auth::user();
        $this->question = $this->user->question;
        $this->answers = $this->question->getAnswersRandom;
        $this->postContent = 'Hãy chọn 1 đáp án!';
    }

    public function answerQuestion($id)
    {
        $answeredQuestion = Answer::find($id);

        if ($this->question->id != $answeredQuestion->question->id) {
            $this->postContent = 'Này bạn, Bạn định bố đời à :D, đã có lỗi xảy ra, hãy báo lại cho chúng tôi nhé :D';
            return;
        }

        $newQuestion = $this->user->classroom->questionsRandom->first();

        $this->user->question_id = $newQuestion->id;
        $this->user->save();

        $this->question = $this->user->question;
        $this->answers = $this->question->getAnswersRandom;

        $this->postContent = $answeredQuestion->post_content;
    }

    public function render()
    {
        return view('livewire.study-component');
    }
}
