@extends('layouts.main')
@section('title', 'title')

@section('content')
    <div class="page-content">
        <div class="gaming-library">
            <div class="col-lg-12">
                <div class="heading-section">
                    <h4><em>Tất cả</em> các lớp học</h4>
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
