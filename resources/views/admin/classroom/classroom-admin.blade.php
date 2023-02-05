@extends('layouts.main')
@section('title', 'title')

@section('content')
    <div class="page-content">
        <div class="gaming-library">
            <div class="col-lg-12">
                <div class="heading-section row d-flex justify-content-between">
                    <div class="col-md-10 col-6">
                        <h4><em>Tất cả</em> các lớp học</h4>
                    </div>
                    <div class="d-flex justify-content-end col-md-2 col-6">
                        <div>
                            <a class="btn-cyborg text-center" href="{{ route('admin-classroom.create') }}">+ Thêm lớp</a>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($classrooms as $classroom)
                <div class="item">
                    <h1>{{ $classroom->name }}</h1>
                    <p>{{ $classroom->description }}</p>
                    <div class="main-border-button ">
                        <hr class="text-light my-2">
                        <div class="row d-flex justify-content-center ">
                            <a class="col-4 text-center" href="{{ route('admin-classroom.show', $classroom->id) }}">Chỉnh sửa</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
