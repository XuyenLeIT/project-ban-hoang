@extends('layouts/admin_layout')

@section('title', 'account page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2 class="text-center text-primary">Account Information</h2>
        @if ($account)
            <div>
                <span class="text-info fw-bold">Account: </span> {{$account->name}}
            </div>
            <div><span class="text-info fw-bold">Email: </span> {{$account->email}}</div>
            <div><span class="text-info fw-bold">Phone: </span> {{$account->role}}</div>
        @else
            <p class="text-center">Chưa có thông tin account</p>
        @endif
     
    </div>


@endsection
