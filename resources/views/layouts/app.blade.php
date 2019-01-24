<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">
                        <!-- CSRF Token -->
                        <meta content="{{ csrf_token() }}" name="csrf-token">
                            <title>
                                J&C; PROGRAMMING
                            </title>
                            <!-- Styles -->
                        </meta>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Collapsed Hamburger -->
                        <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#app-navbar-collapse" data-toggle="collapse" type="button">
                            <span class="sr-only">
                                Toggle Navigation
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                        </button>
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @guest
                            <li>
                                <a href="{{route('login')}}">
                                    Login
                                </a>
                            </li>
                            <li>
                                <a href="{{route('register')}}">
                                    Register
                                </a>
                            </li>
                            @else
                            <li class="dropdown">
                                <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" v-pre="">
                                    {{ Auth::user()->name }}
                                    <span class="caret">
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
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
        @include('frond.models.model_login')
        @include('frond.models.model_register')
        @include('frond.navbar')
        </div>
        <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
        </script>
    </body>
</html>
