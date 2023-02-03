<div>
    <div class="input-group row mt-2">
        <input class="col-md-9 col-12 rounded-start text-dark border" type="text" name="answer{{ $answer->id }}" value="{{ $answer->content }}">

        @if ($answer->correct === 1)
            <button class="col-md-1 col-12 btn btn-success border border-success text-light" type="button">Đúng</button>
        @else
            <button class="col-md-1 col-12 btn btn-warning border border-warning text-light" type="button">Sai</button>
        @endif

        <button class="col-md-1 col-12 btn btn-warning border text-light" type="button">Sửa</button>
        <button class="col-md-1 col-12 btn btn-danger border-danger text-light" type="button">Xóa</button>
    </div>
</div>
