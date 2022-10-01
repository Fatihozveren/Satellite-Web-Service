@extends("teacher-dashboard.layout.app")
@section("title1"){{\Illuminate\Support\Facades\Auth::user()->name}} @endsection
@section("title2") Robot Adam Eğitmen Paneline Hoşgeldin!@endsection
@section("content")




    <div class="video-container">
        <div class="page-header">
            <h2 style="margin-left: auto; margin-right: auto; width: 8em" class="pageheader-title"> İstek Listesi</h2>
        </div>
        <div class="table-wrapper clearfix">
            <table id="class-table" class="display nowrap dataTable cell-border fl-table" style="width:100%">
                <thead>
                <tr>
                    <th>İsim-Soyisim</th>
                    <th>Sınıf</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student['student']->getUser->name}}</td>
                        <td>{{$student['class']}}</td>
                        <td><button class="btn btn-primary">İstekleri Görüntüle(Modal Gelcek)</button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
@section("js")
    <script>
        $("#aboutFrom").addClass("from")
    </script>
@endsection
