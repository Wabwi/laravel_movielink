<!DOCTYPE html>
<html>

<head>
    <title>MovieLink</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">

    {{-- <link rel="stylesheet" type="text/css" href="design/style.css"> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    {{-- <script src="design/jquery.js"></script> --}}

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background: #343a40;
        }

        .search_box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: LightGray;
            height: 40px;
            border-radius: 40px;
            padding: 5px;
        }

        .search_box:hover>.search_txt {
            width: 200px;
            padding: 0px 6px;
        }


        .search_box:hover>.search_btn {
            background-color: white;
        }

        .search_btn {
            color: LightGray;
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #2f3640;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.4s;
        }

        .search_txt {
            border: none;
            background: none;
            outline: none;
            float: left;
            padding: 0;
            color: white;
            font-size: 16px;
            transition: 0.4s;
            line-height: 40px;
            width: 0px;

        }

        .brand {
            text-align: center;
            text-decoration: none;
            font-size: 2em;
            font-weight: bolder;
            padding-top: 50px;
            margin-top: 100px;
            color: white !important;

        }

        .brand a,
        .option {
            text-decoration: none;
            color: white;
        }

        .option {
            padding: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .options {
            margin-right: auto;
            margin-top: 20px;

        }

        .link {
            background-color: white;
            color: black;
            padding: 5px;
            border-radius: 2px;

        }

        .movie {
            font-family: Verdana;
        }

        @media only screen and (max-width: 600px) {
            .search_txt {
                width: 150px;
                padding-left: 4px;
            }

            .search_box:hover>.search_txt {
                width: 105px;
                padding: ;
            }

        }

        @media only screen and (max-width: 450px) {
            .search_box {
                height: 35px;
                border-radius: 35px;
            }

            .search_txt {
                width: 90px;
                padding-left: 4px;
                line-height: 35px;
                font-size: 13px;
            }

            .search_btn {
                width: 35px;
                height: 35px;

            }

            .search_box:hover>.search_txt {
                width: 90px;

            }

        }

    </style>
</head>

<body>
    <div class="">
        @if (Route::has('login'))
            <div class="options">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-light option">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-light option">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-light option">Register</a>
                    @endif
                @endauth
            </div>
        @endif

    </div>


    <div class="brand">
        <a href="{{ route('home') }}" class="navbar-brand"><span class="movie">Movie</span><span
                class="link">Link</span></a>

    </div>

    <form method="POST" action="search_result.php">
        <div class="search_box">
            <input class="search_txt" type="text" name="search_movie" placeholder="Type to search">
            <button type="submit" name="search_submit" class="search_btn">
                <i class="fa fa-search"></i>

            </button>

        </div>

    </form>



</body>

</html>
