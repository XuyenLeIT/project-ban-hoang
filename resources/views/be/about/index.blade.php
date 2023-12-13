@extends('layouts/admin_layout')

@section('title', 'about page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2 class="text-center text-primary">About Information</h2>
        @if ($about)
            <div><span class="text-info">Description: </span>
                <p>{{ $about->description }}</p>
            </div>
            <div><span class="text-info fw-bold">Image: </span> <img src="{{ asset($about->image) }}"  width="200" class="img-thumbnail"/></div>
            <a class="btn btn-warning" href="{{ route('about.edit', $about->id) }}">Update About</a>
        @else
            <p class="text-center">Chưa có thông tin About</p>
        @endif

    </div>


@endsection
