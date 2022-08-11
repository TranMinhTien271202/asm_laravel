@extends('layout.mater')
@section('title', 'Thêm mới người dùng')
@section('content-title', 'Thêm mới người dùng')

@section('content')
    {{-- @if ($errors->any())
        <ul class="text-danger">
            Vui Lòng kiểm tra lại
        </ul>
    @endif --}}
    <form action="{{ route('users.store_cate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Tạo mới</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </div>
    </form>

@endsection
