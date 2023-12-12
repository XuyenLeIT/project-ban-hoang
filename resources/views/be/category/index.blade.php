@extends('layouts/admin_layout')

@section('title', 'cate page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2>Cate list</h2>
        <a href="{{route("category.create")}}" 
            class="btn btn-primary">Create a new Category</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->status?'Đang bán':'Tạm ngưng'}}</td>
                    <td><a class="btn btn-warning" 
                        href="{{route("category.edit",$item->id)}}">Edit</a></td>
                </tr>
                @endforeach
          
            </tbody>
        </table>
    </div>


@endsection
