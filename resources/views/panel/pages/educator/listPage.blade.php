@extends("panel.layouts.app")

@section("content")

    <div >
        <div class="page-header">
            <h2 style="margin-left: auto; margin-right: auto; width: 8em" class="pageheader-title">Eğitmen Listesi</h2>
        </div>
        <div class=" clearfix">
            <table id="educator-table" class="display nowrap dataTable cell-border" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>İsim</th>
                    <th>Email</th>
                    <th>Sıralama</th>
                    <th>Görüntülenme</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <a href="{{route('educator_add')}}" class="btn green">Eğitmen Oluştur</a>

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
            $('#educator-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('educator_fetch') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
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
