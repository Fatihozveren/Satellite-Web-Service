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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


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

        <h2><i class="fas fa-bars"></i> Welcome Nimbus Heroes's Panel <strong></strong></h2>

        {{--en-tr ayrımı bitiş--}}
        <div>

            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0" style="margin-left: 10px;">
                <a href=""  target="_blank" class="btn green" >Go to Page</a>
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
                    <h2>Nimbus</h2>
                    <h2>Panel</h2>
                </div>
            </a>
        </div>
        <ul class="menu">

            <li id="anasayfa" class="menuHomePage">
                <a href="{{route('panel.index')}}" title="Home">
                    <i class="fas fa-home"></i>
                    <span>HomePage</span>
                    <i class="fas fa-caret-right"></i>
                </a>
            </li>
            <li>
                <a href="{{route('category.list')}}" title="Categories">
                    <i class="fas fa-file"></i>
                    <span>Categories</span>
                    <i class="fas fa-caret-right"></i>
                </a>

            </li>
            <li>
                <a href="{{route('statu.list')}}" title="Status">
                    <i class="fas fa-file-alt"></i>
                    <span>Status</span>
                    <i class="fas fa-caret-right"></i>
                </a>
            </li>

            <li>
                <a href="{{route('scientist.list')}}" title="Scientist">
                    <i class="fas fa-address-card"></i>
                    <span>Scientist</span>
                    <i class="fas fa-caret-right"></i>
                </a>

            </li>

            <li>
                <a href="{{route('launchpad.list')}}" title="Satellites">
                    <i class="fas fa-tachometer"></i>
                    <span>LaunchPads</span>
                    <i class="fas fa-caret-right"></i>
                </a>

            </li>

            <li>
                <a href="{{route('satellite.list')}}" title="Satellites">
                    <i class="fas fa-podcast"></i>
                    <span>Satellites</span>
                    <i class="fas fa-caret-right"></i>
                </a>

            </li>

        </ul>

    </aside>
    <footer>
        <div style="margin-top: 15px">
            <p>Designed By | NimbusHeroes</p>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
