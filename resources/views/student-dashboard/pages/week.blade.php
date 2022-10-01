@extends("student-dashboard.layout.app")
@section("title2") Lorem ipsum dolor sit amet, consectetur adipisicing elit.@endsection
@section("title1") @endsection
@section("content")
    <div class="video-container">
        <ul class="weeks">
            @php
                $lock = true;
            @endphp
            @foreach($weeks as $week)
                <li @if(!$lock)  class="lock"  @endif><a @if($lock) href="{{route('student.video',$week->id)}}"@endif ><b>Hafta{{$week->week}} </b><span> {{$week->title}}</span></a></li>
            @endforeach
        </ul>
    </div>
@endsection
@section("js")
    <script>
        $("#aboutFrom").addClass("from")
    </script>
@endsection
