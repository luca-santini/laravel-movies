@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Overview</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->overview }}</td>
                        <td>{{ $movie->rating }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
