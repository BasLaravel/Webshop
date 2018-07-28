<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Webshop-Admin</title>


<!------ Include the above in your HEAD tag ---------->
    <script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha306-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
              crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ asset('js/cart.js') }}"></script>     
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/webshop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
    <link href="{{ asset('css/showcrypto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/helpers.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('font-awesome/fontawesome-all.js') }}"></script> 
</head>

<body>
    <!-- topnav in flexcontainer-->

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="{{ url('/')}}">
        <img src="{{asset('images/navbar/home.png' )}}" alt="Home" style="width:30px;">
    </a>
    
    <!-- Links -->
    <ul class="navbar-nav mr-auto">
    <!--dropdownmenu-->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Producten</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ url('/producten/1')}}"><i class="fab fa-bitcoin m-r-5"></i>Crypto</a>
            <a class="dropdown-item" href="{{ url('/producten/2')}}"><i class="fas fa-laptop m-r-5"></i>Elektronica</a>
            <a class="dropdown-item" href="{{ url('/producten/3')}}"><i class="fas fa-box m-r-5"></i>Witgoed</a></div>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <a class="navbar-brand" href="{{ url('/cart')}}">
        <img src="{{asset('images/navbar/shoppingcart.png' )}}" alt="Home" style="width:30px;">
        @inject('test','Gloudemans\Shoppingcart\cart')
        {{$test->count()}}
    </a>


    @guest
        <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @auth('admin')
         <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::guard('admin')->user()->voor_naam}} 
                <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('admin/logout') }}">
                <i class="fas fa-sign-out-alt"></i></span>
                Logout
                </a>
            </div>
         </li>

    @endauth
    
    @else
    
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->voor_naam}}
                <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i></span>
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

    @endguest

    </ul>
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Zoek">
            <button class="btn btn-success" type="submit">Zoek</button>
        </form>
    </nav>
    <!--  end topnav  -->

    @include('_includes.nav.admin')

    <div class="container">
        @yield('content')  
    </div>


    <!--  footermenu start -->
    <div>
        <nav class="navbar fixed-bottom navbar-expand-sm bg-dark navbar-dark">
            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Contact</a>
                    <div class="collapse" id="collapseExample">
                            <div class="d-inline p-2">
                                <p><a href="#" class="text-light bg-dark">Openingstijden Winkel</a></p>
                                <p><a href="#" class="text-light bg-dark">Contactgegevens</a></p>
                                <p><a href="#" class="text-light bg-dark">Extra</a></p>
                            </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto mb-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">Copyright 2018</a>
                </li>
            </ul>
        </nav>
    </div>

     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


</body>


</html>
