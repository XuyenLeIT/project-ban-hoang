@extends('layouts/admin_layout')

@section('title', 'product page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2>Product List</h2>
        <a href="{{ route('product.create') }}" class="btn btn-primary">Create a new Product</a>
        @if (count($products) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                <img class="img-thumbnail" width="100" src="{{ asset($product->images[0]->path) }}">
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('product.edit', $product->id) }}">Update</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            @else
            <p class="text-center text-warning">Chưa có sản phẩm nào</p>
            @endif

    </div>


@endsection
