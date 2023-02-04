<div>
    <div class="border rounded row my-2 py-2">
        <div class="mt-2 mx-2">
            <div class="row input-group">
                <label class="input-group-text col-md-1 col-2 bg-secondary bg-gradient text-light" for="answer">Trả lời: </label>
                <input wire:model="answer.content" class="col-md-8 col-10 text-dark border" type="text" name="answer{{ $answer->id }}">



                @if ($answer->correct === 1)
                    <button wire:click="$set('answer.correct', 0)" class="col-md-1 col-12 btn btn-success border border-success text-light" type="button">Đúng</button>
                @else
                    <button wire:click="$set('answer.correct', 1)" class="col-md-1 col-12 btn btn-warning border border-warning text-light" type="button">Sai</button>
                @endif

                <button wire:click="updateAnswer()" class="col-md-1 col-12 btn btn-info border text-light" type="button">Sửa</button>
                <button wire:click="deleteAnswer()" class="col-md-1 col-12 btn btn-danger border-danger text-light" type="button">Xóa</button>
                @error('answer.content')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
            </div>
            <div class="row mt-1">
                <div class="col-md-5 col-12">
                    <div class="input-group row">
                        <label class="col-md-4 col-6 input-group-text" for="exp">Kinh nghiệm: </label>
                        <input wire:model="answer.exp" class="col-5 text-dark rounded-end" type="number" name="exp">
                        <div>
                            @error('answer.exp')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="input-group row">
                        <label class="col-md-4 col-6 input-group-text" for="money">Tiền: </label>
                        <input wire:model="answer.money" class="col-5 text-dark rounded-end" type="number" name="money">
                        <div>
                            @error('answer.money')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
