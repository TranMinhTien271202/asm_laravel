@extends('layout.mater')
@section('title', 'Thêm mới người dùng')
@section('content-title', 'Thêm mới người dùng')

@section('content')
    {{-- @if ($errors->any())
        <ul class="text-danger">
            Vui Lòng kiểm tra lại
        </ul>
    @endif --}}
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
            {{-- @error('name')
                <span style="color: red">{{$message}}</span>
            @enderror --}}
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" class="form-control" name="email">
            {{-- @error('email')
                <span style="color: red">{{$message}}</span>
            @enderror --}}
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">avatar</label>
            <input type="file" name="avatar">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">birthday</label>
            <input type="date" class="form-control" name="date">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone</label>
            <input type="number" class="form-control" name="phone">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">role</label><br>
            <input type="radio" name="role" value="0">GD
            <input type="radio" name="role" value="1">NV
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">status</label><br>
            <input type="radio" name="status" value="1">Khoa
            <input type="radio" name="status" value="0">Mo
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Tạo mới</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </div>
    </form>

@endsection
