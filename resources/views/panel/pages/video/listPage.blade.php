@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 style="margin-left: auto; margin-right: auto; width: 8em" class="pageheader-title"> Video Listesi</h2>
        </div>
        <div class=" clearfix">
            <table id="video-table" class="display nowrap dataTable cell-border" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Yayınlayan </th>
                    <th>Başlık</th>
                    <th>Yayınlanma Tarihi</th>
                    <th>Aktiflik</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <a href="{{route('add_video')}}" class="btn green">Video Oluştur</a>

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
            $('#video-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('video_fetch') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'owner', name: 'owner' },
                    { data: 'title', name: 'title' },
                    { data: 'date', name: 'date' },
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
