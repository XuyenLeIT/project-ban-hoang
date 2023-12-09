@extends('layouts/admin_layout')

@section('title', 'news page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2>News List</h2>
        <a href="{{ route('news.create') }}" 
            class="btn btn-primary">Create a new News</a>
        @if (count($news) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $new)
                        <tr>
                            <td>{{ $new->id }}</td>
                            <td>{{ $new->title }}</td>
                            <td>{{ $new->description }}</td>
                            <td>
                                <img class="img-thumbnail" width="100" src="{{ asset($new->image) }}">
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('news.edit', $new->id) }}">Update</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            @else
            <p class="text-center text-warning">Chưa có news nào</p>
            @endif

    </div>


@endsection
