@extends("front.layouts.app")
@section("content")
    <section class="entrance">
        <div class="entrance-img">
            <img src="{{asset("media/entrance.png")}}" alt="">
            <div></div>
        </div>
        <div class="entrance-inner nasaContainer">
            <div class="entrance-left">
                <h3 class="linearText">Nasa Space Exploration</h3>
                <p>It is now easier to access all satellites
                    launched with the Satellite Web Service...</p>
            </div>
            <div class="entrance-right">
                <img src="{{asset("media/entrance-inner.png")}}" alt="">
            </div>
        </div>
    </section>
    <section class="datas nasaContainer">
        @if(isset($future_satellites_count))
            @if(isset($past_satellites_count))
                @if(isset($all_satellites_count))

                    <div class="data">
                        <h4 class="linearText">Past Satellites</h4>

                        <h3 class="count" data-value="{{$past_satellites_count}}"></h3>
                    </div>
                    <div class="big data">
                        <h4 class="linearText">ALL Satellites</h4>
                        <h3 class="count" data-value="{{$all_satellites_count}}"></h3>
                    </div>
                    <div class="data">
                        <h4 class="linearText">Future Satellites</h4>
                        <h3 class="count" data-value="{{$future_satellites_count}}"></h3>
                    </div>

                @endif
            @endif
        @endif
    </section>
    <section class="future-satellites nasaContainer">
        <h1>FUTURE SATELLITES</h1>

        <div class="future-satellites-top">
            @if(isset($future_satellites))

                <div class="future-satellites-left">

                    <div class="future-satellites-earth">
                        <img src="{{asset("media/earth.gif")}}" alt="">
                    </div>
                    <div class="satellites">
                        @foreach($future_satellites as $key=>$fs)
                            <div class="satellite satellite-{{$fs->id}} @if($key==0)active @endif">
                                <img src="{{asset($fs->image)}}" alt="">
                            </div>

                        @endforeach


                    </div>

                    @endif
                </div>

                <div class="future-satellites-right">
                    @foreach($future_satellites as $key=>$fs)

                        <div class="satellite-text satellite-{{$fs->id}} @if($key==0) active @endif">
                            <h4 class="linearText">{{$fs->name}}</h4>
                            <div>
                                <p><b>Status :</b>{{$fs->status}}</p>
                                <p><b>Mission Category :</b>{{$fs->category}}</p>
                                <p><b>Launch Date :</b>{{$fs->launch_date}}</p>
                                <p><b>Launch Location :</b>{{$fs->launch_location}}</p>
                            </div>
                        </div>

                    @endforeach

                </div>
        </div>

        <div class="other-satellites-slider">
            <i class="fa-thin fa-arrow-left-long"></i>
            <div class="other-satellites-slides">
                <div class="other-satellites">
                    @foreach($future_satellites as $fs)

                        <div class="other-satellite" id="satellite-{{$fs->id}}">
                            @if(isset($fs->image2))
                                <img src="{{asset($fs->image2)}}" alt="">
                            @else
                                <img src="{{asset($fs->image)}}" alt="">
                            @endif
                            <h4>{{$fs->name}} </h4>
                        </div>

                    @endforeach
                </div>
            </div>
            <i class="fa-thin fa-arrow-right-long"></i>
        </div>
    </section>
    <section class="astro-planets nasaContainer">
        <img src="{{asset("media/astro.png")}}" alt="">
        <div class="astro-planets-left">
            <div>
                <img src="{{asset("media/jupiter.png")}}" alt="">
                <p>The number of Starlink satellites launched into orbit has reached 2 thousand 957.</p>
            </div>
            <div>
                <img src="{{asset("media/mars.png")}}" alt="">
                <p>NASA scientists are easier to find...</p>
            </div>
        </div>
        <div class="astro-planets-right">
            <div>
                <img src="{{asset("media/neptun.png")}}" alt="">
                <p>More fun to access satellite information...</p>
            </div>
            <div>
                <img src="{{asset("media/uranus.png")}}" alt="">
                <p>More fun to access satellite information...</p>
            </div>
            <div>
                <img src="{{asset("media/venus.png")}}" alt="">
            </div>
        </div>
    </section>
    <section class="general-statistics">
        <div class="general-statistics-inner">
            <div class="general-statistics-left">
                @if(isset($all_satellites_count))
                    <h3>General Statistics </h3>
                    <p>All Satellites</p>
                    <h2>{{$all_satellites_count}}</h2>
                @endif
                <div class="statistics-inner">
                    <i class="fa-regular fa-user-astronaut"></i>

                    <div>
                        @if(isset($scientist_count))
                            <span>SCIENTIST</span>
                            <h4>{{$scientist_count}}</h4>
                        @endif

                    </div>
                </div>
                <div class="statistics-inner">
                    <i class="fa-sharp fa-solid fa-flag"></i>
                    <div>
                        @if(isset($launchpad))
                            <span>COUNTRIES</span>
                            <h4>{{$launchpad}}</h4>
                        @endif
                    </div>
                </div>
            </div>
            <div class="general-statistics-right">
                <img src="{{asset("media/handearth.png")}}" alt="">
                <div class="launch-pad-on-map">
                    <div class="launch-pad-on-map-inner">
                        <div class="us-launch">
                            <div class="launch-pad ">
                                <div class="launch-icos">
                                    <i class="fa-regular fa-rocket-launch"></i>
                                    <i class="fa-regular fa-circle-dot"></i>
                                </div>
                            </div>
                            <div class="launch-pad-detail">
                                <div>
                                    <img src="{{asset("media/ads.jpg")}}" alt="">
                                    <h3>Vandenberg Air Force Base, CA</h3>
                                </div>
                                <div>
                                    <img src="{{asset("media/das.jpg")}}" alt="">
                                    <h3>NASA's Kennedy Space Center</h3>
                                </div>
                                <div>
                                    <img src="{{asset("media/sad.jpg")}}" alt="">
                                    <h3>Cape Canaveral, FL</h3>
                                </div>
                                <i class="fa-solid fa-caret-right"></i>
                            </div>
                        </div>
                        <div class="fr-launch">
                            <div class="launch-pad">
                                <div class="launch-icos">
                                    <i class="fa-regular fa-rocket-launch"></i>
                                    <i class="fa-regular fa-circle-dot"></i>
                                </div>
                            </div>
                            <div class="launch-pad-detail">
                                <div>
                                    <img src="{{asset("media/ads.jpg")}}" alt="">
                                    <h3>Vandenberg Air Force Base, CA</h3>
                                </div>
                                <i class="fa-solid fa-caret-right"></i>
                            </div>
                        </div>
                        <div class="jp-launch">
                            <div class="launch-pad">
                                <div class="launch-icos">
                                    <i class="fa-regular fa-rocket-launch"></i>
                                    <i class="fa-regular fa-circle-dot"></i>
                                </div>
                            </div>
                            <div class="launch-pad-detail">
                                <div>
                                    <img src="{{asset("media/sad.jpg")}}" alt="">
                                    <h3>Cape Canaveral, FL</h3>
                                </div>
                                <i class="fa-solid fa-caret-right"></i>
                            </div>
                        </div>
                        <div class="rus-launch">
                            <div class="launch-pad">
                                <div class="launch-icos">
                                    <i class="fa-regular fa-rocket-launch"></i>
                                    <i class="fa-regular fa-circle-dot"></i>
                                </div>
                            </div>
                            <div class="launch-pad-detail">
                                <div>
                                    <img src="{{asset("media/das.jpg")}}" alt="">
                                    <h3>NASA's Kennedy Space Center</h3>
                                </div>
                                <i class="fa-solid fa-caret-right"></i>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        var check =true
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
            this.check = false;
        }
        $(window).scroll(function (event) {
            if($(window).scrollTop()>0 && check){
                count();
            }
        })
    </script>
    <script>
        $(".other-satellites .other-satellite").click(function (event) {
            $(".satellites .satellite").removeClass("active");
            $(".future-satellites-right .satellite-text").removeClass("active");

            $("." + event.currentTarget.id).addClass("active")
        })
        $(".other-satellites-slider .fa-arrow-left-long").click(function () {

        })

        var entraceSlider = $(".other-satellites-slider").width();
        var entracePhotos = $(".other-satellites-slider .other-satellites").width();
        var left = 240;
        var topLeft = 0;
        $(".other-satellites-slider .fa-arrow-right-long").click(function(){
            if((entracePhotos - entraceSlider + topLeft) > left){
                topLeft -= left;
            }
            else{
                topLeft -= entracePhotos - entraceSlider + topLeft;
            }
            $(".other-satellites-slider .other-satellites").css("left",topLeft)
        })
        $(".other-satellites-slider .fa-arrow-left-long").click(function(){
            if(!topLeft){

            }
            else if(topLeft<=-left){
                topLeft += left;
            }
            else{
                console.log(topLeft)
                topLeft += -topLeft;
            }
            $(".other-satellites-slider .other-satellites").css("left",topLeft)
        })
    </script>
@endsection
