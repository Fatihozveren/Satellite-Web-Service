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
    <section class="scientist">
        <div class="title-search">
            <div class="scientist-title">
                <h3>SCIENTIST</h3>
            </div>
            <div class="satellite-search">
                <input type="search" placeholder="Scientist search">
            </div>
        </div>
    </section>

    <section class="nasaContainer">
        <div class="scientist-items">
            @if(isset($scientist))
            @if(isset($satellite))
                @foreach($scientist as $sc)
                @foreach($satellite as $st)
            <div class="scientist-item">
                    <div class="scientist-img">
                        <img src="{{asset("media/Scientist/indir.jfif")}}" alt="">
                    </div>
                    <div class="scientist-information">
                        <div class="scientist-name">
                            <h5>Name:</h5>
                            <p>{{$sc->name}}</p>
                        </div>
                        <div class="scientist-surname">
                            <h5>Surname:</h5>
                            <p>{{$sc->surname}}</p>
                        </div>
                        <div class="scientist-project">
                            <h5>Project:</h5>
                            <p>{{$st->name}}</p>
                        </div>
                    </div>
            </div>
                @endforeach
                @endforeach
            @endif
            @endif
        </div>
    </section>
@endsection
