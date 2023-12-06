@extends('layouts/admin_layout')

@section('title', 'cate page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2>Category create form</h2>
        <form action="{{ route('category.update',$category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
                <label for="name">name:</label>
                <input type="name" class="form-control"
                     placeholder="Enter name"
                      name="name" value="{{ old('name',$category->name) }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="status" value="1"
                    {{ old('status') == '1' ? 'checked' : ($category->status == '0'?'checked':'') }} checked> Active
                </label>
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="status" value="0"
                    {{ old('status') == '0' ? 'checked' : ($category->status == '0'?'checked':'') }}> DisActive
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
