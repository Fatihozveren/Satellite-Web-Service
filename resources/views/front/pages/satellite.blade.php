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
        <div class="satellite-item">
            <div class="satellite-item-img">
                <img src="{{asset("media/entrance-inner.png")}}" alt="">
            </div>
            <div class="satellite-item-date">2022</div>
            <div class="satellite-item-name">Cloud-Aerosol Transport System on ISS (CATS on ISS)</div>
            <div class="satellite-item-button">
                <button>Learn more</button>
            </div>
        </div>
        <div class="satellite-item">
            <div class="satellite-item-img">
                <img src="{{asset("media/entrance-inner.png")}}" alt="">
            </div>
            <div class="satellite-item-date">2022</div>
            <div class="satellite-item-name">Cloud-Aerosol Transport System on ISS (CATS on ISS)</div>
            <div class="satellite-item-button">
                <button>Learn more</button>
            </div>
        </div>
        <div class="satellite-item">
            <div class="satellite-item-img">
                <img src="{{asset("media/entrance-inner.png")}}" alt="">
            </div>
            <div class="satellite-item-date">2022</div>
            <div class="satellite-item-name">Cloud-Aerosol Transport System on ISS (CATS on ISS)</div>
            <div class="satellite-item-button">
                <button>Learn more</button>
            </div>
        </div>
        <div class="satellite-item">
            <div class="satellite-item-img">
                <img src="{{asset("media/entrance-inner.png")}}" alt="">
            </div>
            <div class="satellite-item-date">2022</div>
            <div class="satellite-item-name">Cloud-Aerosol Transport System on ISS (CATS on ISS)</div>
            <div class="satellite-item-button">
                <button>Learn more</button>
            </div>
        </div>
        <div class="satellite-item">
            <div class="satellite-item-img">
                <img src="{{asset("media/entrance-inner.png")}}" alt="">
            </div>
            <div class="satellite-item-date">2022</div>
            <div class="satellite-item-name">Cloud-Aerosol Transport System on ISS (CATS on ISS)</div>
            <div class="satellite-item-button">
                <button>Learn more</button>
            </div>
        </div>
        <div class="satellite-item">
            <div class="satellite-item-img">
                <img src="{{asset("media/entrance-inner.png")}}" alt="">
            </div>
            <div class="satellite-item-date">2022</div>
            <div class="satellite-item-name">Cloud-Aerosol Transport System on ISS (CATS on ISS)</div>
            <div class="satellite-item-button">
                <button>Learn more</button>
            </div>
        </div>
    </div>

</section>

@endsection
