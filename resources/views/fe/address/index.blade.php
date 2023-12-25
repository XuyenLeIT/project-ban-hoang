@extends('layouts/client_layout')

@section('title', 'address page')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-5">
                <h4>THÔNG TIN LIÊN HỆ</h4>
                <p><i class="fa-solid fa-phone me-2"></i> {{ $address->address }}</p>
                <p><i class="fa-solid fa-map-location me-2"></i> {{ $address->phone }}</p>
                <p><i class="fa-solid fa-envelope me-2"></i>{{ $address->email }}</p>
                <iframe class="address__map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.586932641997!2d106.82607527417363!3d10.842889457966052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175215d2664e057%3A0xc125dc00dd84fa3b!2zUXXhuq1uIDk!5e0!3m2!1sen!2s!4v1701615789929!5m2!1sen!2s"
                    height="400" width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-7">
                @if (session("success"))
                <div class="alert alert-success">
                    <strong>Success!</strong> {{session("success")}}
                  </div>
                @endif
                <h2>Gửi thông tin</h2>
                <p>Hoạt động của Chúng tôi nhằm kết nối nhu cầu giữa người muốn mua hàng và người có hàng tồn kho nhằm thỏa
                    mãn nhu cầu của cả hai bên.
                    Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi
                    nhận được.</p>
                <form action="{{ route('fe.sendMail') }}" method="POST">
                    @csrf
                    <div class="row mb-3 mt-3">
                        <label for="name">Subject:</label>
                        <input type="name" class="form-control" value="{{ old('name') }}" placeholder="Enter name"
                            name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row mb-3 mt-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" value="{{ old('email') }}" placeholder="Enter email"
                            name="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="phone">Phone:</label>
                        <input type="phone" class="form-control" value="{{ old('phone') }}" placeholder="Enter phone"
                            name="phone">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="content">Nội dung:</label>
                        <textarea class="form-control" name="content">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
