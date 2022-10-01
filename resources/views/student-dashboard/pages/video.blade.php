@extends("student-dashboard.layout.app")
@section("title2") Lorem ipsum dolor sit amet, consectetur adipisicing elit.@endsection
@section("title1")Hafta 1 @endsection
@section("content")
    <div class="video-container">
        <iframe src="{{$week->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h2>{{$week->title}}.</h2>
        <p>{{$week->description}}</p>
        <a href="" class="complete-button">Tamamladım</a>
    </div>
@endsection
@section("js")
    <script>
        $("#aboutFrom").addClass("from")
    </script>
@endsection
