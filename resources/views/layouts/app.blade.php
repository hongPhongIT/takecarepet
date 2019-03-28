<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- csrf_token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if (Route::has('login'))
    <meta name="user-infor" content="{{ Auth::user() }}">
    @endif
    <!-- Title for website -->
    <title>Take Care of Pet</title>
    <link rel="shortcut icon" href="{{asset('logo.png')}}" type="image/x-icon"/>
    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/alert.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-confirm.min.css')}}">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
</head>
<body  @if (Request::is('forum')) onload="payload()"  @endif>
    <div id="app">
        <!--================ Header Area =================-->
        <header>
            <nav class="navbar navbar-light navbar-expand-lg scroll-top-header fixed-top-transparent">
                <a class="navbar-brand align-middle" href="{{ url('/') }}">
                    <img src="{{asset('logo.png')}}" width="70" height="70" class="d-inline-block align-middle" alt="">
                    <span class="align-bottom h4">TakeCarePet</span>
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               <!-- Search form -->
                <form class="form-inline d-inline-block md-form form-sm form-search">
                    <input class="form-control d-inline-block form-control-sm w-75 border border-primary search" type="text" placeholder="Search" aria-label="Search">
                    <i class="fas fa-search text-primary align-middle search-icon" aria-hidden="true"></i>
                </form>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active pr-2">
                            <a class="nav-link h4" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item pr-2">
                            <a class="nav-link h4" href="{{ url('/service')}}">Our Services</a>
                        </li>
                        <li class="nav-item pr-2">
                            <a class="nav-link h4" href="{{ url('/forum')}}">Forum</a>
                        </li>
                        <li class="nav-item pr-2">
                            <a class="nav-link h4" href="{{ url('/video')}}">Video</a>
                        </li>
                        @guest
                        @if (Route::has('login'))
                                @auth
                                <li class="nav-item pr-2">
                                    <a class="nav-link h4" href="{{ url('/') }}">Home</a>
                                </li>
                                @else
                                <li class="nav-item pr-2">
                                    <a class="nav-link h4" href="{{ route('login') }}">Login</a>
                                </li>
                                    @if (Route::has('register'))
                                    <li class="nav-item pr-2">
                                        <a class="nav-link h4" href="{{ route('register') }}">Register</a>
                                    </li>
                                    @endif
                                @endauth
                            </div>
                        </ul>
                        <form action="{{url('/booking')}}" class="form-inline my-2 my-lg-0" method="get">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">Book Now</button>
                        </form>
                        @endif
                        @else
                            </ul>
                            <form action="{{url('/booking')}}" class="form-inline my-2 my-lg-0" method="get">
                                <button class="btn btn-primary my-2 my-sm-0" type="submit">Book Now</button>
                            </form>
                            <ul class="list-unstyled m-0 justify-content-center pl-2">
                                <li class="nav-item dropdown">
                                    <span><img class="comment-user rounded-circle" height="35" width="35" src="{{asset('image/avatar_default.png')}}"/></span>
                                    <a id="navbarDropdown" class="-d-inline-block align-middle username-text" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->user_name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        @endguest
                    
                </div>
            </nav>
        </header>
        <!--================End Header Area =================-->

        <!--================ Content Area =================-->
        <main>
            @yield('content')
        </main>
        <!--================End Content Area =================-->

        <!--================ Footer Area =================-->
        <footer>
            @extends('layouts.clients.footer')
        </footer>
        <!--================End Footer Area =================-->
    </div>
</body>
</html>
