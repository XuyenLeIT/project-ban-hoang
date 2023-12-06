@extends('layouts/client_layout')

@section('title', 'home page')
<link rel="stylesheet" href="{{asset("css/home.css")}}">
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
               <img src="https://haycafe.vn/wp-content/uploads/2022/03/Hinh-nen-que-huong-mien-Tay.jpg"
                   alt="Los Angeles" class="d-block carousel__image">
           </div>
           <div class="carousel-item">
               <img src="http://tranhphuongnguyen.com/wp-content/uploads/2017/12/tranh_phong_canh_lang_que_viet_nam-423-1.jpg"
                   alt="Chicago" class="d-block carousel__image">
           </div>
           <div class="carousel-item">
               <img src="https://tse2.mm.bing.net/th?id=OIP.TmFSehNVCRLJ0HHFQFWNBwHaDc&pid=Api&P=0&h=180"
                   alt="New York" class="d-block carousel__image">
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
            <h1>About Page</h1>
            <p>This is the about page content.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
            </p>
            <p>This is the about page content.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam nostrum rem magnam blanditiis
                exercitationem accusantium earum, quasi asperiores natus libero cumque minus pariatur non sed mollitia optio
                maiores voluptates sit.
            </p>
        </div>

    </div>


@endsection
