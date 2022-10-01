@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 style="margin-left: auto; margin-right: auto; width: 8em" class="pageheader-title"> Etkinlik Listesi</h2>
        </div>
        <div class=" clearfix">
            <table id="event-table" class="display nowrap dataTable cell-border" style="width:100%">
                <thead>
                <tr>
                    <th>ID </th>
                    <th>Başlık </th>
                    <th>Eğitmen</th>
                    <th>Etkinlik Tarihi</th>
                    <th>Sıra</th>
                    <th>Aktiflik</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <a href="{{route('add_event')}}" class="btn green">Etkinlik Oluştur</a>

        </div>
    </div>
@endsection

@section('scripts')

    <!-- #region datatables files -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <!-- #endregion -->
    <script>
        $(function() {
            $('#event-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('event_fetch') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'title' },
                    { data: 'teacher', name: 'teacher' },
                    { data: 'date', name: 'date' },
                    { data: 'order', name: 'order' },
                    { data: 'active', name: 'active' },
                    { data: 'action', name: 'action' }
                ]
            });
        });
    </script>

    <script>
        $(".menuExperience").addClass("from");
    </script>
@endsection
