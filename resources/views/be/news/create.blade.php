@extends('layouts/admin_layout')

@section('title', 'news page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2>News Create form</h2>
        <a href="{{ route('news.index') }}" 
            class="btn btn-primary">Back to List</a>
        <form enctype="multipart/form-data" 
            action="{{ route('news.store') }}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="title">title:</label>
                <input type="text" class="form-control" value="{{ old('title') }}" 
                placeholder="Enter title" name="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-3 mt-3">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3 mt-3">
                <input type="file" class="form-control"
                     name="image">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
