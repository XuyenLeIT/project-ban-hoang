@extends('layouts/admin_layout')

@section('title', 'address page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2>Address create form</h2>
        <form action="{{ route('address.update',$address) }}"
        enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
                <label for="address">Address:</label>
                <textarea name="address" class="form-control" placeholder="Enter address">{{ old('address',$address->address) }}</textarea>
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input name="email" type="text" class="form-control"
                     value="{{ old('email',$address->email) }}" placeholder="Enter email"/>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="phone">Phone:</label>
                <input name="phone" type="text" class="form-control" value="{{ old('phone',$address->phone) }}" placeholder="Enter phone"/>
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="logo">Current Image</label>
                <img src="{{asset($address->logo) }}"
                 class="img-thumbnail" width="100" />
            </div>
            <div class="mb-3 mt-3">
                <input type="file" class="form-control"
                     name="logo">
                @error('logo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
