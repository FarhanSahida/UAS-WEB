@extends('layouts.mainlayout')

@section('title', 'Kategori')

@section('content')
    <h1>Daftar Kategori</h1>

    <div class="mt-1 d-flex justify-content-end">
        <a href="category-deleted" class="btn btn-secondary me-2">Lihat Kategori Terhapus</a>
        <a href="category-add" class="btn btn-primary">Tambah Kategori</a>
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
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="category-edit/{{$item->slug}}" class="btn btn-warning">Edit</a>
                        <a href="category-delete/{{$item->slug}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection