<div>
    <div class="my-3">
        <div class="card">
            <div class="card-header bg-dark rounded">
                <p class="text-light">
                    {{ $question->content }}</p>
                <a class="btn btn-cyborg text-light text-break" data-bs-toggle="collapse" href="#collapse{{ $question->id }}">
                    Chỉnh sửa
                </a>
            </div>
            <div id="collapse{{ $question->id }}" class="collapse ">
                <hr class="text-light">
                <div class="card-body bg-dark text-light rounded">
                    <div class="row input-group">
                        <label class="d-flex align-items-center col-md-2 text-md-end text-start text-light py-md-2" for="question{{ $question->id }}">Nội dung câu hỏi: </label>
                        <input wire:model.defer="inputQuestion" class="col-md-8 col-12 rounded-start text-dark border" type="text">
                        <button wire:click="updateQuestion()" class="col-md-1 col-12 btn btn-danger border-danger text-light" type="button">Sửa</button>
                        <button class="col-md-1 col-12 btn btn-danger border-danger text-light" type="button">Xóa</button>
                    </div>
                    <hr class="text-light mt-2">
                    <h3 class="my-2">Các câu trả lời: </h3>
                    @forelse ($question->answers as $answer)
                        <livewire:admin.classroom.answer :answer="$answer" :wire:key="$answer->id" />
                    @empty
                        <h3>Câu hỏi này chưa có câu trả lời nào cả, hãy tạo 1 câu trả lời</h3>
                    @endforelse
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
