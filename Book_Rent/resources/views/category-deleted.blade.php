@extends('layouts.mainlayout')

@section('title', 'Kategori Terhapus')

@section('content')
    <h1>Kategori Yang Terhapus</h1>

    <div class="mt-2 d-flex justify-content-end">
        <a href="categories" class="btn btn-primary">Back</a>
    </div>

    <div class="mt-3">
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
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deleted as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="category-restore/{{$item->slug}}" class="btn btn-success">Restore</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection