@extends('layouts/admin_layout')

@section('title', 'mail page')
@section('content')
    <div class="container">
        <h2>Mail Contact List</h2>
        @if (count($mails) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Subject</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mails as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->content }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p class="text-center text-warning">Chưa có mail nào</p>
            @endif

    </div>


@endsection
