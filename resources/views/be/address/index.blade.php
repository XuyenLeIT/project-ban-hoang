@extends('layouts/admin_layout')

@section('title', 'address page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2 class="text-center text-primary">Address Information</h2>
        @if ($address)
            <div>
                <span class="text-info fw-bold">Address: </span> {{$address->address}}
            </div>
            <div><span class="text-info fw-bold">Email: </span> {{$address->email}}</div>
            <div><span class="text-info fw-bold">Phone: </span> {{$address->phone}}</div>
            <div><span class="text-info fw-bold">Logo: </span> <img src="{{asset($address->logo)}}"/></div>
            <a class="btn btn-warning"
            href="{{route("address.edit",$address->id)}}">Update Address</a>
        @else
            <p class="text-center">Chưa có thông tin địa chỉ</p>
        @endif
     
    </div>


@endsection
