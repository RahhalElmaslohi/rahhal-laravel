<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}} : @yield('title')</title>
   <!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>


<!-- Header -->
<header id="header" class="transparent-nav">
{{-- Request::server('HTTP_ACCEPT_LANGUAGE') --}}
@php $locale = session()->get('locale'); @endphp
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Hello @if(Auth::check()) {{Auth::user()->name }} @else Guest @endif</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            @guest
                <a class="nav-link" href="{{route('user.create')}}">Registration</a>
                <a class="nav-link" href="{{route('login')}}">Login</a>
            @else
                <a class="nav-link" href="{{route('forum.index')}}">forums </a>

                <a class="nav-link" href="{{route('logout')}}">Logout</a>
            @endguest
            <a class="nav-link @if($locale=='en') bg-secondary @endif" href="{{route('lang', 'en')}}"><i class="flag flag-united-states"></i></a>
            <a class="nav-link {{ $locale =='fr' ? 'bg-secondary' : '' }}" href="{{route('lang', 'fr')}}"><i class="flag flag-france"></i></a>
        </div>
        </div>
    </div>
    </nav>

            <!-- Logo -->
            <div class="navbar-brand">
                <a class="logo" href="index.html">
                    <img src="{{asset('./img/logo-alt.png')}}" alt="logo">
                </a>
            </div>
            <!-- /Logo -->

            <!-- Mobile toggle -->
            <button class="navbar-toggle">
                <span></span>
            </button>
            <!-- /Mobile toggle -->
        </div>

        <!-- Navigation -->
        <nav id="nav" class="">
            <ul class="main-menu  navigation">
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/registration') }}">Registration</a></li>
                <li><a href="{{ url('/forum') }}">Forum</a></li>
                <li><a class="nav-link" href="{{route('fichier.index')}}">Fichiers </a></li>
                <li><a href="{{ route('blog.index')}}">Afficher les étudients</a></li>

              <!--  <li><a href="{{ route('blog.create')}}">Ajouter un étudient</a></li> -->

            </ul>
        </nav>
        <!-- /Navigation -->

    </div>
</header>

<!-- /Header -->

<!-- Home -->
<div id="home" class="hero-area">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="home-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="white-text">Edusite Free Online Training Courses</h1>
                    <p class="lead white-text">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant, eu pro alii error homero.</p>

                   <!--   <a href="{{ route('blog.create')}}" class="main-button icon-button">
                                Ajouter un étudient
                            </a> -->
                </div>
            </div>
        </div>
    </div>

</div>
    @yield('content')
    <!-- Footer -->
		<footer id="footer" class="section">

<!-- container -->
<div class="container">

    <!-- row -->
    <div class="row">

        <!-- footer logo -->
        <div class="col-md-6">
            <div class="footer-logo">
                <a class="logo" href="index.html">
                    <img src="{{asset('./img/logo.png')}}" alt="logo">
                </a>
            </div>
        </div>
        <!-- footer logo -->

        <!-- footer nav -->
        <div class="col-md-6">
            <ul class="footer-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <!-- /footer nav -->

    </div>
    <!-- /row -->

    <!-- row -->
    <div id="bottom-footer" class="row">

        <!-- social -->
        <div class="col-md-4 col-md-push-8">
            <ul class="footer-social">
                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
        <!-- /social -->

        <!-- copyright -->
        <div class="col-md-8 col-md-pull-4">
            <div class="footer-copyright">
                <span>&copy; Copyright 2018. All Rights Reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></span>
            </div>
        </div>
        <!-- /copyright -->

    </div>
    <!-- row -->

</div>
<!-- /container -->

</footer>
<!-- /Footer -->

<!-- preloader -->
<div id='preloader'><div class='preloader'></div></div>
<!-- /preloader -->


<!-- jQuery Plugins -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
</html>
