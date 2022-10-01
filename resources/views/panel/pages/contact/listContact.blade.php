@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 style="margin-left: auto; margin-right: auto; width: 10em" class="pageheader-title">İletişim Mesajları</h2>
        </div>
        <div class=" clearfix">
            <table id="event-table" class="display nowrap dataTable cell-border" style="width:100%">
                <thead>
                <tr>
                    <th>ID </th>
                    <th>Başlık </th>
                    <th>İsim</th>
                    <th>Soyisim</th>
                    <th>Email</th>
                    <th>Okundu</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>
    </div>


    {{--Buna basılınca açılır id ve class önemli nereye tıklanınca açılmasını istiyorsan oraya id ve class vermelisin--}}
    <a href="" id="edit-profile-image" class="open-modal"></a>

    {{--butona verdiğin idnin sonuna "-modal" ekleyerek modala id verme lisin --}}
    <div id="edit-profile-image-modal" class="modal-space small">
        <div class="my-modal">
            <div class="modal-header">
                <h4 class="modal-title" id="title">

                </h4>
                <div class="modal-close">
                    <i class="fas fa-times"></i>
                </div>
            </div>

                <div class="modal-body">
                    <h6 class="modal-content" id="content">

                    </h6>

                </div>

                <div>
                    <a id="time"></a>
                </div>

                <div class="modal-footer">
                    <a class="modal-close">Kapat</a>
                </div>


        </div>
    </div>

@endsection

@section('scripts')
    <script>
        function openmodal(id){
            $.ajax({
                type: 'GET',
                url: '{{route('contact_get_modal')}}',
                data: {id: id},
                success: function (data) {
                    $('#event-table').DataTable().ajax.reload();
                    $('#edit-profile-image-modal').addClass('active');

                    document.getElementById('title').innerHTML=data.title;
                    document.getElementById('content').innerHTML=data.content;
                    document.getElementById('time').innerHTML='Mesaj Tarihi:'+data.time;

                },
                error: function (data) {
                    var errors = '';
                    for (datas in data.responseJSON.errors) {
                        errors += data.responseJSON.errors[datas] + '\n';
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Başarısız',

                        html: 'Bilinmeyen bir hata oluştu.\n' + errors,
                    });
                }
            });

        }
    </script>

    <!-- #region datatables files -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <!-- #endregion -->
    <script>
        $(function() {
            $('#event-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('contact_fetch') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'title' },
                    { data: 'name', name: 'name' },
                    { data: 'surname', name: 'surname' },
                    { data: 'email', name: 'email' },
                    { data: 'okundu', name: 'okundu' },
                    { data: 'action', name: 'action' }
                ]
            });
        });
    </script>

    <script>
        $(".menuExperience").addClass("from");
    </script>
@endsection
