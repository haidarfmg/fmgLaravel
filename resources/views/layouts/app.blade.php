<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ url('/home') }}">Laravel</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/product">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/insert">insert</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/displayc">credits</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/insertc">insert credit</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/insertName">insert name</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/insertNumber">insert number</a>
                  </li>


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
                    <div class="nav-item dropdown mx-5 dropstart no-arrow USERNAV">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                            <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="
                                font-size: 100%;">{{ Auth::user()->name }} </span>
                                      <i class="fas fa-user fa-sm fa-fw  text-gray-400"></i>

                         </a>

                        <ul class="dropdown-menu"  aria-labelledby="dropdownMenuButton1">
                          <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                          </li>
                         </ul>
                      </div>
                        <li class="nav-item dropdown">

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            </div>
                        </li>
                    @endguest
                </ul>
              </div>
            </div>
          </nav>
        <main class="py-4">'
            <div class="container">'
                @yield('content')
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
