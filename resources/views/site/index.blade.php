<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- font-awesome CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr JS
    ============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body class="home-1">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

@include('site.layouts.header')

<!-- main-content-area start -->
<div id="main-content" class="main-content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
               @include('site.layouts.sidebar')
            </div>
            <div class="col-md-8 col-sm-12">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!-- main-content-area end -->

@include('site.layouts.footer')

<!-- jquery
============================================ -->
<script src="{{ asset('js/vendor/jquery-1.11.3.min.js') }}"></script>
<!-- bootstrap JS
============================================ -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- meanmenu JS
============================================ -->
<script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
<!-- owl.carousel JS
============================================ -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- scrollUp JS
============================================ -->
<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
<!-- plugins JS
============================================ -->
<script src="{{ asset('js/plugins.js') }}"></script>
<!-- main JS
============================================ -->
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
