@extends('layouts.mainlayout')

@section('title', 'Detail Users')

@section('content')
<h1>Detail Users</h1>

    <div class="mt-1 d-flex justify-content-end">
        @if ($user->status == 'inactive')
            <a href="/users-approve/{{$user->slug}}" class="btn btn-info">Approve Users</a>
        @else
            <a href="/users" class="btn btn-info">Back</a>
        @endif
    </div>

    <div class="mt-1">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="my-4">
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="text" class="form-control" readonly value="{{$user->username}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Phone</label>
            <input type="text" class="form-control" readonly value="{{$user->phone}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Alamat</label>
            <textarea name="" id="" cols="30" rows="7" class="form-control" style="resize: none">{{ $user->address }}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <input type="text" class="form-control" readonly value="{{$user->status}}">
        </div>
    </div>

    <h2>User Rent Log</h2>

    <div class="mt-4">
        <x-rent-log-table :rentlog='$rent_logs'/>
    </div>
@endsection