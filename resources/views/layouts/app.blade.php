<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/combined.css') }}">
    
</head>
<body style="background-color: #fff">
    <div id="app">
        <nav class="navbar navb navbar-expand-md navbar-dark shadow-sm fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('e-lelang.index') }}">
                    <h2><b>e-lelang</b></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a href="{{ route('e-lelang.index') }}" class="nav-link">Home</a>
                            </li>
                            @if (auth()->user()->isAdmin == 1)
                                <li class="nav-item">
                                    <a href="{{ route('regis.index') }}" class="nav-link">Manage Account</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.index') }}" class="nav-link">Konfirmasi barang</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('laporan.index') }}" class="nav-link">Laporan</a>
                                </li>
                            @elseif (auth()->user()->isPetugas == 1)
                                <li class="nav-item">
                                    <a href="{{ route('admin.index') }}" class="nav-link">Konfirmasi barang</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('laporan.index') }}" class="nav-link">Laporan</a>
                                </li>
                            @elseif (auth()->user()->isPetugas == 0 && auth()->user()->isAdmin == 0)
                                <li class="nav-item">
                                    <a href="{{ route('e-lelang.create') }}" class="nav-link">Ajukan Barang</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('barangku.index') }}" class="nav-link">Barangku</a>
                                </li>
                            @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="https://static.thenounproject.com/png/138926-200.png" class="img-fluid profile-img" alt="">
                                    {{ Auth::user()->name }} 
                                    
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <p class="dropdown-item">{{ Auth::user()->alamat }}</p>
                                    <p class="dropdown-item">{{ Auth::user()->telp }}</p>
                                    <div class="dropdown-divider"></div>
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div class="footer">
            
        </div>
    </div>
    
</body>
</html>
