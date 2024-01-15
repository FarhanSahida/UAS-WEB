@extends('layouts.mainlayout')

@section('title', 'Buku Terhapus')

@section('content')
    <h1>Buku Yang Terhapus</h1>

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
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deleted as $item)
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
                            <a href="books-restore/{{$item->slug}}" class="btn btn-success">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection