@extends('layouts/admin_layout')

@section('title', 'product page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')

    <div class="container">
        <h2>Product Create form</h2>
        <a href="{{ route('product.index') }}" class="btn btn-primary">Back to List</a>
        <form enctype="multipart/form-data" action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" value="{{ old('name') }}" placeholder="Enter name"
                    name="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-3 mt-3">
                <label for="price">Price:</label>
                <input type="number" class="form-control" value="{{ old('price') }}" placeholder="Enter price"
                    name="price">
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" value="{{ old('quantity') }}" placeholder="Enter quantity"
                    name="quantity">
                @error('quantity')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3 mt-3">
                <label for="quantity">Category:</label>
                <select name="category_id" class="form-control">
                    @foreach ($categories as $item)
                        <option @selected(old('category_id') == $item->id) value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 mt-3">
                <input type="file" class="form-control" name="images[]" multiple>
                @error('images')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
