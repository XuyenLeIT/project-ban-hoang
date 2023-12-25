@extends('layouts/admin_layout')

@section('title', 'carausel page')
@section('content')
    <div class="container">
        <h2>Banner Create form</h2>
        <a href="{{ route('banner.index') }}" 
            class="btn btn-primary">Back to List</a>
        <form enctype="multipart/form-data" 
            action="{{ route('banner.store') }}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="title">Name:</label>
                <input type="text" class="form-control" value="{{ old('name') }}" placeholder="Enter name"
                    name="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" 
                  {{old("status")== 0?"checked":""}} 
                    id="status_dis" name="status" value="0">
                <label class="form-check-label" for="status_dis">DisActive</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input"
                {{old("status")== 1?"checked":""}} 
                id="status_ac" name="status" value="1" checked>
                <label class="form-check-label" for="status_ac">Active</label>
            </div>
            <div class="mb-3 mt-3">
                <input type="file" class="form-control" name="image">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
