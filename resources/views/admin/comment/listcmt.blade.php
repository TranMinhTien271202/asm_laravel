

@extends('layout.mater')

@section('title','quản lý user')

@section('conten-title','quản lý user')
    
@section('content')
    <table class="table" >
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>image</th>
                <th>product</th>
                <th>comment</th>
                <th>Quản lý</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comment as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->users->email}}</td>
                <td><img src="{{$item->product->image}}" width="100px" alt=""></td>
                <td>{{$item->product->name}}</td>
                <td>{{$item->comment}}</td>
                <td><button type="submit">Chi Tiết</button></td>
            </tr>
            @endforeach
        </tbody>

    </table>
    <div >
        {{$comment->links()}}
    </div>
@endsection