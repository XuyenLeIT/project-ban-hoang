@extends('layouts/client_layout')

@section('title', 'home page')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@section('content')
    <!-- Carousel -->
    <div id="demo" class="carousel slide home__carausel" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            @if ($cals->count() > 0)
                @foreach ($cals as $key => $item)
                    @if ($key == 0)
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $key }}"
                            class="active"></button>
                    @else
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $key }}"></button>
                    @endif
                @endforeach
            @endif
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            @if ($cals->count() > 0)
                @foreach ($cals as $key => $item)
                    <div class="carousel-item active">
                        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="d-block carousel__image">
                    </div>
                @endforeach
            @endif

        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container">
        <div class="row">
            <h3 class="home__product-title">Sản Phẩm Nổi Bật</h3>
            <div class="cate_product">
                @foreach ($categories as $item)
                    <a class="btn btn-secondary cate_item"
                        href="{{ route('category.product', $item->id) }}">{{ $item->name }}</a>
                @endforeach
            </div>
            <div class="row gy-2 mt-2 me-0 ms-0">
                @foreach ($products as $item)
                    <div class="col-lg-4">
                        <div class="card">
                            <img src="{{ $item->images[0]->path }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <a href="{{ route('product.detail', $item->id) }}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-2 mb-2">
                <div class="home__horizontal-qc">
                    @if ($banners->count() > 0)
                        @foreach ($banners as $item)
                            <img src="{{$item->image}}"
                                class="horizontal_qc_img" />
                        @endforeach
                    @endif
                </div>

            </div>
            <div class="row gy-2 mb-2 me-0 ms-0">
                <h3 class="text-center">Tin mới nhất</h3>
                @if ($breakingNews->count() > 0)
                    <div class="home__lasted-news row gx-2 gy-2">
                        @foreach ($breakingNews as $item)
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-bottom news_image" src="{{ asset($item->image) }}"
                                            alt="Card image" style="width:100%">
                                        <h4 class="news_title">{{ $item->title }}</h4>
                                        <p class="news_description">{{ $item->description }}</p>
                                    </div>
                                    <a href="{{ route('news.detail', $item->id) }}" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>

        </div>
    </div>

    </div>


@endsection
