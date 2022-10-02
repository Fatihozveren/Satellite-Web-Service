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

</head>
<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap");
    .about {
        position: fixed;
        z-index: 10;
        bottom: 10px;
        right: 10px;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: flex-end;
        align-items: flex-end;
        transition: all 0.2s ease;
    }
    .about .bg_links {
        width: 40px;
        height: 40px;
        border-radius: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 100%;
        backdrop-filter: blur(5px);
        position: absolute;
    }
    .about .logo {
        width: 40px;
        height: 40px;
        z-index: 9;
        background-image: url(https://rafaelalucas91.github.io/assets/codepen/logo_white.svg);
        background-size: 50%;
        background-repeat: no-repeat;
        background-position: 10px 7px;
        opacity: 0.9;
        transition: all 1s 0.2s ease;
        bottom: 0;
        right: 0;
    }
    .about .social {
        opacity: 0;
        right: 0;
        bottom: 0;
    }
    .about .social .icon {
        width: 100%;
        height: 100%;
        background-size: 20px;
        background-repeat: no-repeat;
        background-position: center;
        background-color: transparent;
        display: flex;
        transition: all 0.2s ease, background-color 0.4s ease;
        opacity: 0;
        border-radius: 100%;
    }
    .about .social.portfolio {
        transition: all 0.8s ease;
    }
    .about .social.portfolio .icon {
        background-image: url(https://rafaelalucas91.github.io/assets/codepen/link.svg);
    }
    .about .social.dribbble {
        transition: all 0.3s ease;
    }
    .about .social.dribbble .icon {
        background-image: url(https://rafaelalucas91.github.io/assets/codepen/dribbble.svg);
    }
    .about .social.linkedin {
        transition: all 0.8s ease;
    }
    .about .social.linkedin .icon {
        background-image: url(https://rafaelalucas91.github.io/assets/codepen/linkedin.svg);
    }
    .about:hover {
        width: 105px;
        height: 105px;
        transition: all 0.6s cubic-bezier(0.64, 0.01, 0.07, 1.65);
    }
    .about:hover .logo {
        opacity: 1;
        transition: all 0.6s ease;
    }
    .about:hover .social {
        opacity: 1;
    }
    .about:hover .social .icon {
        opacity: 0.9;
    }
    .about:hover .social:hover {
        background-size: 28px;
    }
    .about:hover .social:hover .icon {
        background-size: 65%;
        opacity: 1;
    }
    .about:hover .social.portfolio {
        right: 0;
        bottom: calc(100% - 40px);
        transition: all 0.3s 0s cubic-bezier(0.64, 0.01, 0.07, 1.65);
    }
    .about:hover .social.portfolio .icon:hover {
        background-color: #698fb7;
    }
    .about:hover .social.dribbble {
        bottom: 45%;
        right: 45%;
        transition: all 0.3s 0.15s cubic-bezier(0.64, 0.01, 0.07, 1.65);
    }
    .about:hover .social.dribbble .icon:hover {
        background-color: #ea4c89;
    }
    .about:hover .social.linkedin {
        bottom: 0;
        right: calc(100% - 40px);
        transition: all 0.3s 0.25s cubic-bezier(0.64, 0.01, 0.07, 1.65);
    }
    .about:hover .social.linkedin .icon:hover {
        background-color: #0077b5;
    }
    body {
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100%;
        background-color: #3c4359;
    }
    .content {
        width: 300px;
        height: 300px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .content .planet {
        width: 65%;
        height: 65%;
        background-color: #546c8c;
        border-radius: 100%;
        position: absolute;
        display: flex;
        align-items: center;
        transform-origin: center center;
        box-shadow: inset 2px -10px 0px rgba(0, 0, 0, 0.1);
        animation: planet 5s ease infinite alternate;
        /* planet ring */
        /* to cover the back of the ring */
        /* planet spots */
    }
    @keyframes planet {
        0% {
            transform: rotate(10deg);
        }
        100% {
            transform: rotate(-10deg);
        }
    }
    .content .planet .ring {
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 100%;
        background-color: #bacbd9;
        display: flex;
        align-items: center;
        justify-content: center;
        transform-origin: 33% center;
        box-shadow: 2px -10px 0px rgba(0, 0, 0, 0.1), inset -5px -10px 0px rgba(0, 0, 0, 0.1);
        animation: ring 3s ease infinite;
        /* small ball */
        /* inner ring */
    }
    @keyframes ring {
        0% {
            transform: rotateX(110deg) rotateZ(0deg) translate(-50px, 5px);
        }
        100% {
            transform: rotateX(110deg) rotateZ(360deg) translate(-50px, 5px);
        }
    }
    .content .planet .ring:before {
        content: "";
        position: absolute;
        width: 10px;
        height: 30px;
        border-radius: 100%;
        background-color: #7ea1bf;
        z-index: 2;
        left: calc(0px - 5px);
        box-shadow: inset -3px 3px 0px rgba(0, 0, 0, 0.2);
    }
    .content .planet .ring:after {
        content: "";
        position: absolute;
        width: 240px;
        height: 240px;
        border-radius: 100%;
        background-color: #7ea1bf;
        box-shadow: inset 2px -10px 0px rgba(0, 0, 0, 0.1);
    }
    .content .planet .cover-ring {
        position: absolute;
        width: 100%;
        height: 50%;
        border-bottom-left-radius: 80%;
        border-bottom-right-radius: 80%;
        border-top-left-radius: 100px;
        border-top-right-radius: 100px;
        transform: translate(0px, -17px);
        background-color: #546c8c;
        z-index: 2;
        box-shadow: inset 0px -2px 0px rgba(0, 0, 0, 0.1);
    }
    .content .planet .spots {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        z-index: 2;
    }
    .content .planet .spots span {
        width: 30px;
        height: 30px;
        background-color: #3c4359;
        position: absolute;
        border-radius: 100%;
        box-shadow: inset -2px 3px 0px rgba(0, 0, 0, 0.3);
        animation: dots 5s ease infinite alternate;
    }
    @keyframes dots {
        0% {
            box-shadow: inset -3px 3px 0px rgba(0, 0, 0, 0.3);
        }
        100% {
            box-shadow: inset 3px 3px 0px rgba(0, 0, 0, 0.3);
        }
    }
    .content .planet .spots span:nth-child(1) {
        top: 20px;
        right: 50px;
    }
    .content .planet .spots span:nth-child(2) {
        top: 40px;
        left: 50px;
        width: 15px;
        height: 15px;
    }
    .content .planet .spots span:nth-child(3) {
        top: 80px;
        left: 20px;
        width: 25px;
        height: 25px;
    }
    .content .planet .spots span:nth-child(4) {
        top: 80px;
        left: 90px;
        width: 40px;
        height: 40px;
    }
    .content .planet .spots span:nth-child(5) {
        top: 160px;
        left: 70px;
        width: 15px;
        height: 15px;
    }
    .content .planet .spots span:nth-child(6) {
        top: 165px;
        left: 125px;
        width: 10px;
        height: 10px;
    }
    .content .planet .spots span:nth-child(7) {
        top: 90px;
        left: 150px;
        width: 15px;
        height: 15px;
    }
    .content p {
        color: #bacbd9;
        font-size: 14px;
        z-index: 2;
        position: absolute;
        bottom: -20px;
        font-family: "Roboto Mono", monospace;
        animation: text 4s ease infinite;
        width: 100px;
        text-align: center;
    }
    @keyframes text {
        0% {
            transform: translateX(-30px);
            letter-spacing: 0px;
            color: #bacbd9;
        }
        25% {
            letter-spacing: 3px;
            color: #7ea1bf;
        }
        50% {
            transform: translateX(30px);
            letter-spacing: 0px;
            color: #bacbd9;
        }
        75% {
            letter-spacing: 3px;
            color: #7ea1bf;
        }
        100% {
            transform: translateX(-30px);
            letter-spacing: 0px;
            color: #bacbd9;
        }
    }

</style>
<div class="about">
    <a class="bg_links social portfolio" >
        <span class="icon"></span>
    </a>
    <a class="bg_links social dribbble" >
        <span class="icon"></span>
    </a>
    <a class="bg_links social linkedin">
        <span class="icon"></span>
    </a>
    <a class="bg_links logo"></a>
</div>
<div class="content">
    <div class="planet">
        <div class="ring"></div>
        <div class="cover-ring"></div>
        <div class="spots">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>

        </div>
    </div>
    <p>loading</p>
</div>
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('jquery/jquery-ui.min.js')}}"></script>
<script src="{{asset('jquery/scene.js')}}"></script>
<script src="{{asset('panel/js/index.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
@yield("scripts")
</body>
</html>
