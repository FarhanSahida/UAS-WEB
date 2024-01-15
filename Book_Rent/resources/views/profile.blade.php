@extends('layouts.mainlayout')

@section('title', 'Profile')

@section('content')
<div class="mt-4">
    <h2>Rent Log Anda</h2>
    <x-rent-log-table :rentlog='$rent_logs'/>
</div>
@endsection