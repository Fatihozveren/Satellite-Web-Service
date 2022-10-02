@extends("front.layouts.app")
@section("content")
    <style>
        body{
            background-image: url({{asset("media/Detay.jpeg")}});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .back2{
            display: none;
        }
    </style>
    <section class="about">
        <div class="title-search">
            <div class="about-title">
                <h3>about</h3>
            </div>
            <div class="satellite-search">
                <input type="search" placeholder="about search">
            </div>
        </div>
    </section>

    <section class="nasaContainer">
        <div class="about-items">
            <div class="about-item">
                <div class="about-img">
                    <img src="{{asset("media/AboutProfilImages/IE.jpeg")}}" alt="">
                </div>
                <div class="about-information">
                    <div class="about-name">
                        <h5>Name:</h5>
                        <p>İpek </p>
                    </div>
                    <div class="about-surname">
                        <h5>Surname:</h5>
                        <p>ELDEK</p>
                    </div>
                    <div class="about-project">
                        <h5>Project:</h5>
                        <p>Yazılım Mühendisliği</p>
                    </div>
                </div>
            </div>
            <div class="about-item">
                <div class="about-img">
                    <img src="{{asset("media/AboutProfilImages/GU.PNG")}}" alt="">
                </div>
                <div class="about-information">
                    <div class="about-name">
                        <h5>Name:</h5>
                        <p>Gizem </p>
                    </div>
                    <div class="about-surname">
                        <h5>Surname:</h5>
                        <p>UÇAR</p>
                    </div>
                    <div class="about-project">
                        <h5>Project:</h5>
                        <p>Yazılım Mühendisliği</p>
                    </div>
                </div>
            </div>
            <div class="about-item">
                <div class="about-img">
                    <img src="{{asset("media/AboutProfilImages/FO.jpg")}}" alt="">
                </div>
                <div class="about-information">
                    <div class="about-name">
                        <h5>Name:</h5>
                        <p>Fatih </p>
                    </div>
                    <div class="about-surname">
                        <h5>Surname:</h5>
                        <p>ÖZVEREN</p>
                    </div>
                    <div class="about-project">
                        <h5>Project:</h5>
                        <p>Yazılım Mühendisliği</p>
                    </div>
                </div>
            </div><div class="about-item">
                <div class="about-img">
                    <img src="{{asset("media/AboutProfilImages/YCA.png")}}" alt="">
                </div>
                <div class="about-information">
                    <div class="about-name">
                        <h5>Name:</h5>
                        <p>Yusuf Çağlar </p>
                    </div>
                    <div class="about-surname">
                        <h5>Surname:</h5>
                        <p>AKSOY</p>
                    </div>
                    <div class="about-project">
                        <h5>Project:</h5>
                        <p>Yazılım Mühendisliği</p>
                    </div>
                </div>
            </div>
            <div class="about-item">
                <div class="about-img">
                    <img src="{{asset("media/Scientist/indir.jfif")}}" alt="">
                </div>
                <div class="about-information">
                    <div class="about-name">
                        <h5>Name:</h5>
                        <p>Semih</p>
                    </div>
                    <div class="about-surname">
                        <h5>Surname:</h5>
                        <p>YÜCEL</p>
                    </div>
                    <div class="about-project">
                        <h5>Project:</h5>
                        <p>Yazılım Mühendisliği</p>
                    </div>
                </div>
            </div>
            <div class="about-item">
                <div class="about-img">
                    <img src="{{asset("media/AboutProfilImages/MG.jpeg")}}" alt="">
                </div>
                <div class="about-information">
                    <div class="about-name">
                        <h5>Name:</h5>
                        <p>Mehmet</p>
                    </div>
                    <div class="about-surname">
                        <h5>Surname:</h5>
                        <p>GEÇİCİ</p>
                    </div>
                    <div class="about-project">
                        <h5>Bölüm:</h5>
                        <p>Yazılım Mühendisliği</p>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
