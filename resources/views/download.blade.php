@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="jumbotron mt-5">
                    <h2 class="font-weight-bolder h2">Download</h2>
                    <hr>
                    <div class="movie clearfix w-75">
                        <div class="movie_img float-left pr-1">
                            <img src="{{ asset('storage/images/' . $movie->image) }}" alt="">
                        </div>
                        <div class="float-right details_download">
                            <h4 class="font-weight-bolder"><b>{{ $movie->name }}</b></h4>
                            <span class="font-weight-bold">
                                -{{ $movie->year }}<br>
                                -{{ $movie->rate }}/10 rating<br>
                                -{{ $movie->description }}<br><br>
                            </span>
                            <a href="{{ $movie->link }}" target="_blank" rel="noopener noreferrer" class="mt-4">
                                <button class="btn btn-lg btn-primary">
                                    Download
                                </button>
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
