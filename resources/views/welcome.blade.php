@extends('app')

@section('content')
        <h1>Latest Movies</h1>
        <ul>
        @foreach($movieList as $movie)
            <li class="list-group-item"><h5>{{ $movie }}</h5></li>
        @endforeach
        </ul>
@endsection
