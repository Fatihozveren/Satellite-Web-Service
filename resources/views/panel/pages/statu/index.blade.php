@extends("panel.layouts.app")
@section("content")
    <div class="modal fade bd-example-modal-lg" style="overflow: scroll" id="update_status_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E5E8E8;">
                    <h5 class="modal-title" style="font-weight: bold; font-size: 25px !important; ">Status
                        Update</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #F8F9F9; padding: 30px;">
                    <form id="update_statu_post" method="post">

                        <div class="row mt-3 mb-4">
                            <div class="form-group mb-4 col-12">
                                <label class="mb-1" for="statu_name" style="text-decoration: underline;">Statu
                                    Name </label>
                                <input type="text" name="statu_name" id="nameUpdate" class="form-control">
                            </div>

                        </div>

                        <input type="hidden" name="updateId" id="updateId">

                    </form>
                </div>
                <div class="modal-footer" style="background-color: #E5E8E8;">
                    <button type="button" class="btn btn-primary" onclick="updateStatuPost()">Kaydet</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bd-example-modal-lg" style="overflow: scroll" id="add-statu-modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E5E8E8;">
                    <h5 class="modal-title" style="font-weight: bold; font-size: 25px !important; ">Statu
                        Create</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #F8F9F9;">
                    <form id="create_statu">

                        <div class="row mt-3 mb-4">
                            <div class="form-group mb-4 col-12">
                                <label class="mb-1" for="statu_name" style="text-decoration: underline;">Statu
                                    Name </label>
                                <input type="text" name="statu_name" id="statu_name" class="form-control">

                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="background-color: #E5E8E8;">
                    <button type="button" onclick="createStatu()" class="btn btn-primary">Kaydet</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                </div>
            </div>
        </div>
    </div>

    <div class="pdf container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Statu List</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card p-5">
                    <table id="statuTable" class="display nowrap dataTable cell-border" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Statu Name</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Statu Name</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="card-footer clearfix">
                        <button type="button" class="btn btn-info float-left" onclick="createModelOpen()"
                                data-bs-toggle="#add-statu-modal"><i class="fas fa-plus"></i>Statu Create
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script type="text/javascript">
        function createModelOpen() {
            $('#add-statu-modal').modal("toggle");
        }

        function createStatu() {
            var formData = new FormData(document.getElementById('create_statu'));

            $.ajax({
                type: 'POST',
                url: '{{route('statu.create')}}',
                data: formData,
                headers: {'X-CSRF-TOKEN': "{{csrf_token()}} "},
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                success: function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'Successful',
                        html: 'Statu Created!'
                    });

                    var elements = document.getElementById("create_statu").elements;

                    for (var i = 0, element; element = elements[i++];) {
                        element.value = "";
                    }
                    $('#add-statu-modal').modal("toggle");
                    dataTable.ajax.reload();

                },
                error: function (data) {
                    var errors = '';
                    for (datas in data.responseJSON.errors) {
                        errors += data.responseJSON.errors[datas] + '\n';
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Unsuccessful',

                        html: 'An unknown error has occurred.\n' + errors,
                    });
                }
            });


        }

        function updateStatuPost() {

            var formData = new FormData(document.getElementById('update_statu_post'));
            $.ajax({
                type: 'POST',
                url: '{{route('statu.update')}}',
                dataType: "json",
                data: formData,
                headers: {'X-CSRF-TOKEN': "{{csrf_token()}} "},
                contentType: false,
                cache: false,
                processData: false,
                success: function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'Successful',
                        html: 'Update Successful!'
                    });

                    var elements = document.getElementById("update_statu_post").elements;

                    for (var i = 0, element; element = elements[i++];) {
                        element.value = "";
                    }

                    $('#update_status_modal').modal("toggle");

                    dataTable.ajax.reload(null, false);
                    dataTable.fnStandingRedraw();
                },
                error: function (data) {
                    var errors = '';
                    for (datas in data.responseJSON.errors) {
                        errors += data.responseJSON.errors[datas] + '\n';
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Unsuccessful',

                        html: 'An unknown error has occurred.\n' + errors,
                    });
                }
            });
        }


        function updateStatu(id) {

            var category_name = $('#nameUpdate');

            $.ajax({
                type: 'GET',
                url: '{{route('statu.get')}}',
                data: {id: id},
                success: function (data) {

                    category_name.val(data.category_name);

                    $('#updateId').val(id);

                    $('#update_status_modal').modal("toggle");

                },
                error: function (data) {
                    var errors = '';
                    for (datas in data.responseJSON.errors) {
                        errors += data.responseJSON.errors[datas] + '\n';
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Unsuccessful',

                        html: 'An unknown error has occurred.\n' + errors,
                    });
                }
            });
        }

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                }
            });
        });

        var dataTable = null;

        dataTable = $('#statuTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.21/i18n/Turkish.json'
            },
            order: [
                [0, 'ASC']
            ],
            processing: true,
            serverSide: true,
            scrollX: true,
            scrollY: true,
            ajax: '{!! route('statu.fetch') !!}',
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'update'},
                {data: 'delete'},
            ]
        });

        function deleteStatu(id) {
            Swal.fire({
                icon: "warning",
                title: "Are you sure?",
                html: "Are you sure you want to delete?",
                showConfirmButton: true,
                showCancelButton: true,
                confirmButtonText: "Onayla",
                cancelButtonText: "İptal",
                cancelButtonColor: "#e30d0d"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': "{{csrf_token()}} "},
                        url: '{!! route('statu.delete') !!}',
                        data: {
                            id: id
                        },
                        dataType: "json",
                        success: function () {
                            Swal.fire({
                                icon: "success",
                                title: "Successful",
                                showConfirmButton: true,
                                confirmButtonText: "OK"
                            });
                            dataTable.ajax.reload();
                        },
                        error: function () {
                            Swal.fire({
                                icon: "error",
                                title: "Error!",
                                html: "<div id=\"validation-errors\"></div>",
                                showConfirmButton: true,
                                confirmButtonText: "OK"
                            });
                            $.each(data.responseJSON.errors, function (key, value) {
                                $('#validation-errors').append('<div class="alert alert-danger">' + value + '</div>');
                            });
                        }
                    });
                }
            });
        }

    </script>
@endsection

@section('scripts')
    <script type="text/javascript">
        setTimeout(()=>{
            $("#sidebar-menu-one").addClass("show")
        },1000)
    </script>
@endsection
