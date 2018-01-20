<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Luthfi') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">{{ config('app.name', 'laravel') }}</h3>   
              <ul class="nav masthead-nav">
                        <a class="navbar-brand" href="1" button type="button" class="btn btn-lg btn-primary">
                            {{ config('resources.views', 'Home') }}
                        <a class="navbar-brand" href="2" button type="button" class="btn btn-lg btn-primary">
                            {{ config('resources.views', 'Gallery') }}
                         <a class="navbar-brand" href="3" button type="button" class="btn btn-lg btn-primary">
                            {{ config('resources.views', 'Data Table') }}
                        <a class="navbar-brand" href="4" button type="button" class="btn btn-lg btn-primary">
                            {{ config('resources.views', 'Paragraph') }}
                         <a class="navbar-brand" href="5" button type="button" class="btn btn-lg btn-primary">
                            {{ config('resources.views', 'Biodata') }}
                        <a class="navbar-brand" href="6" button type="button" class="btn btn-lg btn-primary">
                            {{ config('resources.views', 'Kata Mutiara') }}
                    </a>
              </ul>
            </div>
          </div>

                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
