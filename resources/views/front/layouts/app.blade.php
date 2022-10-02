<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset("media/logo.ico")}}" type="image/x-icon">
    <script src="{{asset('jquery/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('jquery/scene.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/all.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/scene.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/satellite.css')}}">

</head>
<body class="demo">
<div class="back2">
    <div class="universe">
        <div class="universe-container">
            <div class="content">
                <canvas id="universe"></canvas>
            </div>
        </div>
    </div>
</div>
<main>
    <header class="">
        <div class="nasaContainer header-inner">
            <div class="header-img"><img src="{{asset("media/logo.png")}}" alt=""></div>
            <ul>
                <li><a href="{{route("front.home")}}"><span>Home</span></a></li>
                <li><a href="{{route('satellite.index')}}"><span>Satellites</span></a></li>
                <li><a href="{{route('scientist.index')}}"><span>Scientists</span></a></li>
                <li><a href="{{route('about.index')}}"><span>About</span></a></li>
            </ul>
            <div></div>
        </div>
    </header>
    @yield("content")
    <footer>
        <div class="footer-inner nasaContainer">
            <div class="footer-img">
                <img src="{{asset("media/logo.png")}}" alt="">
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="{{route("front.home")}}"><span>Home</span></a></li>
                    <li><a href=""><span>Satellites</span></a></li>
                    <li><a href=""><span>Scientists</span></a></li>
                    <li><a href=""><span>About</span></a></li>
                </ul>
            </div>
            <div class="footer-social">
                <ul>
                    <li><a href="{{route("front.home")}}"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div  class="copyright">
        <div class="copyright-inner nasaContainer">
            <p>Copyright ©2022 NasaSpaceApp. All rights reserved.</p>
        </div>
    </div>
</main>
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('jquery/jquery-ui.min.js')}}"></script>
<script src="{{asset('jquery/scene.js')}}"></script>
<script src="{{asset('panel/js/index.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
@yield("scripts")
</body>
</html>
