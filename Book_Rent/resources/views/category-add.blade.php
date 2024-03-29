@extends('layouts.mainlayout')

@section('title', 'Tambah Kategori')

@section('content')
    <h1>Tambah Kategori Baru</h1> 

   <div class="mt-4 w-50">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form action="category-add" method="POST">
        @csrf
        <div>
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Category Name">
        </div>
        <div class="mt-2">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </form>
   </div>
@endsection