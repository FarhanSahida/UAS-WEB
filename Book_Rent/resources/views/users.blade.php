@extends('layouts.mainlayout')

@section('title', 'Pengguna')

@section('content')
<h1>Daftar Users</h1>

    <div class="mt-1 d-flex justify-content-end">
        <a href="users-deleted" class="btn btn-secondary me-2">Vew Banned List</a>
        <a href="registered-users" class="btn btn-primary">View Registered Users</a>
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
                @foreach ($user as $item)
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
                        <a href="users-ban/{{$item->slug}}" class="btn btn-danger">Ban</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection