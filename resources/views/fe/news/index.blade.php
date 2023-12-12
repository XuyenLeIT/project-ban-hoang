@extends('layouts/client_layout')

@section('title', 'product detail page')
<link rel="stylesheet" href="{{ asset('css/news.css') }}">
@section('content')
<div class="container mt-3">
    <!-- News block -->
    <div>
        @if ($latestNews)
                    <!-- Featured image -->
        <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
            <img src="{{asset($latestNews->image)}}" class="img-fluid" />
            <a href="{{route('news.detail',$latestNews->id)}}">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <!-- Article data -->
          <div class="row mb-3">
            <div class="col-6 text-start">
              <u>{{$latestNews->updated_at}}</u>
            </div>
          </div>
          <!-- Article title and description -->
          <a href="{{route('news.detail',$latestNews->id)}}" class="text-dark">
            <h5 class="news_title">{{$latestNews->title}}</h5>
            <p class="news_decription">
              {{$latestNews->description}}
            </p>
          </a>
        @endif
        <hr />
        @if ($news->count()>0)
                    <!-- News -->
        @foreach ($news as $item)
        <a href="{{route('news.detail',$item->id)}}" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="{{asset($item->image)}}"
                  class="img-fluid shadow-1-strong rounded" alt="Hollywood Sign on The Hill" />
              </div>
      
              <div class="col-9">
                <p class="mb-2"><strong class="news_title">{{$item->title}}</strong></p>
                <p>
                  <u>{{$item->updated_at}}</u>
                </p>
                <p class="news_decription">
                    {{$item->description}}
                  </p>
              </div>
            </div>
          </a>
        @endforeach
        @else
            <p class="text-center">Chưa có tin tức nào</p>
        @endif

      </div>
      <!-- News block -->
    </div>
</div>
  @endsection
