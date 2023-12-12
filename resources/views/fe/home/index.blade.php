@extends('layouts/client_layout')

@section('title', 'home page')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@section('content')
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://haycafe.vn/wp-content/uploads/2022/03/Hinh-nen-que-huong-mien-Tay.jpg" alt="Los Angeles"
                    class="d-block carousel__image">
            </div>
            <div class="carousel-item">
                <img src="http://tranhphuongnguyen.com/wp-content/uploads/2017/12/tranh_phong_canh_lang_que_viet_nam-423-1.jpg"
                    alt="Chicago" class="d-block carousel__image">
            </div>
            <div class="carousel-item">
                <img src="https://tse2.mm.bing.net/th?id=OIP.TmFSehNVCRLJ0HHFQFWNBwHaDc&pid=Api&P=0&h=180" alt="New York"
                    class="d-block carousel__image">
            </div>
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
                <button class="btn btn-secondary cate_item">Vòng bi - Bạc đạn</button>
                <button class="btn btn-secondary cate_item">Vòng bi - Bạc đạn</button>
                <button class="btn btn-secondary cate_item">Vòng bi - Bạc đạn</button>
                <button class="btn btn-secondary cate_item">Vòng bi - Bạc đạn</button>
                <button class="btn btn-secondary cate_item">Vòng bi - Bạc đạn</button>
            </div>
            <div class="row gx-2 gy-2 mt-2">
                @foreach ($products as $item)
                    <div class="col-lg-4">
                        <div class="card">
                            <img src="{{ $item->images[0]->path }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <a href="{{route("product.detail",$item->id)}}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-2 mb-2">
                <div class="home__horizontal-qc">
                    <img src="https://tse2.mm.bing.net/th?id=OIP.TmFSehNVCRLJ0HHFQFWNBwHaDc&pid=Api&P=0&h=180"
                        class="horizontal_qc_img" />
                    <img src="https://tse2.mm.bing.net/th?id=OIP.TmFSehNVCRLJ0HHFQFWNBwHaDc&pid=Api&P=0&h=180"
                        class="horizontal_qc_img" />
                </div>

            </div>
            <div class="row mb-2">
                <h3 class="text-center">Tin mới nhất</h3>
                @if ($breakingNews->count() > 0)
                <div class="home__lasted-news row gx-2 gy-2">
                    @foreach ($breakingNews as $item)
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="card-img-bottom news_image" src="{{asset($item->image)}}" alt="Card image"
                                    style="width:100%">
                                    <h4 class="news_title">{{$item->title}}</h4>
                                    <p class="news_description">{{$item->description}}</p>
                            </div>
                            <a href="{{route("news.detail",$item->id)}}" class="btn btn-primary">See Profile</a>
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
