@extends('layouts.mainlayout')

@section('title', 'Users Banned')

@section('content')
<h1>Daftar Users Banned</h1>

    <div class="mt-1 d-flex justify-content-end">
        <a href="/users" class="btn btn-primary">Back</a>
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deleted as $item)
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
                        <a href="users-restore/{{$item->slug}}" class="btn btn-success">Restore</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection