@extends('layout.mater')
@section('title', 'Sửa người dùng')
@section('content-title', 'Sửa người dùng')

@section('content')
<form action="{{route('users.update_pro', $product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{$product->name}}" aria-describedby="name">
    </div>
    <div class="form-group">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" name="price" value="{{$product->price}}" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label class="form-label">desc</label>
        <input type="birthday" class="form-control" value="{{$product->desc}}" name="desc" aria-describedby="birthday">
    </div>
    <div class="form-group">
        <label class="form-label">detail</label>
        <input type="text" class="form-control" name="detail" value="{{$product->detail}}" min="0" aria-describedby="Phone">
    </div>
    <div class="form-group">
        <label class="form-label">Ảnh đại diện</label><br>
        <img class="" src="{{asset($product->image)}}" name="image" alt="" width="150px">
        <input type="hidden" class="form-control" value="{{$product->image}}" name="image">
        <input type="file" class="form-control" value="" name="avatar_up">
    </div>
    <div class="mb-4">
        <label for="exampleInputEmail1" class="form-label">Loại</label>
        <select class="form-control" name="status" id="">
            <option value="{{$product->status}}">ans</option>
        </select>
    </div>
    <div class="mb-4">
        <label for="exampleInputEmail1" class="form-label">Loại</label>
        <select class="form-control" name="cate_id" id="">
            <option value="{{$product->cate_id}}">ans</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-warning">Nhập lại</button>
</form>
@endsection