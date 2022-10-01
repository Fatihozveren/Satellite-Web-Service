@extends("teacher-dashboard.layout.app")
@section("title1"){{\Illuminate\Support\Facades\Auth::user()->name}} @endsection
@section("title2") Robot Adam Eğitmen Paneline Hoşgeldin!@endsection
@section("content")




    <div class="video-container">
        <div class="page-header">
            <h2 style="margin-left: auto; margin-right: auto; width: 8em" class="pageheader-title"> Sınıf Listesi</h2>
        </div>
        <div class="table-wrapper clearfix">
            <table id="class-table" class="display nowrap dataTable cell-border fl-table" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Kurum Adı</th>
                    <th>Sınıf</th>
                    <th>Eğitim</th>
                    <th>Mevcut</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>


@endsection
@section("js")
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <!-- #endregion -->
    <script>
        $(function() {
            $('#class-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('education.class.fetch') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'department_name', name: 'department_name' },
                    { data: 'class_name', name: 'class_name' },
                    { data: 'education', name: 'education' },
                    { data: 'member', name: 'member' },
                 //   { data: 'action', name: 'action' },

                ]
            });
        });
    </script>
    <script>
        $("#aboutFrom").addClass("from")
    </script>
@endsection
