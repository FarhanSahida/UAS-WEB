@extends('layouts.mainlayout')

@section('title', 'Log Sewa')

@section('content')
<h1>Daftar Log Sewa</h1>
    <div class="mt-4">
        <x-rent-log-table :rentlog='$rent_logs'/>
    </div>
@endsection