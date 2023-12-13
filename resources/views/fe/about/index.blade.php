@extends('layouts/client_layout')

@section('title', 'address page')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@section('content')
<!-- About 1 - Bootstrap Brain Component -->
@if ($about)
<section class="py-3 py-md-5">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5">
        <img class="img-fluid rounded" loading="lazy"
         src="{{asset($about->image)}}" alt="About 1">
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <h2 class="mb-3">Who Are We?</h2>
            <p class="mb-5">
              {{$about->description}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif


@endsection
