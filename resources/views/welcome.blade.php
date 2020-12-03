<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    </head>
    <body class="landing-page">
        <!-- page-wrapper Start-->
        <div class="page-wrapper landing-page">
            <!-- Page Body Start            -->
            <div class="landing-home">
                <ul class="decoration">
                    <li class="one"><img class="img-fluid" src="{{ asset('images/decore/1.png') }}" alt=""></li>
                    <li class="two"><img class="img-fluid" src="{{ asset('images/decore/2.png') }}" alt=""></li>
                    <li class="three"><img class="img-fluid" src="{{ asset('images/decore/3.png') }}" alt=""></li>
                    <li class="four"><img class="img-fluid" src="{{ asset('images/decore/4.png') }}" alt=""></li>
                    <li class="five"><img class="img-fluid" src="{{ asset('images/decore/1.png') }}" alt=""></li>
                    <li class="six"><img class="img-fluid" src="{{ asset('images/decore/cloud.png') }}" alt=""></li>
                    <li class="seven"><img class="img-fluid" src="{{ asset('images/decore/3.png') }}" alt=""></li>
                </ul>
                <div class="container-fluid">
                    <div class="sticky-header">
                        <header>
                            <nav class="navbar navbar-b navbar-trans navbar-expand-xl fixed-top nav-padding" id="sidebar-menu">
                                <a class="navbar-brand p-0" href="{{ url('/') }}">
                                    RaveTodo
                                </a>
                                <button class="navbar-toggler navabr_btn-set custom_nav" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <div class="navbar-collapse justify-content-end collapse hidenav" id="navbarDefault">
                                    <ul class="navbar-nav navbar_nav_modify" id="scroll-spy">
                                        @if(Route::has('login'))
                                            @auth
                                                <li class="nav-item"><a class="nav-link" href="{{ url('/todo') }}">Home</a></li>
                                            @else
                                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                                                @if (Route::has('register'))
                                                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                                @endif
                                            @endauth
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                        </header>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="content text-center">
                                <div class="m-auto">
                                    <h1 class="wow fadeIn">Rave Todo </h1>
                                    <h2 class="txt-secondary wow fadeIn">Store your todos in one click</h2>
                                    <p class="mt-3 wow fadeIn">Rave Todo was built using Laravel</p>
                                    <div class="btn-grp mt-4">
                                        <a class="btn btn-pill btn-primary btn-air-primary btn-lg mr-3 wow pulse" href="javascript:void(0)">
                                            <img src="{{ asset('images/landing/html.png') }}" alt="">HTML
                                        </a>
                                        <a class="btn btn-pill btn-success btn-air-success btn-lg wow pulse mr-3" href="javascript:void(0)">
                                            <img src="{{ asset('images/landing/laravel2.png') }}" alt="">Laravel
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer-bg">
                <div class="container">
                    <div class="landing-center ptb50">
                        <div class="title">
                            <h3>Rave Todo</h3>
                        </div>
                        <div class="footer-content">
                        <h1>Star us on Github</h1>
                        <p>If You like Our Application.</p>
                        <a class="btn mrl5 btn-lg btn-dark default-view" target="_blank" href="index-2.html">Star us on Github</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/wow/wow.min.js') }}"></script>
    <script src="{{ asset('js/landing_sticky.js') }}"></script>
</html>
