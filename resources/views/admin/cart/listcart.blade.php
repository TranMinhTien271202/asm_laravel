@extends('layout.mater')

@section('title', 'quản lý user')

@section('conten-title', 'quản lý user')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Status</th>
                <th>Number</th>
                <th>Price One Product</th>
                <th>Img</th>
                <th>Note</th>
                <th>All Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->address }}</td>
                    @if ($item['status'] == 0)
                        <td>
                            <form action="{{ route('users.status1', ['order' => $item->id, $item->status]) }}" method="POST">
                                @csrf
                                <button class="btn btn-primary">Đang Giao</button>
                            </form>
                        </td>
                    @elseif ($item['status'] == 1)
                        <td>
                            <form action="{{ route('users.status1', ['order' => $item->id, $item->status]) }}" method="POST">
                                @csrf
                                <button class="btn btn-primary">Đã giao</button>
                            </form>
                        </td>
                    @else
                        <td>
                            <form action="{{ route('users.status1', ['order' => $item->id, $item->status]) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Hủy Giao</button>
                            </form>
                        </td>
                    @endif
                    <td>{{ $item->quantily }}</td>
                    <td>{{ number_format($item->product->price) }}</td>
                    <td><img src="{{ asset($item->product->image) }}" width="70px" alt=""></td>
                    <td>{{ $item->note }}</td>
                    <td>{{ $item->totalall }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
    {{-- <div >
        {{$product->links()}}
    </div> --}}
@endsection
