<div>
    <div class="border bg-dark rounded mt-3">
        <div class="text-light row d-flex justify-content-center">
            <div class="row col-md-10 col-8 text-break py-2">
                <input wire:model.lazy="newQuestionContent" class="text-dark rounded" type="text" placeholder="Nhập câu hỏi mới">
            </div>
            <div class="col-md-2 col-4 d-flex align-items-center">
                <a wire:click="addQuestion()" class="btn btn-success text-light text-break d-flex align-items-center">
                    |> Thêm câu hỏi
                </a>
            </div>
            @error('newQuestionContent')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <h1 class="mt-3">Các câu hỏi:</h1>

    @forelse ($questions as $question)
        <livewire:admin.classroom.question :question="$question" :wire:key="$question->id" />
    @empty
        <p class="text-light">
            Lớp chưa có câu hỏi nào, hãy tạo các câu hỏi.
        </p>
    @endforelse

    {{ $questions->links() }}
</div>
