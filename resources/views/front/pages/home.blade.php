@extends("front.layouts.app")
@section("content")
    <section class="entrance">
        <img src="{{asset("media/entrance.png")}}" alt="">
        <div class="entrance-inner nasaContainer">
            <div class="entrance-left">
                <h3 class="linearText">Nasa Space Expolaration</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac purus rhoncus, nibh pulvinar lacus, amet, risus. Nisl, venenatis turpis imperdiet tellus sed.</p>
            </div>
            <div class="entrance-right">
                <img src="{{asset("media/entrance-inner.png")}}" alt="">
            </div>
        </div>
    </section>
    <section class="datas nasaContainer">
        <div class="data">
            <div class="data-inner">
                <h4 class="linearText">Past Satellites</h4>
                <h3>34,367</h3>
            </div>
        </div>
        <div class="big data">
            <div class="data-inner">
                <h4 class="linearText">Present Satellites</h4>
                <h3>34,367</h3>
            </div>
        </div>
        <div class="data">
            <div class="data-inner">
                <h4 class="linearText">Future Satellites</h4>
                <h3>34,367</h3>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
