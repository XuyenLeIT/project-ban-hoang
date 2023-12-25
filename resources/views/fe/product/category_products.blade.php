@extends('layouts/client_layout')

@section('title', 'category product page')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@section('content')

    <div class="container">
        <div class="row">
            <h3 class="home__product-title">Sản phâm về {{ $category->name }}</h3>
            <div class="row gx-2 gy-2 mt-2 me-0 ms-0">
                <div class="row gy-2 col-lg-9">
                    @if ($products->count() > 0)
                        @foreach ($products as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <img src="../../{{ $item->images[0]->path }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->name }}</h5>
                                        <a href="{{ route('product.detail', $item->id) }}" class="btn btn-primary">View
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    <p class="text-info text-center">Chưa có sản phẩm nào theo doanh mục</p>
                    @endif

                </div>
                <div class="col-lg-3 col-sm-12 col-md-12">
                    <h4 class="text-center">Tin tức</h4>
                    <div class="scroll-container">
                        <ul class="news-list">
                            @foreach ($news as $item)
                                <li class="news__item"><a
                                        href="{{ route('news.detail', $item->id) }}">{{ $item->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="home__horizontal-qc">
                    <img src="https://tse2.mm.bing.net/th?id=OIP.TmFSehNVCRLJ0HHFQFWNBwHaDc&pid=Api&P=0&h=180"
                        class="horizontal_qc_img" />
                </div>

            </div>
            <div class="row mb-2 gy-2 me-0 ms-0">
                <h3 class="text-center">Sản phẩm khác</h3>
                @foreach ($orderProducts as $item)
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="../../{{ $item->images[0]->path }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <a href="{{route("product.detail",$item->id)}}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    </div>


@endsection
