@extends('layouts/client_layout')

@section('title', 'product detail page')
<link rel="stylesheet" href="{{ asset('css/news.css') }}">
@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <h3 class="text-center">{{$news->title}}</h3>
            <img class="news__image" src="../{{$news->image}}"/>
            <p>{{$news->description}}</p>
        </div>
    </div>

@endsection
