@extends("teacher-dashboard.layout.app")
@section("title2") Lorem ipsum dolor sit amet, consectetur adipisicing elit.@endsection
@section("title1") @endsection
@section("content")
    <div class="video-container">
        <ul class="weeks">
            @php
                $lock = false;
            @endphp
            <li @if(!$lock)  class="lock"  @endif><a @if($lock) href="" @endif ><b>Hafta 1 ,</b><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></a></li>
            <li><a href="" class="lock"><b>Hafta 1 ,</b><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></a></li>
            <li><a href=""><b>Hafta 1 ,</b><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></a></li>
            <li><a href=""><b>Hafta 1 ,</b><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></a></li>
            <li><a href=""><b>Hafta 1 ,</b><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></a></li>
            <li><a href=""><b>Hafta 1 ,</b><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></a></li>
            <li><a href=""><b>Hafta 1 ,</b><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></a></li>
        </ul>
    </div>
@endsection
@section("js")
    <script>
        $("#aboutFrom").addClass("from")
    </script>
@endsection
