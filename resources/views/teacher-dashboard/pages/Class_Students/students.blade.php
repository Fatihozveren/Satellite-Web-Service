@extends("teacher-dashboard.layout.app")
@section("title1"){{\Illuminate\Support\Facades\Auth::user()->name}} @endsection
@section("title2") Robot Adam Eğitmen Paneline Hoşgeldin!@endsection
@section("content")




    <div class="video-container">
        <div class="page-header">
            <h2 style="margin-left: auto; margin-right: auto; width: 8em" class="pageheader-title"> Öğrenci Listesi</h2>
            <a id="table" class="open-modal complete-button">Table Modal</a>
            <a id="form" class="open-modal complete-button">Form Modal</a>
        </div>
        <div class="table-wrapper clearfix">
            <table id="students-table" class="display nowrap dataTable cell-border fl-table" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Adı-Soyadı</th>
                    <th>Email</th>
                    <th>Telefon Numarası</th>
                    <th>Doğum Tarihi</th>
                    <th>Aktiflik</th>
                    <th>Eğitim Durumu</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div id="table-modal" class="modal-space large">
            <div class="my-modal">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Modal Fotoğrafı
                    </h4>
                    <div class="modal-close">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <table id="students-table" class="display nowrap dataTable cell-border fl-table" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Adı-Soyadı</th>
                            <th>Email</th>
                            <th>Telefon Numarası</th>
                            <th>Doğum Tarihi</th>
                            <th>Aktiflik</th>
                            <th>Eğitim Durumu</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>1</th>
                            <th>Yusuf Çağlar Aksoy</th>
                            <th>yusufcaglar_Aksoy@hotmail.com</th>
                            <th>0555 555 5555</th>
                            <th>27/03/2001</th>
                            <th>Aktif</th>
                            <th>Lisans</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>Yusuf Çağlar Aksoy</th>
                            <th>yusufcaglar_Aksoy@hotmail.com</th>
                            <th>0555 555 5555</th>
                            <th>27/03/2001</th>
                            <th>Aktif</th>
                            <th>Lisans</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>Yusuf Çağlar Aksoy</th>
                            <th>yusufcaglar_Aksoy@hotmail.com</th>
                            <th>0555 555 5555</th>
                            <th>27/03/2001</th>
                            <th>Aktif</th>
                            <th>Lisans</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>Yusuf Çağlar Aksoy</th>
                            <th>yusufcaglar_Aksoy@hotmail.com</th>
                            <th>0555 555 5555</th>
                            <th>27/03/2001</th>
                            <th>Aktif</th>
                            <th>Lisans</th>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">
                    <a class="" id="profilePicKaydet">Gönder</a>
                    <a class="modal-close">Kapat</a>
                </div>
            </div>
        </div>
        <div id="form-modal" class="modal-space large">
            <div class="my-modal">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Modal Fotoğrafı
                    </h4>
                    <div class="modal-close">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6 user-password inpgroup">
                                <input type="text" name="" >
                                <span class="bar"></span>
                                <label>İnput 1</label>
                            </div>
                            <div class="col-md-6 user-password inpgroup">
                                <input type="text" name="" >
                                <span class="bar"></span>
                                <label>İnput 2</label>
                            </div>
                            <div class="col-md-6 user-password inpgroup textarea">
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                                <span class="bar"></span>
                                <label>İnput 2</label>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <a class="" id="profilePicKaydet">Gönder</a>
                    <a class="modal-close">Kapat</a>
                </div>
            </div>
        </div>
    </div>


@endsection
@section("js")
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <!-- #endregion -->
    <script>
        $(function() {
            $('#students-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('education.classes.students.fetch',$id) !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'fullname', name: 'fullname' },
                    { data: 'email', name: 'email' },
                    { data: 'phone_number', name: 'phone_number' },
                    { data: 'birthday', name: 'birthday' },
                    { data: 'is_active', name: 'is_active' },
                    {data:  'educations_detail', name:'educations_detail'},


                ]
            });
        });
    </script>
    <script>
        $("#aboutFrom").addClass("from")
    </script>
@endsection
