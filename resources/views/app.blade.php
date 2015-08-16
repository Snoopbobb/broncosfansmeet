<!DOCTYPE html>
<html>
    <head>
        <title>Broncos Fans Meet</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <link href="{{ asset('fonts/denbroncos.ttf') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">BroncosFansMeet</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{{ url('tryouts') }}">Sports<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('tryouts') }}">All Tryouts</a></li>
                                    <li><a href="{{ url('tryouts/baseball') }}">Baseball</a></li>
                                    <li><a href="{{ url('tryouts/basketball') }}">Basketball</a></li>
                                    <li><a href="{{ url('tryouts/football') }}">Football</a></li>
                                    <li><a href="{{ url('tryouts/hockey') }}">Hockey</a></li>
                                    <li><a href="{{ url('tryouts/lacrosse') }}">Lacrosse</a></li>
                                    <li><a href="{{ url('tryouts/soccer') }}">Soccer</a></li>
                                    <li><a href="{{ url('tryouts/softball') }}">Softball</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/search') }}">Browse Tryouts</a></li>
                            <li><a href="{{ url('/how-it-works') }}" id="about">How It Works</a></li>
                            <li><a href="{{ url('/contact') }}" id="contact">Contact Us</a></li>
                            @if(Auth::user())
                                <li><a href="{{ url('tryouts/create') }}" id="create">Post Tryout</a></li>
                                <li><a href="{{ url('/profile') }}" id="profile">Your Tryouts</a></li>
                            @endif
                        </ul>           
                        

                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::guest())
                                <li><a href="{{ url('/auth/login') }}" class="">Login</a></li>
                                <li><a href="{{ url('/auth/register') }}" class="">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')

        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
