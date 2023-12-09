@extends('layouts/admin_layout')

@section('title', 'news page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2>News Create form</h2>
        <a href="{{ route('news.index') }}" 
            class="btn btn-primary">Back to List</a>
        <form enctype="multipart/form-data" 
            action="{{ route('news.update',$new) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
                <label for="title">title:</label>
                <input type="text" class="form-control" value="{{ old('title',$new->title) }}" 
                placeholder="Enter title" name="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-3 mt-3">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description">{{ old('description',$new->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Current Image</label>
                <img src="{{asset($new->image) }}"
                 class="img-thumbnail" width="100" />
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
