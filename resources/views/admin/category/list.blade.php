

@extends('layout.mater')

@section('title','quản lý user')

@section('conten-title','quản lý user')
    
@section('content')
        <div>
            <a href="{{route('users.create_cate')}}"><button class="btn btn-info">Create</button></a>
        </div>
    <table class="table" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cate_list as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>

                <td>
                    <form action="{{route('users.edit_cate', ['id'=>$item->id])}}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('users.delete_cate', $item->id)}}" method="POST">
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
        {{$cate_list->links()}}
    </div>
@endsection