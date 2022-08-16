@extends('layout.mater')

@section('title', 'quản lý user')

@section('conten-title', 'quản lý user')

@section('content')
    <div>
        <a href="{{ route('users.create') }}"><button class="btn btn-info">Create</button></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Ngày Sinh</th>
                <th>Ảnh</th>
                <th>Email</th>
                {{-- <th>Status</th> --}}
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user_list as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->birthday }}</td>
                    <td><img src="{{ asset($item->avatar) }}" width="70px" alt=""></td>
                    <td>{{ $item->email }}</td>
                    @if ($item['status'] == 0)
                        <td>
                            <form action="{{ route('admin.status', ['users' => $item->id, $item->status]) }}" method="POST">
                                @csrf
                                <button class="btn btn-primary">Open</button>
                            </form>
                        </td>
                    @else
                        <td>
                            <form action="{{ route('admin.status', ['users' => $item->id, $item->status]) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Block</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>

    </table>
    <div>
        {{ $user_list->links() }}
    </div>
@endsection
