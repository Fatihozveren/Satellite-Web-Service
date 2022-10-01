<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8 ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="{{asset('panel/css/login.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="back1">
    <div class="stars"></div>
    <div class="twinkling"></div>
    <div class="clouds"></div>
</div>
<div class="loginModal">
    <form method="post" action="{{route('login')}}"  enctype="multipart/form-data">
        @csrf
        <h2>Oturum <span>Aç</span></h2>
        <input name="email" id="email" class="check-mail form-control" type="email" placeholder="E-Mail">
        <input name="password" id="password" class="check-password form-control" type="password" placeholder="Password">
        <input type="submit" href="" class="form-control" placeholder="Oturumu Aç">
    </form>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</html>

