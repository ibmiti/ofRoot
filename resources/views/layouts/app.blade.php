<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a7bffd41d3.js"></script>
    <!-- Google fonts ( Roboto+Condensed ) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">

    <title>OfRoot - @yield('title') </title>
</head>
<style>
/* @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap');
.col-lg  {
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: 300;
    letter-spacing: .45px;
    font-size: 26px;
}
.col-md {
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 16px;
    color: #555555;
    line-height: 1.5;
    letter-spacing: .45px;
    margin: 2em 2em 2em 2em;
    padding: 2em 100px 2em 100px;
}
.col-sm {
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 16px;
    color: #555555;
    line-height: 1.5;
    letter-spacing: .45px;
    margin: 2em 2em 2em 2em;
    padding: 2em 100px 2em 100px;
}
ul {
    list-style-type: none;
}
body {
    line-height: 2.0;
    letter-spacing: .45px;
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: 300;
    background-color: #fcf0fc;
} */















</style>
<!-- | details which navbar is served -->
<!-- | this is a feature which can be turned on for various navbar setups -->
@switch($uri = Request::getRequestUri())
        @case($uri == '/welcome')
            <x-navbar/>
        @break
        @case ($uri == '/babies')
            <x-navbar/>
        @break
        @case($uri == '/kids')
            <x-navbar/>
        @break
        @case($uri == '/guides')
            <x-navbar/>
        @break
        @case($uri == '/health')
            <x-navbar/>
        @break
        @case($uri == '/about')
            <x-navbar/>
        @break
        @case ($uri == '/contact')
            <x-navbar/>
        @break
        @case ($uri == '/articles')
            <x-navbar/>
        @break
        <!-- this is temp. -->
        @case($uri == '/')
            <!--  this is landing page -->
        @break
        @case($uri)
            <x-navbar/>
        @break
    @endswitch
<body id="body" class="container" style="opacity: 0;">

    <div class="row">
        <div class="col-12">
            @include('partials.flash-message')
            @yield('content')
        </div>
    </div>

<!-- div containing footer component -->
<div class="row">
    <div class="col-sm-12 text-center">
        @php $uri = Request::getRequestUri(); @endphp
        @if($uri !== '/createAdmin')

            <x-footer />

        @endif



    </div>
</div>
<script type="text/javascript">
        var opacity = 0;
        var intervalID = 0;
        window.onload = fadeIn;

        function fadeIn() {
            setInterval(show, 75);
        }

        function show() {
            var body = document.getElementById("body");
            opacity = Number(window.getComputedStyle(body)
                             .getPropertyValue("opacity"));
            if (opacity < 1) {
                opacity = opacity + 0.1;
                body.style.opacity = opacity
            } else {
                clearInterval(intervalID);
            }
        }
</script>
<!-- bootstrap related scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"                  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>
</html>
