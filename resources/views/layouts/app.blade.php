<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"/>
    <!-- Vector CSS -->
    <link href="{{ URL::to('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="{{ URL::to('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ URL::to('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ URL::to('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{ URL::to('assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{ URL::to('assets/css/app-style.css') }}" rel="stylesheet"/>

</head>
<body>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
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
                    @endguest
                </ul>
            </div>
        </div>
    </nav> --}}

    <!-- Start wrapper-->
    <div id="wrapper">
        @include('inc.sidebar')
        @include('inc.navbar')
        @yield('content')
        @include('inc.footer')
    </div>
{{-- </div> --}}
<!-- Bootstrap core JavaScript-->
<script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>

<!-- simplebar js -->
<script src="{{ URL::to('assets/plugins/simplebar/js/simplebar.js') }}"></script>
<!-- waves effect js -->
<script src="{{ URL::to('assets/js/waves.js') }}"></script>
<!-- sidebar-menu js -->
<script src="{{ URL::to('assets/js/sidebar-menu.js') }}"></script>
<!-- Custom scripts -->
<script src="{{ URL::to('assets/js/app-script.js') }}"></script>

<!-- Vector map JavaScript -->
<script src="{{ URL::to('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Chart js -->
<script src="{{ URL::to('assets/plugins/Chart.js/Chart.min.js') }}"></script>
<!-- Index js -->
<script src="{{ URL::to('assets/js/index.js') }}"></script>
</body>
</html>
