<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/client.css') }}">
</head>

<body>
    <div class="container-fluid gx-0">
        <div class="row client__header gx-0">
            {{-- <div class="client__header-contact">
                <p>Facebook: facebook.com/hoangram.vn</p>
            </div> --}}
            <div class="client__header-search">
                <div class="header_logo">
                    <img height="50" src="{{ asset($address->logo) }}" />
                </div>
                <form class="header_input-search" action="{{ route('home.index') }}" method="GET">
                    <input type="text" placeholder="tim kiem san pham.." name="name" class="form-control" />
                    <button class="btn btn-primary">Search</button>
                </form>

                <p class="header_hotline">Phone: {{ $address->phone }}</p>
            </div>
            <div class="client__header-navbar">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <span class="navbar-brand"></span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <div class="container-fluid">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home.index') }}">TRANG CHỦ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('fe.about.index') }}">GIỚI THIỆU</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown">SẢN PHẨM</a>
                                    <ul class="dropdown-menu">
                                        @foreach ($categories as $item)
                                            <li><a class="dropdown-item"
                                                    href="{{ route('category.product', $item->id) }}">{{ $item->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('fe.news.index') }}">TIN TỨC</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('fe.address.index') }}">LIÊN HỆ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        @yield('content')
        <div class="row client__footer gx-0">
            <div class="col-lg-3 col-sm-12">
                <div class="client__footer-contact">
                    <p>Địa chỉ: {{ $address->address }}</p>
                    <p>Điện thoại: {{ $address->phone }}</p>
                    <p>Email: {{ $address->email }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <p class="client__footer-about">
                    Hoạt động của chúng tôi tập trung vào kết nối nhu cầu giữa người bán và người mua trong lĩnh vực
                    thiết bị công nghiệp và truyền động nhằm thỏa mãn nhu cầu các bên.
                </p>
            </div>
            <div class="col-lg-3 col-sm-12">
                <iframe class="client__footer-map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.586932641997!2d106.82607527417363!3d10.842889457966052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175215d2664e057%3A0xc125dc00dd84fa3b!2zUXXhuq1uIDk!5e0!3m2!1sen!2s!4v1701615789929!5m2!1sen!2s"
                    height="200" width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</body>

</html>
