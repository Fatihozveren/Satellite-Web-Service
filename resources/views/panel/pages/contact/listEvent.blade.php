@extends("panel.layouts.app")
<style>
    .textModal{
        font-size: 16px;
        margin-bottom: 10px;
    }
    h5.textModal {
        font-weight: 600;
        font-size: 18px;
        margin: 15px 0;
    }
    .textModal span{
        font-weight: 600;
        margin-right: 5px;
    }
</style>
@section("content")
    <div >
        <div class="page-header">
            <h2 style="margin-left: auto; margin-right: auto; width: 10em" class="pageheader-title">Etkinlik Başvuruları</h2>
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
                    <h5 class="textModal" id="contentdetail">

                    </h5>
                    <p class="textModal" id="event_id"></p>
                    <p class="textModal" id="event_title"></p>
                    <p class="textModal" id="time"></p>
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
                url: '{{route('event_get_modal')}}',
                data: {id: id},
                success: function (data) {
                    $('#event-table').DataTable().ajax.reload();
                    $('#edit-profile-image-modal').addClass('active');

                    document.getElementById('title').innerHTML=data.title;
                    document.getElementById('contentdetail').innerHTML=data.content;
                    document.getElementById('event_id').innerHTML='<span>Etkinlik ID:</span>'+ data.event_id;
                    document.getElementById('event_title').innerHTML='<span>Etkinlik ADI:</span>'+data.event;
                    document.getElementById('time').innerHTML='<span>Mesaj Tarihi:</span>'+data.time;

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
                ajax: '{!! route('contact_event_fetch') !!}',
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
