@extends('layouts/admin_layout')

@section('title', 'news page')
{{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@section('content')
    <div class="container">
        <h2>Carausel List</h2>
        <a href="{{ route('carausel.create') }}" 
            class="btn btn-primary">Create a new carausel</a>
        @if (count($cals) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cals as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <img class="img-thumbnail" width="100" src="{{ asset($item->image) }}">
                            </td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a class="btn btn-danger" href="{{ route('carausel.delete', $item->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            @else
            <p class="text-center text-warning">Chưa có image nào</p>
            @endif

    </div>


@endsection
