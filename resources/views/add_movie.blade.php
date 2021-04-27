@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row add_movie_row ">

            <div class="col-md-6 mx-auto">
                <h2 class="text-center">Add Movie</h2>
                <i class="text-center">(The Description and Rate are optional)</i>
                @if (session('success'))
                    <div class="col-sm-12">
                        <div class="alert  alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
                <form method="POST" action="{{ route('add_movie') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="movie_name">Name</label>
                        <input type="text" name="movie_name" class="form-control" required="required">
                        @error('movie_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="movie_img">Movie image</label>
                        <input type="file" name="movie_img" class="form-control" size="14">
                        @error('movie_img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="movie_description" class="form-control" rows="4" cols="30"
                            placeholder="Genre/short description"></textarea>
                        @error('movie_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="movie_link">Download Link</label>
                        <input type="text" name="link" class="form-control" required="required">
                        @error('link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="rate">Rate</label>
                        <input type="text" name="rate" class="form-control">
                        @error('rate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="text" name="year" class="form-control" required="required">
                        @error('year')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <input type="submit" name="submit" value="Add" class="btn btn-primary">
                    </div>


                </form>

            </div>

        </div><!-- end of row div -->

    @endsection
