@extends('layouts.mainlayout')

@section('title', 'Registered Users')

@section('content')
<h1>Daftar Users Belum Active</h1>

    <div class="mt-1 d-flex justify-content-end">
        <a href="/users" class="btn btn-primary">Users List</a>
    </div>

    <div class="mt-1">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registeredUsers as $item)
                </tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->username }}</td>
                    <td>
                        @if ($item->phone)
                            {{ $item->phone }}
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="/users-detail/{{$item->slug}}" class="btn btn-secondary">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection