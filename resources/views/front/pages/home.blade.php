@extends("front.layouts.app")
@section("content")
    <section class="entrance">
        <div class="entrance-img">
            <img src="{{asset("media/entrance.png")}}" alt="">
        </div>
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
            <h4 class="linearText">Past Satellites</h4>
            <h3 class="count" data-value="1200"></h3>
        </div>
        <div class="big data">
            <h4 class="linearText">Present Satellites</h4>
            <h3 class="count" data-value="11200"></h3>
        </div>
        <div class="data">
            <h4 class="linearText">Future Satellites</h4>
            <h3 class="count" data-value="800"></h3>
        </div>
    </section>
    <section class="future-satellites nasaContainer">
        <h1>FUTURE SATELLİTES</h1>
        <div class="future-satellites-top">
            <div class="future-satellites-left">
                <div class="future-satellites-earth">
                    <img src="{{asset("media/earth.gif")}}" alt="">
                </div>
                <div class="satellites">
                    <div class="satellite active">
                        <img src="{{asset("media/Satellite/calipso.png")}}" alt="">
                    </div>
                    <div class="satellite">
                        <img src="{{asset("media/Satellite/cats.png")}}" alt="">
                    </div>
                    <div class="satellite">
                        <img src="{{asset("media/Satellite/cloudsat.png")}}" alt="">
                    </div>
                    <div class="satellite">
                        <img src="{{asset("media/Satellite/cress.png")}}" alt="">
                    </div>
                </div>
            </div>
            <div class="future-satellites-right">
                <div class="satellite-text">
                    <h4 class="linearText">ACTIVE CAVITY RADIOMATER IRRADIANCE MONITOR SATELLİTE</h4>
                    <div>
                        <p><b>Status :</b>Completed</p>
                        <p><b>Mission Category :</b>Earth Observing System (EOS)</p>
                        <p><b>Launch Date :</b>December 20, 1999</p>
                        <p><b>Launch Location :</b>Vandenberg Air Force Base, CA</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="other-satellites-slider">
            <i class="fa-thin fa-arrow-left-long"></i>
            <div class="other-satellites-slides">
                <div class="other-satellites">
                    <div class="other-satellite">
                        <img src="{{asset("media/Satellite/CRRESS.jpg")}}" alt="">
                        <h4>Lorem ipsum dolor. </h4>
                    </div>
                    <div class="other-satellite">
                        <img src="{{asset("media/Satellite/CRRESS.jpg")}}" alt="">
                        <h4>Lorem ipsum dolor. </h4>
                    </div>
                    <div class="other-satellite">
                        <img src="{{asset("media/Satellite/CRRESS.jpg")}}" alt="">
                        <h4>Lorem ipsum dolor. </h4>
                    </div>
                    <div class="other-satellite">
                        <img src="{{asset("media/Satellite/CRRESS.jpg")}}" alt="">
                        <h4>Lorem ipsum dolor. </h4>
                    </div>
                    <div class="other-satellite">
                        <img src="{{asset("media/Satellite/CRRESS.jpg")}}" alt="">
                        <h4>Lorem ipsum dolor. </h4>
                    </div>
                    <div class="other-satellite">
                        <img src="{{asset("media/Satellite/CRRESS.jpg")}}" alt="">
                        <h4>Lorem ipsum dolor. </h4>
                    </div>
                    <div class="other-satellite">
                        <img src="{{asset("media/Satellite/CRRESS.jpg")}}" alt="">
                        <h4>Lorem ipsum dolor. </h4>
                    </div>
                    <div class="other-satellite">
                        <img src="{{asset("media/Satellite/CRRESS.jpg")}}" alt="">
                        <h4>Lorem ipsum dolor. </h4>
                    </div>
                    <div class="other-satellite">
                        <img src="{{asset("media/Satellite/CRRESS.jpg")}}" alt="">
                        <h4>Lorem ipsum dolor. </h4>
                    </div>

                </div>
            </div>
            <i class="fa-thin fa-arrow-right-long"></i>
        </div>

        </div>
    </section>
    <canvas></canvas>
@endsection
@section('scripts')
    <script>
        function count(){
            $('.count').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).data('value')
                }, {
                    duration: 5000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(this.Counter.toFixed(0));
                    }
                });
            });
        }
        $(window).scroll(function (event) {
            if($(window).scrollTop()>0){
                count();
            }
        })
    </script>

@endsection
