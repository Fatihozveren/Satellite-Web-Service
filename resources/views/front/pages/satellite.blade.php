@extends("front.layouts.app")
@section("content")
    <style>
        .satellite-item{
            display: none;
        }
        .satellite-item.active{
            display: flex;
            justify-content: flex-start;
            gap: 10px;

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
        .satellite-item-img img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            margin-top: 60px;
        }
        .satellite-items {
            margin-top: 60px;
        }
        .satellite-item{
            width: 50%;
        }
        .satellite-item.active {
            gap: 10px;
            height: max-content;
            max-width: 100%;
            position: relative;
            padding: 50px;
        }
        .satellite-item>span:after{
            content: "";
            width: 30px;
            height: 30px;
            background-color: white;
            border-radius: 50%;
            position: absolute;
            left: 40px;
            top: 2px;
        }
        .satellite-item>span:before{
            content: "";
            height: 5px;
            width: 50px;
            background-color: white;
            position: absolute;
            left: 0;
            top: 15px;
        }
        .satellite-item>span{
            font-family: BungeeRegular;
            position: absolute;
            left: 0;
            padding-left: 90px;
            font-size: 20px;
            top: 35px;
            color: white;
        }
        .satellite-item.left>span:before{
            left: auto;
            right: 0;
        }
        .satellite-item.left>span:after{
            right: 40px;
            left: auto;
        }
        .satellite-item.left>span{
            right: 0;
            left: auto;
            padding-left: 0;
            padding-right: 90px;
        }
        .satellite-item.left:before{
            content: "";
            position: absolute;
            right: -3px;
            width: 6px;
            height: 100%;
            background-color: white;
        }
        .satellite-item.right:before{
            content: "";
            position: absolute;
            left: -3px;
            width: 6px;
            height: 100%;
            background-color: white;
        }
        .satellite-item-block{
            width: 100%;
            display: flex;
        }
    </style>
<section class="satellite">
    <div class="title-search">
        <div class="satellite-title">
            <h3>SATELLITE</h3>
        </div>
        <div class="satellite-search">
            <input type="search" placeholder="Search in Satellites" id="satellite-search">
        </div>
    </div>
</section>

<section class="nasaContainer ">
    <div class="satellite-items">
        @if(isset($satellite))
            @foreach($satellite as $key => $st)
                @if($key%2)
                <div class="satellite-item-block ">
                    <div class="satellite-item left active">
                        <span>{{$st->launch_date}}</span>
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
                    <div class="satellite-item active space">
                    </div>
                </div>
                @else
                    <div class="satellite-item-block">
                        <div class="satellite-item active space">
                        </div>
                        <div class="satellite-item right active">
                            <span>{{$st->launch_date}}</span>
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
                    </div>
                @endif

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
