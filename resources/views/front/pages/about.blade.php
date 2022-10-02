@extends("front.layouts.app")
@section("content")
    <style>
        .satellite-item{
            display: none;
        }
        .satellite-item.active{
            display: block;
        }
        .satellite-search{
            width: 100%;
            max-width: 600px;
        }
        .satellite-search input {
            border-radius: 0;
            padding: 10px;
            width: 100%;
            border: none;
            outline: none;
            border: 1px solid white;
            color: white;
            background: #ffffff2b;
        }
        .about-title h3{
            font-family: BungeeHairline;
            font-weight: 800;
            text-align: center;
            width: 100%;
            color: white;
            font-size: 50px;
            margin-top: 30px;
        }
    </style>
    <section class="about">
        <div class="title-search">
            <div class="about-title">
                <h3>about</h3>
            </div>
            <div class="satellite-search">
                <input type="search" placeholder="Search in About" id="about-search">
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
                        <h5>Profession:</h5>
                        <p>Software Engineering</p>
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
                        <h5>Profession:</h5>
                        <p>Software Engineering</p>
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
                        <h5>Profession:</h5>
                        <p>Software Engineering</p>
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
                        <h5>Profession:</h5>
                        <p>Software Engineering</p>
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
                        <h5>Profession:</h5>
                        <p>Software Engineering</p>
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
                        <h5>Profession:</h5>
                        <p>Software Engineering</p>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
@section("scripts")
    <script>
        var satellites = $(".about-name h5");
        $(document).ready(function() {
            $("#about-search").keyup(function(event) {
                var search = $("#about-search").val().toUpperCase();
                satellites.each(function( index ) {
                    if((satellites[index].innerHTML.toUpperCase()).indexOf(search)> -1){
                        satellites[index].parentElement.parentElement.parentElement.classList.add("active");
                    }
                    else{
                        satellites[index].parentElement.parentElement.parentElement.classList.remove("active");
                    }
                });

            });
        });
    </script>
@endsection
