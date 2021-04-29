@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="movie_col">

                    <div class="movie_img">
                        <a style="text-decoration: none;" href="{{ route('download_page', $movie->id) }}">
                            <img src="storage/images/{{ $movie->image }}" width="150">
                            <strong>{{ $movie->name }}({{ $movie->year }})</strong>

                        </a>
                    </div>
                </div>
            @endforeach




        </div>

    </div>

@endsection
