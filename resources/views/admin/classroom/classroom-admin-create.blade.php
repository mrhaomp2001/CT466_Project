@extends('layouts.main')
@section('title', 'title')

@section('content')
    <div class="page-content">
        <div class="gaming-library">
            <div class="col-lg-12">
                <div class="heading-section">
                    <h4><em>Tạo</em> lớp học mới</h4>
                </div>
            </div>
            <form action="{{ route('admin-classroom.store') }}" method="post">
                @csrf
                @method('post')
                <div class="row">
                    <label for="name" class="text-light col-md-2 col-12">Tên lớp:
                    </label>

                    <input class="col-md-10 col-12 rounded" type="text" name="name" id="" placeholder="Nhập tên lớp cần tạo">
                    @error('name')
                        <div class="offset-md-2 my-2 col-md-6 col text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <hr class="text-light my-2">
                <div class="row my-2">
                    <label for="description" class="text-light col-md-2 col-12"> Miêu tả:
                    </label>
                    <textarea class="col-md-10 col-12 rounded" name="description" id="" cols="30" rows="5" placeholder="Nhập miêu tả của lớp học"></textarea>
                    @error('description')
                        <div class="offset-md-2 my-2 col-md-6 col text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <button class="offset-md-2 my-2 col-md-3 col btn-cyborg" type="submit">Tạo</button>
                </div>
            </form>
        </div>
    </div>
@endsection
