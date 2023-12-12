@extends('layouts/client_layout')

@section('title', 'product detail page')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
@section('content')

    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4">
                                    <img id="main-image" src="../{{ $product->images[0]->path }}" width="300" />
                                </div>
                                <div class="thumbnail text-center">
                                    @foreach ($product->images as $item)
                                     
                                            <img onclick="change_image(this)" src="../{{ $item->path }}" width="150" />
                        
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                         <a class="ml-1" href="{{route("home.index")}}"><i class="fa fa-long-arrow-left"></i> Back</a>
                                    </div>
                                </div>
                                <div class="mt-4 mb-3">
                                    <h5 class="text-uppercase">{{ $product->name }}</h5>
                                    <div class="price d-flex flex-row align-items-center"> <span
                                            class="act-price">${{ $product->price }}</span>

                                    </div>
                                </div>
                                <p class="about">{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function change_image(image) {

            var container = document.getElementById("main-image");

            container.src = image.src;
        }
    </script>
@endsection
