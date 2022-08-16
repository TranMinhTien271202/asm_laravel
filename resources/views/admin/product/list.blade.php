

@extends('layout.mater')

@section('title','quản lý user')

@section('conten-title','quản lý user')
    
@section('content')
        <div>
            <a href="{{route('users.create_pro')}}"><button class="btn btn-info">Create</button></a>
        </div>
    <table class="table" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Price</th>
                <th>Ảnh</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{number_format($item->price)}}</td>
                <td><img src="{{asset($item->image)}}" width="70px" alt=""></td>
                <td>
                    <form action="{{route('users.edit_pro', ['id'=>$item->id])}}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('users.delete_pro', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    <div >
        {{$product->links()}}
    </div>
@endsection