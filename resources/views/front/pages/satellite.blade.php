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
        .satellite-title h3{
            font-family: BungeeHairline;
            font-weight: 800;
            text-align: center;
            width: 100%;
            color: white;
            font-size: 50px;
            margin-top: 30px;
        }
    </style>
<section class="satellite">
    <div class="title-search">
        <div class="satellite-title">
            <h3>SATELLITE</h3>
        </div>
        <div class="satellite-search">
            <input type="search" placeholder="Satellite search" id="satellite-search">
        </div>
    </div>
</section>

<section class="nasaContainer ">
    <div class="satellite-items">
        @if(isset($satellite))
            @foreach($satellite as $st)
            <div class="satellite-item active">
                <div class="satellite-item-img">
                    @if(isset($st->image_2))
                    <img src="{{asset($st->image_2)}}" alt="">
                    @else
                        <img src="{{asset("media/entrance-inner.png")}}" alt="">
                    @endif

                </div>
                <div class="satellite-item-date">{{$st->launch_date}}</div>
                <div class="satellite-item-name">{{$st->name}}</div>
                <div class="satellite-item-button">
                    <button>Learn more</button>
                </div>
            </div>
            @endforeach
        @endif
    </div>

</section>

@endsection
@section("scripts")
    <script>
        var satellites = $(".satellite-item-name");
        $(document).ready(function() {
            $("#satellite-search").keyup(function(event) {
                var search = $("#satellite-search").val().toUpperCase();
                satellites.each(function( index ) {
                    if((satellites[index].innerHTML.toUpperCase()).indexOf(search)> -1){
                        satellites[index].parentElement.classList.add("active");
                    }
                    else{
                        satellites[index].parentElement.classList.remove("active");
                    }
                });

            });
        });
    </script>
@endsection
