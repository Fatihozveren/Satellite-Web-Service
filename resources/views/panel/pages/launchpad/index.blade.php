@extends("panel.layouts.app")
@section("content")
    <div class="modal fade bd-example-modal-lg" style="overflow: scroll" id="update_launchpads_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E5E8E8;">
                    <h5 class="modal-title" style="font-weight: bold; font-size: 25px !important; ">LaunchPad
                        Update</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #F8F9F9; padding: 30px;">
                    <form id="update_launchpad_post" method="post">

                        <div class="row mt-3 mb-4">
                            <div class="form-group mb-4 col-12">
                                <label class="mb-1" for="launchpad_name" style="text-decoration: underline;">LaunchPads
                                    Name </label>
                                <input type="text" name="launchpad_name" id="nameUpdate" class="form-control">

                                <label class="mb-1" for="location" style="text-decoration: underline;">LaunchPads
                                    Location </label>
                                <input type="text" name="location" id="locationUpdate" class="form-control">
                            </div>

                        </div>

                        <input type="hidden" name="updateId" id="updateId">

                    </form>
                </div>
                <div class="modal-footer" style="background-color: #E5E8E8;">
                    <button type="button" class="btn btn-primary" onclick="updateLaunchpadPost()">Kaydet</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bd-example-modal-lg" style="overflow: scroll" id="add-launchpad-modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E5E8E8;">
                    <h5 class="modal-title" style="font-weight: bold; font-size: 25px !important; ">LaunchPad
                        Create</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #F8F9F9;">
                    <form id="create_launchpad">

                        <div class="row mt-3 mb-4">
                            <div class="form-group mb-4 col-12">
                                <label class="mb-1" for="launchpad_name" style="text-decoration: underline;">LaunchPad
                                    Name </label>
                                <input type="text" name="launchpad_name" id="launchpad_name" class="form-control">

                                <label class="mb-1" for="location" style="text-decoration: underline;">LaunchPad
                                    Location </label>
                                <input type="text" name="location" id="location" class="form-control">

                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="background-color: #E5E8E8;">
                    <button type="button" onclick="createLaunchpad()" class="btn btn-primary">Kaydet</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                </div>
            </div>
        </div>
    </div>

    <div class="pdf container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Launchpad List</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card p-5">
                    <table id="launchpadTable" class="display nowrap dataTable cell-border" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Launchpad Name</th>
                            <th>Launchpad Location</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Launchpad Name</th>
                            <th>Launchpad Location</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="card-footer clearfix">
                        <button type="button" class="btn btn-info float-left" onclick="createModelOpen()"
                                data-bs-toggle="#add-launchpad-modal"><i class="fas fa-plus"></i>Launchpad Create
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script type="text/javascript">
        function createModelOpen() {
            $('#add-launchpad-modal').modal("toggle");
        }

        function createLaunchpad() {
            var formData = new FormData(document.getElementById('create_launchpad'));

            $.ajax({
                type: 'POST',
                url: '{{route('launchpad.create')}}',
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
                        html: 'Launchpad Created!'
                    });

                    var elements = document.getElementById("create_launchpad").elements;

                    for (var i = 0, element; element = elements[i++];) {
                        element.value = "";
                    }
                    $('#add-launchpad-modal').modal("toggle");
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

        function updateLaunchpadPost() {

            var formData = new FormData(document.getElementById('update_launchpad_post'));
            $.ajax({
                type: 'POST',
                url: '{{route('launchpad.update')}}',
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

                    var elements = document.getElementById("update_launchpad_post").elements;

                    for (var i = 0, element; element = elements[i++];) {
                        element.value = "";
                    }

                    $('#update_launchpads_modal').modal("toggle");

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


        function updateLaunchpad(id) {

            var launchpad_name = $('#nameUpdate');
            var location = $('#locationUpdate');

            $.ajax({
                type: 'GET',
                url: '{{route('launchpad.get')}}',
                data: {id: id},
                success: function (data) {

                    launchpad_name.val(data.launchpad_name);
                    location.val(data.location);

                    $('#updateId').val(id);

                    $('#update_launchpads_modal').modal("toggle");

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

        dataTable = $('#launchpadTable').DataTable({
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
            ajax: '{!! route('launchpad.fetch') !!}',
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'location'},
                {data: 'update'},
                {data: 'delete'},
            ]
        });

        function deleteLaunchpad(id) {
            Swal.fire({
                icon: "warning",
                title: "Are you sure?",
                html: "Are you sure you want to delete?",
                showConfirmButton: true,
                showCancelButton: true,
                confirmButtonText: "Approve",
                cancelButtonText: "Cancel",
                cancelButtonColor: "#e30d0d"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': "{{csrf_token()}} "},
                        url: '{!! route('launchpad.delete') !!}',
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
