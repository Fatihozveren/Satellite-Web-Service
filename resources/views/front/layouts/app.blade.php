<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset("media/logo.ico")}}" type="image/x-icon">
    <script src="{{asset('jquery/jquery-3.6.0.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
</head>
<body>
<main>
    <header class="">
        <div class="nasaContainer header-inner">
            <div class="header-img"><img src="{{asset("media/logo.png")}}" alt=""></div>
            <ul>
                <li><a href="{{route("front.home")}}"><span>Home</span></a></li>
                <li><a href=""><span>Satellites</span></a></li>
                <li><a href=""><span>Scientists</span></a></li>
                <li><a href=""><span>About</span></a></li>
            </ul>
            <div></div>
        </div>
    </header>
    @yield("content")
</main>
<script src="{{asset('panel/js/index.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
@yield("scripts")
</body>
</html>
