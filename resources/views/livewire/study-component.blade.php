<div>

    <br>
    <div class="text-light" id="postContent">
        {{ $postContent }}
    </div>


    <hr class="text-light">
    <br>
    <h1 class="text-light text-center">
        {{ $this->user->question->content }}
    </h1>
    <br>
    <hr class="text-light">

    @foreach ($this->user->question->getAnswersRandom as $answer)
        <br>
        <div>
            <button class="btn btn-cyborg col-12 text-break" wire:click="answerQuestion({{ $answer->id }})">
                {{ $answer->content }}
            </button>
        </div>
    @endforeach
</div>
