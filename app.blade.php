<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TAIM Links Management</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="shortcut icon" type="image/x-icon" href="TaimIcon.ico"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" style="background-color: #f3f4f8">
        <nav class="navbar navbar-expand-md shadow-sm" style= "background-color: gold">
            <!-- <div class="container"> -->
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <label style="width: 30px"></label>
                    <div><img src="/svg/TaimLogo.svg" style="height: 45px; border-right: 1px solid #1b4b72" class="pr-3 pb-1"></div>
                    <div class="pl-3 pt-2 font-weight-bold" style="color: #1b4b72">TAIM Links Management</div>
                </a>

                <script>
                  function existingDB() {
                    confirm("Change to Exiting Database")
                    document.getElementById("currentDB").innerHTML = "<h4>Current Database is: <b>\"Existing\"</b></h4>";
                  }

                  function hldlldDB() {
                    confirm("Change to HLD/LLD Database")
                    document.getElementById("currentDB").innerHTML = "<h4>Current Database is: <b>\"HLD/LLD\"</b></h4>";
                  }

                  function deletedDB() {
                    confirm("Change to Deleted Database")
                    document.getElementById("currentDB").innerHTML = "<h4>Current Database is: <b>\"Deleted\"</b></h4>";
                  }

                </script>

                <label style="width: 100px"></label>
                <button id="Existing" type="button" onclick="existingDB()" class="btn btn-primary">Existing</button>

                <label style="width: 5px"></label>
                <button id="HLDLLD" type="button" onclick = "hldlldDB()" class="btn btn-success">HLD/LLD</button>

                <label style="width: 5px"></label>
                <button id="Deleted" type="button" onclick = "deletedDB()" class="btn btn-danger">Deleted</button>

                <label style="width: 50px"></label>
                <button type="button" class="btn btn-link">Sites</button>

                <label style="width: 2px"></label>
                <button type="button" class="btn btn-link">Equipment</button>

                <label style="width: 2px"></label>
                <button type="button" class="btn btn-link">DCN VLAN</button>

                <label style="width: 2px"></label>
                <button type="button" class="btn btn-link">Traffic VLANs</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                <!-- </div> -->
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>
</html>
