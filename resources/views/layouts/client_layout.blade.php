<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/client.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row client__header">
            <div class="client__header-contact">
                <p>Hotline: 0948 629 345 - 0327 629 345 Facebook: facebook.com/tbcn.vn</p>
            </div>
            <div class="client__header-search">
                <div class="header_logo">
                    <img  height="50"
                    src="https://www.shutterstock.com/image-vector/laser-cutting-logo-emblem-black-600nw-2261413647.jpg" />
                </div>
                
                <div class="header_input-search">
                    <input type="text" placeholder="tim kiem san pham.." class="form-control" />
                    <button>Search</button>
                </div>

                <p class="header_hotline">Phone: 0963236247</p>
            </div>
            <div class="client__header-navbar">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <div class="container-fluid">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>  
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Link</a></li>
                              <li><a class="dropdown-item" href="#">Another link</a></li>
                              <li><a class="dropdown-item" href="#">A third link</a></li>
                            </ul>
                          </li>
                        </ul>
                    </div>
                  </nav>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>


        <div class="row client__footer">
            <div class="col-lg-3">
                <div class="client__footer-contact">
                    <p>Địa chỉ: 95 Hoàng Công Chất, Phường Phú Diễn, Quận Bắc Từ Liêm, Hà Nội</p>
                    <p>Điện thoại: 0948 629 345 - 0327 629 345</p>
                    <p>Email: sales@tbcn.vn</p>
                </div>
            </div>
            <div class="col-lg-3">
                <p class="client__footer-about">
                    Hoạt động của chúng tôi tập trung vào kết nối nhu cầu giữa người bán và người mua trong lĩnh vực
                    thiết bị công nghiệp và truyền động nhằm thỏa mãn nhu cầu các bên.
                </p>
            </div>
            <div class="col-lg-3">
                <iframe class="client__footer-map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.586932641997!2d106.82607527417363!3d10.842889457966052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175215d2664e057%3A0xc125dc00dd84fa3b!2zUXXhuq1uIDk!5e0!3m2!1sen!2s!4v1701615789929!5m2!1sen!2s"
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</body>

</html>
