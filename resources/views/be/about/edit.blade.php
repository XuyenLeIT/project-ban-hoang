@extends('layouts/admin_layout')

@section('title', 'about page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2>About create form</h2>
        <form action="{{ route('about.update',$about) }}"
        enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" placeholder="Enter address">{{ old('description',$about->description) }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="logo">Current Image</label>
                <img src="{{asset($about->image) }}"
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
