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

    <div class="row mt-5">
        <input wire:model="test" class="col-12">
    </div>
</div>
