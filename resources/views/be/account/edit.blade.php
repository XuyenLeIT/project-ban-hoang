@extends('layouts/admin_layout')

@section('title', 'address page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2>Account create form</h2>
        <form action="{{ route('account.update',$account) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input name="name" type="text" class="form-control"
                value="{{ old('name',$account->name) }}" placeholder="Enter name"/>
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input name="text" type="text" class="form-control"
                     value="{{ old('email',$account->email) }}" placeholder="Enter email"/>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="password">Password:</label>
                <input name="password" type="text" class="form-control"
                     value="{{ old('password',$account->password) }}" 
                     placeholder="Enter password"/>
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
