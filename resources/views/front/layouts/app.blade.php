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
    <link rel="stylesheet" href="{{asset('front/css/scientist.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/about.css')}}">
    <title>Nimbus Heroes</title>
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
    <div class="mobil-nav">
        <div class="menuButton">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <img class="mobil-logo" src="{{asset("media/logo.png")}}" alt="">
    </div>
    <header class="">
        <div class="nasaContainer header-inner">
            <div class="header-img"><img src="{{asset("media/logo.png")}}" alt=""></div>
            <ul>
                <li><a href="{{route("front.home")}}"><span>Home</span></a></li>
                <li><a href="{{route('satellite.index')}}"><span>Satellites</span></a></li>
                <li><a href="{{route('scientist.index')}}"><span>Scientists</span></a></li>
                <li><a href="{{route('about.index')}}"><span>About</span></a></li>

{{--                <li><a href="{{$service_link}}"><span>Web Services</span></a></li>--}}
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
                    <li><a href="{{route('satellite.index')}}"><span>Satellites</span></a></li>
                    <li><a href="{{route('scientist.index')}}"><span>Scientists</span></a></li>
                    <li><a href="{{route('about.index')}}"><span>About</span></a></li>
                    <li><a href="{{ url()->current() }}/api/documentation"><span>Web Services</span></a></li>
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
            <p>Copyright ??2022 NasaSpaceApp. All rights reserved.</p>
        </div>
    </div>
    <div class="scrollTop">
        <lottie-player class="world" src="https://lottie.host/c7a232c9-de40-4cdd-a185-9c5954f0e400/QHGH2WH4xB.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
    </div>
</main>
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('jquery/jquery-ui.min.js')}}"></script>
<script src="{{asset('jquery/scene.js')}}"></script>
<script src="{{asset('panel/js/index.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script>
    var mobilMenu = $("header");
    var mobilButton = $(".menuButton");
    var scroll = true
    $(".menuButton").click(function(event){
        if(mobilButton.hasClass("active")){
            mobilButton.removeClass("active");
            mobilMenu.removeClass("active");
        }
        else{
            mobilButton.addClass("active");
            mobilMenu.addClass("active");
        }
    })
    $(window).scroll(function (event) {
        if($(window).scrollTop()>0 && scroll){
            $(".scrollTop").addClass("active")
        }
        else{
            $(".scrollTop").removeClass("active")
        }
    })
    function scrollTrue(){
        scroll = true;
    }
    $(".scrollTop").click(function () {
        $(".scrollTop").removeClass("active")
        $(window).scrollTop(0);
    })
</script>
@yield("scripts")
</body>
</html>
