@extends('layouts/admin_layout')
@section('title', 'product page')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
@section('content')
    <div class="container mt-3">
        <h2 class="text-center text-success">Product Edit form</h2>
        <a href="{{ route('product.index', $product) }}" class="btn btn-primary">Back to List</a>
        <form enctype="multipart/form-data" id="edit-product-form" action="{{ route('product.update', $product) }}"
            method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" value="{{ old('name', $product->name) }}"
                    placeholder="Enter name" name="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-3 mt-3">
                <label for="price">Price:</label>
                <input type="number" class="form-control" value="{{ old('price', $product->price) }}"
                    placeholder="Enter price" name="price">
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" value="{{ old('quantity', $product->quantity) }}"
                    placeholder="Enter quantity" name="quantity">
                @error('quantity')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description">{{ old('description', $product->description) }}</textarea>
            </div>
            <div class="mb-3 mt-3">
                <label for="quantity">Category:</label>
                <select name="category_id" class="form-control">
                    @foreach ($categories as $item)
                        <option @selected(old('category_id',$selectedCate) == $item->id) value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 mt-3">
                <input type="file" class="form-control" name="images[]" multiple>
                @error('images')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3 item_image">
                @foreach ($product->images as $image)
                    <div class="delete-image" data-id="{{ $image->id }}">
                        <img class="img-thumbnail product__image" src="{{ asset($image->path) }}">
                        <i class="fas fa-times icon__close"></i>
                    </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        // Get all delete buttons
        let deleteButtons = document.querySelectorAll('.delete-image');
        // Click handler
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Get image id
                let imageId = this.dataset.id;

                button.classList.add("removeImage")
                addDeletedImageInput(imageId);

            });

        });

        function addDeletedImageInput(imageId) {
            // Create a hidden input to keep track of deleted images
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'deleted_images[]';
            input.value = imageId;

            // Append the hidden input to the form
            document.getElementById('edit-product-form').appendChild(input);
        }
    </script>
@endsection
