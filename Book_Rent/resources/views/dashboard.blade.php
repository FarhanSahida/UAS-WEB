@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')

<h1>Welcome, {{Auth::user()->username}}</h1>

<div class="row mt-4">
    <div class="col-lg-4">
        <div class="card-data book">
            <div class="row">
                <div class="col-6"><i class="bi bi-journal-code"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Buku</div>
                    <div class="card-count">{{$book_count}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data category">
            <div class="row">
                <div class="col-6"><i class="bi bi-card-list"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Kategori</div>
                    <div class="card-count">{{$category_count}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data user">
            <div class="row">
                <div class="col-6"><i class="bi bi-person-vcard"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Pengguna</div>
                    <div class="card-count">{{$user_count}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection