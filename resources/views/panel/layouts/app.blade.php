<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset("front/img/logo.ico")}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('panel/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('font-awesome/css/all.css')}}"/>
    <link rel="stylesheet" href="{{asset('panel/css/modal.css')}}">

    <script src="{{asset('jquery/jquery-3.6.0.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">

</head>
<style>
    input,
    textarea,
    select{
        border-radius: 8px;
        padding: 8px 10px;
        border: 1px solid #ced4da;
        font-size: 15px;
    }

    form {
        display: flex;
        flex-wrap: wrap;
    }

    .half {
        display: flex;
        flex-direction: column;
        width: 48%;
        margin-right: 2%;
        margin-bottom: 30px;
    }

    .half img {
        height: 200px;
        object-fit: contain;
    }

    form div input,
    form div textarea,
    form div select{
        width: 60%;
    }
    input[type="color"]{
        width: max-content;
    }

    .flex {
        width: 48%;
        margin-left: 2%;
        margin-bottom: 30px;
    }

    .flex input {
        width: max-content;
    }

    tbody tr.false {
        background-color: #d4d4d4 !important;
    }
    table img{
        max-width: 50px;
        max-height: 50px;
        object-fit: contain;
    }
</style>
<body>
<header>
    <div class="headerRight">

        <h2><i class="fas fa-bars"></i> Hoşgeldiniz <strong></strong></h2>

        {{--en-tr ayrımı bitiş--}}
        <div>
            <li style="margin-top: 6px;margin-right: 10px;color: black; font-size: 20px;" class="language-button" tabindex="1">
                <a style="font-size: 18px; color: black;text-decoration: none" hreflang="tr"
                   href="">TR</a>&nbsp;/&nbsp;<a
                    style="font-size: 18px; color: black;text-decoration: none" hreflang="en"
                    href="">EN</a>
            </li>

            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0" style="margin-left: 10px;">
                <a href="{{route('homepage')}}"  target="_blank" class="btn green" >Sayfaya Git</a>
            </li>
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0" style="margin-left: 10px;">
                <a href="{{route('logout')}}" class="btn red"  style="margin-left: 10px">Çıkış Yap</a>
            </li>
        </div>
    </div>
</header>

<div id="sidebar">
    <aside>
        <div class="headerLogo">
            <i class="fas fa-times"></i>
            <a href="">
                <img src="{{asset("front/img/logo.png")}}" alt="">
                <div>
                    <h2>RoboAdam</h2>
                    <h2>Panel</h2>
                </div>
            </a>
        </div>
        <ul class="menu">

            <li id="anasayfa" class="menuHomePage">
                <a href="{{route('index')}}" title="Rol İşlemleri">
                    <i class="fas fa-home"></i>
                    <span>Ana Sayfa</span>
                    <i class="fas fa-caret-right"></i>
                </a>
            </li>
            <li>
                <a href="{{route('list_event')}}" title="Forms">
                    <i class="fas fa-calendar"></i>
                    <span>Etkinlikler</span>
                    <i class="fas fa-caret-right"></i>
                </a>

            </li>
            <li>
                <a href="{{route('educator_list')}}" title="Forms">
                    <i class="fas fa-user"></i>
                    <span>Eğitmenler</span>
                    <i class="fas fa-caret-right"></i>
                </a>
            </li>

            <li>
                <a href="{{route('list_blog')}}" title="Forms">
                    <i class="fas fa-pen-square"></i>
                    <span>Blog</span>
                    <i class="fas fa-caret-right"></i>
                </a>

            </li>

            <li>
                <a href="{{route('list_video')}}" title="Forms">
                    <i class="fas fa-video"></i>
                    <span>Video</span>
                    <i class="fas fa-caret-right"></i>
                </a>

            </li>

            <li>
                <a href="{{route('list_photo')}}" title="Forms">
                    <i class="fas fa-camera"></i>
                    <span>Fotoğraf</span>
                    <i class="fas fa-caret-right"></i>
                </a>

            </li>

            <li>
                <a title="Forms">
                    <i class="fas fa-message"></i>
                    <span>İletişim</span>
                    <i class="fas fa-caret-right"></i>
                </a>
                <ul>
                    <li class="menuPersonelInfo">
                        <a href="{{route('contact_event')}}" title="form-1">
                            <i class="fas fa-user"></i>
                            <span>Etkinlik Başvuruları</span>
                        </a>
                    </li>
                    <li class="menuPersonelData">
                        <a href="{{route('contact_panel')}}" title="form-2">
                            <i class="fas fa-briefcase"></i>
                            <span>Mesajlar </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('setting')}}" title="Forms">
                    <i class="fas fa-cogs"></i>
                    <span>Site Ayarları</span>
                    <i class="fas fa-caret-right"></i>
                </a>


            </li>
        </ul>
    </aside>
    <footer>
        <div style="margin-top: 15px">
            <p>Designed By | <a href="https://www.linkedin.com/in/yusuf-%C3%A7a%C4%9Flar-aksoy-81b4b6207/">Yusuf Çağlar Aksoy</a></p>
        </div>
    </footer>
</div>
<main>
    @yield("content")
</main>
<!--index.js-->
<script src="{{asset('panel/js/index.js')}}"></script>
<!--bootstrap 5.0.2 js-->
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
@yield("scripts")
<script>
    $(".open-modal").click(function (event) {
        var id = "#" + event.currentTarget.id + "-modal";
        $(id).addClass("active");
    })
    $(".modal-close").click(function () {
        $(".modal-space").removeClass("active")
    })
    $(".modal-space").click(function (event) {
        if ($(event.target).hasClass("modal-space")) {
            $(".modal-space").removeClass("active")
        }
    })
</script>
<script>
    $(".from").parent().parent().addClass("active")
    $(".from").parent().slideDown(300);
</script>


</body>

</html>
