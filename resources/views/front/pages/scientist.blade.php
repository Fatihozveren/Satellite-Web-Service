@extends("front.layouts.app")
@section("content")
    <style>
        .satellite-item{
            display: none;
        }
        .satellite-item.active{
            display: flex;
        }
        .satellite-search{
            width: 100%;
            max-width: 600px;
        }
        .satellite-search input {
            border-radius: 0;
            padding: 10px;
            width: 100%;
            outline: none;
            border: 1px solid white;
            color: white;
            background: #ffffff2b;
        }
        .scientist-title h3{
            font-family: BungeeHairline;
            font-weight: 800;
            text-align: center;
            width: 100%;
            color: white;
            font-size: 50px;
            margin-top: 30px;
        }
        .scientist-item{
            display: none;
        }
        .scientist-items {
            margin-top: 60px;
        }
        .scientist-item.active{
            display: flex;
            height: max-content;
            padding: 40px 30px;
            clip-path: polygon(0% 0%, 90% 0%, 100% 20%, 100% 100%, 10% 100%, 0% 80%);
        }
    </style>
    <section class="scientist">
        <div class="title-search">
            <div class="scientist-title">
                <h3>SCIENTIST</h3>
            </div>
            <div class="satellite-search">
                <input type="search" placeholder="Search in Scientist" id="scientist-search" >
            </div>
        </div>
    </section>

    <section class="nasaContainer">
        <div class="scientist-items">
            @if(isset($scientist))
            @if(isset($satellite))
                @foreach($scientist as $sc)
                @foreach($satellite as $st)
            <div class="scientist-item active">
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
@section("scripts")
    <script>
        var satellites = $(".scientist-name h5");
        $(document).ready(function() {
            $("#scientist-search").keyup(function(event) {
                var search = $("#scientist-search").val().toUpperCase();
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
