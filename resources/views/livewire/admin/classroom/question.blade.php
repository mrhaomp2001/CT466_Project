<div>
    @if (!$isDeleted)
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-dark rounded">
                    <div class="text-light row d-flex justify-content-center">
                        <div class="col-md-10 col-8 text-break">
                            {{ $question->content }}
                            @error('question.content')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-md-2 col-4 d-flex align-items-center">
                            <a wire:click="$toggle('isShow')" class="btn btn-info text-light text-break d-flex align-items-center" data-bs-toggle="collapse" href="#collapse{{ $question->id }}">
                                | Chỉnh sửa
                            </a>
                        </div>
                    </div>
                </div>
                <div id="collapse{{ $question->id }}" class="collapse @if ($isShow) show @endif">
                    <hr class="text-light">
                    <div class="card-body bg-dark text-light rounded">
                        <div class="row input-group">
                            <label class="d-flex align-items-center col-md-2 text-md-end text-start text-light py-md-2" for="question{{ $question->id }}">Nội dung câu hỏi: </label>
                            <input wire:model.lazy="question.content" class="col-md-8 col-12 rounded-start text-dark border" type="text">
                            <button wire:click="updateQuestion()" class="col-md-1 col-12 btn btn-info border text-light" type="button">Sửa</button>
                            <button wire:click="deleteQuestion()" class="col-md-1 col-12 btn btn-danger border-danger text-light" type="button">Xóa</button>
                            @error('question.content')
                                <div class="row mt-2">
                                    <div class="offset-md-2">
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <hr class="text-light mt-2">
                        <h3 class="my-2">Các câu trả lời: </h3>
                        @forelse ($question->answers as $answer)
                            <livewire:admin.classroom.answer :answer="$answer" :wire:key="$answer->id" />
                        @empty
                            <h3>Câu hỏi này chưa có câu trả lời nào cả, hãy tạo 1 câu trả lời</h3>
                        @endforelse
                        <div class="border rounded row my-2 py-2">
                            <div class="mt-2 mx-1 row">
                                <h2 class="col-12" for="answer">Tạo câu trả lời mới:</h2>
                                @if ($errors->has('newAnswerContent'))
                                    <p class="text-danger">
                                        {{ $errors->first('newAnswerContent') }}
                                    </p>
                                @endif
                                <input wire:model="newAnswerContent" class="col-md-8 col-12 text-dark border rounded" type="text" placeholder="Nhập câu trả lời mới">

                                <button wire:click="addAnswer()" class="col-md-4 col-12 btn btn-info border text-light" type="button">Thêm</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
