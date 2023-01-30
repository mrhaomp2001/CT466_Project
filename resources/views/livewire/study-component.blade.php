<div>

    <br>
    <div wire:model="postContent" class="text-light">
        {{ $postContent }}
    </div>

    <hr class="text-light">
    <br>
    <h1 class="text-light text-center">
        {{ $question->content }}
    </h1>
    <br>
    <hr class="text-light">

    @foreach ($answers as $answer)
        <br>
        <div>
            <button class="btn btn-cyborg col-12 text-break"
                wire:click="answerQuestion({{ $answer->id }})">
                {{ $answer->content }}
            </button>
        </div>
    @endforeach

    <div wire:model="test" class="text-light">
        {{ $test }}
    </div>

</div>
