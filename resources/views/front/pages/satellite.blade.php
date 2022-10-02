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
<section class="satellite">
    <div class="title-search">
        <div class="satellite-title">
            <h3>SATELLITE</h3>
        </div>
        <div class="satellite-search">
            <input type="search" placeholder="Satellite search">
        </div>
    </div>
</section>

<section class="nasaContainer ">
    <div class="satellite-items">
        @if(isset($satellite))
            @foreach($satellite as $st)
            <div class="satellite-item">
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
