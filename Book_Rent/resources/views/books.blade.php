@extends('layouts.mainlayout')

@section('title', 'Buku')

@section('content')

    <h1>Daftar Buku</h1>

    <div class="mt-1 d-flex justify-content-end">
        <a href="books-deleted" class="btn btn-secondary me-2">Lihat Buku Terhapus</a>
        <a href="books-add" class="btn btn-primary">Tambah Buku</a>
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
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->book_code }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            @if ($item->categories->isNotEmpty())
                                {{ implode(', ', $item->categories->pluck('name')->toArray()) }}
                            @else
                                No Categories
                            @endif
                        </td>
                        
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="/books-edit/{{$item->slug}}" class="btn btn-warning">Edit</a>
                            <a href="/books-delete/{{$item->slug}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection