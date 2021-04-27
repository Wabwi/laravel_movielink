@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>



            <section>
                <div class="">
                    <div class="row row_1">

                        <div class="col-sm-8 col-md-4">
                            <div class="top_slider">
                                <h2>Trending Movies</h2>
                                <div id="carouselFull" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselIndicators" data-slide-to="3"></li>
                                        <li data-target="#carouselIndicators" data-slide-to="4"></li>
                                        <li data-target="#carouselIndicators" data-slide-to="5"></li>

                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid"
                                                src="{{ asset('storage/images/IMG-20181217-WA0011.jpg') }}" alt="movie">

                                        </div>
                                        <!--slider 1 -->

                                        <div class="carousel-item">
                                            <img class="d-block img-fluid"
                                                src="{{ asset('/storage/images/IMG-20190609-WA0019.jpg') }}">

                                        </div>
                                        <!--slider 2 -->



                                        <div class="carousel-item">
                                            <img class="d-block img-fluid"
                                                src="{{ asset('/storage/images/IMG-20181209-WA0002.jpg') }}">

                                        </div>
                                        <!--slider 3-->


                                        <div class="carousel-item">
                                            <img class="d-block img-fluid"
                                                src="{{ asset('/storage/images/IMG-20181204-WA0005.jpg') }}">

                                        </div> <!-- slider 4 -->


                                        <div class="carousel-item">
                                            <img class="d-block img-fluid"
                                                src="{{ asset('/storage/images/IMG-20181202-WA0003.jpg') }}">

                                        </div> <!-- slider 5 -->


                                        <div class="carousel-item">
                                            <img class="d-block img-fluid"
                                                src="{{ asset('/storage/images/rim_of_the_world.jpg') }}">

                                        </div> <!-- slider 6 -->

                                    </div> <!-- end of carousel-inner -->

                                    <a href="#carouselFull" class="carousel-control-prev" role="button"
                                        data-slide="prev"><span class="carousel-control-prev-icon"
                                            aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span></a>


                                    <a href="#carouselFull" class="carousel-control-next" role="button"
                                        data-slide="next"><span class="carousel-control-next-icon"></span>
                                        <span class="sr-only">Next</span></a>

                                </div>



                            </div> <!-- end of div top_slider -->


                        </div> <!-- end of div col-sm-8 -->


                        <div class="col-sm-4 col-md-8">
                            <div class="jumbotron-fluid jumbolist">
                                <h2>Other Websites</h2>
                                <hr>
                                <ul class="other_movies_list list-unstyled">

                                    <li><a href="">Hdpopcorn</a></li>
                                    <li><a href="">DivxCrawler</a></li>
                                    <li><a href="">FMovies</a></li>
                                    <li><a href="">Today Tv Series</a></li>
                                    <li><a href="">We Watch</a></li>
                                    <li><a href="">Cinema Home</a></li>
                                    <li><a href="">All Movies</a></li>
                                </ul>


                                <a href="" class="btn btn-btn-default">View All</a>

                            </div><!-- end of jumbotron tag -->

                            <div class="most_downloaded">
                                <h2>Most Downloaded</h2>

                                <img src="{{ asset('/storage/images/aladin.jpg') }}" class="img-fluid">

                            </div>

                        </div> <!-- end of col-sm-4 tag-->



                    </div>

                </div>


            </section>



            <section class="section banner">
                <div class="bg_overlay"></div>

                <div class="container">
                    <div class="row">
                        <?php if (isset($_SESSION['username'])) {
                        $username = $_SESSION['username']; ?>
                        <div class="col-sm-12 text-center text-white">
                            <h3>Admin <?php echo $username; ?>!</h3>
                            <p>You can now: add Movies<br>
                                get notified of new Movies<br>
                                view extra movies and features<br>
                                and be connected !

                            </p>

                        </div>

                        <?php
                        } else {
                        ?>
                        <div class="col-sm-12 text-center text-white">
                            <h3>Create Account Now To Gain Admin Priviledges!</h3>
                            <p>You can add Movies<br>
                                You will get notified of new Movies<br>
                                You can be the Admin

                            </p>

                        </div>
                        <?php
                        } ?>



                    </div>

                </div>


            </section>




            <section class="movie_section">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">Movies</h2>


                        <table class="table table-striped table-responsive-md">
                            <thead>

                                <tr>
                                    <th>Movie</th>
                                    <th>&nbsp;</th>
                                    <th>Rate</th>
                                    <th>Downloads</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody>



                                <tr>
                                    <td><a href="img/assimilate.jpg"><img src="{{ asset('storage/images/hellboy.jpg') }}"
                                                height="150"></a>
                                    </td>
                                    <td><strong>Hellboy:</strong><br>Action, <br>Thriller<br></td>
                                    <td>9/10</td>
                                    <td>43 Downloads</td>
                                    <td><a href="" class="btn btn-primary">Download</a></td>

                                </tr>

                                <tr>
                                    <td><a href="img/avengement.jpg"><img
                                                src="{{ asset('storage/images/Avengers-Poster-185x278.jpg') }}"
                                                height="150"></a>
                                    </td>
                                    <td><strong>Avengers:</strong><br>Action, <br>Thriller<br></td>
                                    <td>9/10</td>
                                    <td>43 Downloads</td>
                                    <td><a href="" class="btn btn-primary">Download</a></td>

                                </tr>

                                <tr>
                                    <td><a href="img/the_poison_rose.jpg"><img
                                                src="{{ asset('storage/images/aladin.jpg') }}" height="150"
                                                class="movie_img"></a></td>
                                    <td><strong>Aladin:</strong><br>Thriller<br></td>
                                    <td>9/10</td>
                                    <td>43 Downloads</td>
                                    <td><a href="" class="btn btn-primary">Download</a></td>

                                </tr>


                            </tbody>


                        </table>



                    </div>

                </div> <!-- end row div -->

            </section>

        </div>
    </div>
@endsection
