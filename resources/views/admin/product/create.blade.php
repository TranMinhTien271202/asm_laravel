@extends('layout.mater')
@section('title', 'Thêm mới người dùng')
@section('content-title', 'Thêm mới người dùng')

@section('content')
    {{-- @if ($errors->any())
        <ul class="text-danger">
            Vui Lòng kiểm tra lại
        </ul>
    @endif --}}
    <form action="{{ route('users.store_pro') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="text" class="form-control" name="price">
        </div>
        @if ($errors->has('price'))
            <span class="text-danger">{{ $errors->first('price') }}</span>
        @endif
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Anh</label>
            <input type="file" name="image">
        </div>
        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Status</label>
            <select class="form-control" name="status" id="">
                <option value="0">Mở</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Loại</label>
            <select class="form-control" name="cate_id" id="">
                @foreach ($cate_list as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Desc</label>
            <div class="form-group">
                <textarea class="form-control noidung" id="message" placeholder="Your message" name="desc"></textarea>
            </div>
        </div>
        @if ($errors->has('desc'))
            <span class="text-danger">{{ $errors->first('desc') }}</span>
        @endif
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Detail</label>
            <div class="form-group">
                <textarea class="form-control noidung" id="message" placeholder="Your message" name="detail"></textarea>
            </div>
        </div>
        @if ($errors->has('detail'))
            <span class="text-danger">{{ $errors->first('detail') }}</span>
        @endif
        <div>
            <button type="submit" class="btn btn-primary">Tạo mới</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </div>
    </form>

@endsection
