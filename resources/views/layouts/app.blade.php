<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <style>
        a {
    color: aliceblue;
    }
    img {
    max-width: 100%;
    height: auto;
    }
    .gambar {
    width: 150px;
    min-height: 150px;
    max-height: auto;
    }
    .gambar2 {
    width: 300px;
    min-height: 300px;
    max-height: auto;
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <div><img src="/img/logo.png" style="width: 125px;height:25px;" alt=""></div>
                </a>
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
                                    {{ Auth::user()->username }}
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
                </div>
            </div>
        </nav>

        <main class="py-5">
            <div class="navbar-dark p-3 bg-primary">
                <ul class="nav justify-content-left pl-5">
                <li class="nav-item ml-5 mt-2"><a href="{{url('/home')}}"><b>Home</b></a></li>
                <li class="nav-item ml-5 mt-2"><a href="{{url('/manga')}}"><b>Daftar Komik</b></a></li>
                <li class="nav-item ml-5 mt-2"><a href="{{url('/ongoing')}}"><b>Ongoing</b></a></li>
                <li class="nav-item ml-5 mt-2"><a href="{{url('/completed')}}"><b>Tamat</b></a></li>
                </ul>
                </div>
            <br><br>
            @yield('content')
        </main>
        
    </div>
</body>
<footer class="container-fluid py-2 bg-dark">
    <p style="text-align: center; color: #d1d1d1;">
    Semua komik di website ini hanya preview dari komik aslinya, 
    mungkin terdapat banyak kesalahan bahasa, nama tokoh, dan alur cerita.
    Untuk versi aslinya, silahkan beli komiknya jika tersedia dikotamu.
    </p>
    <p style="text-align: center; color: #d1d1d1; margin: 0;">Copyright&copy; 2021 Nyaatengu</p>
</footer>
</html>
