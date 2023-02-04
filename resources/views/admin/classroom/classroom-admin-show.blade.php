@extends('layouts.main')
@section('title', 'title')

@section('content')
    <div class="page-content">
        @if ($classroom != null)
            <h1 class="fs-1 text-center">{{ $classroom->name }}</h1>
            <hr class="text-light mt-3">
            <p class="fs-5 text-light">{{ $classroom->description }}</p>
            <div class="main-border-button my-2 text-md-start text-center">
                <a class="btn" data-bs-toggle="collapse" href="#classCollapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Chỉnh sửa thông tin lớp
                </a>
            </div>
            <div class="collapse" id="classCollapse">
                <div class="card card-body rounded bg-dark border">
                    <form action=" {{ route('admin-classroom.update') }} " method="post">
                        @csrf
                        @method('patch')
                        <div>
                            <input type="hidden" name="id" value="{{ $classroom->id }}">
                        </div>
                        <div class="row">
                            <label class="col-md-2 text-md-end text-start py-md-2 text-light" for="name">Tên lớp: </label>
                            <input class="col-md-10 col-12 rounded" type="text" name="name" id="" value="{{ $classroom->name }}">
                        </div>
                        <hr class="text-light my-2">
                        <div class="row">
                            <label class="col-md-2 text-md-end text-start py-md-2 text-light" for="description">Miêu tả lớp học: </label>
                            <textarea class="col-md-10 col-12 rounded" name="description" cols="30" rows="5">{{ $classroom->description }}</textarea>
                        </div>
                        <div class="row">
                            <button class="btn btn-cyborg offset-md-2 col-md-4 mt-2 text-center" type="submit">Chỉnh sửa</button>
                        </div>
                    </form>
                    <hr class="text-light mt-3">

                    <div class="row">
                        <a class="btn btn-danger col-md-4 col-12 offset-md-2 mt-3" data-bs-toggle="collapse" href="#deleteClassroom" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Vùng nguy hiểm
                        </a>
                    </div>
                </div>

                <div class="collapse mt-1" id="deleteClassroom">
                    <div class="card card-body rounded bg-dark border">
                        <p class="text-light text-center">Tại đây bạn có thể xóa lớp học</p>
                        <p class="text-light text-center">Lưu ý: khi xóa lớp học "{{ $classroom->name }}"</p>
                        <p class="text-danger text-center">1. Lớp học sẽ không thể phục hồi dữ liệu khi xóa</p>
                        <p class="text-warning text-center">2. Nếu có thể, hãy sao lưu dữ liệu của lớp trước khi xóa</p>
                        <form action="{{ route('admin-classroom.destroy', $classroom->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-cyborg mt-2 text-center bg-danger" type="submit">Tôi đã hiểu và đồng ý xóa</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <h1 class="mt-3">Các câu hỏi:</h1>

            @livewire('admin.classroom.classroom', ['classroom' => $classroom], key($classroom->id))

        @else
            <hr class="text-light">
            <p class="text-light">Không tìm thấy lớp học bạn đang yêu cầu</p>
            <br>
        @endif
    </div>
@endsection
