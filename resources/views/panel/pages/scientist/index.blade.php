@extends("panel.layouts.app")
@section("content")
    <div class="modal fade bd-example-modal-lg" style="overflow: scroll" id="update_scientists_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E5E8E8;">
                    <h5 class="modal-title" style="font-weight: bold; font-size: 25px !important; ">Scientist
                        Update</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #F8F9F9; padding: 30px;">
                    <form id="update_scientist_post" method="post">

                        <div class="row mt-3 mb-4">
                            <div class="form-group mb-4 col-12">
                                <label class="mb-1" for="scientist_name" style="text-decoration: underline;">Scientist
                                    Name </label>
                                <input type="text" name="scientist_name" id="nameUpdate" class="form-control">

                                <label class="mb-1" for="scientist_surname" style="text-decoration: underline;">Scientist
                                    Surname </label>
                                <input type="text" name="scientist_surname" id="surnameUpdate" class="form-control">

                                <label class="mb-1" for="description" style="text-decoration: underline;">Scientist
                                    Description </label>
                                <textarea type="text" name="description" id="descriptionUpdate" class="form-control">
                                </textarea>
                            </div>

                        </div>

                        <input type="hidden" name="updateId" id="updateId">

                    </form>
                </div>
                <div class="modal-footer" style="background-color: #E5E8E8;">
                    <button type="button" class="btn btn-primary" onclick="updateScientistPost()">Save</button>
                    <button type="button" class="btn btn-secondary" onclick="resetModal()" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bd-example-modal-lg" style="overflow: scroll" id="add-scientist-modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E5E8E8;">
                    <h5 class="modal-title" style="font-weight: bold; font-size: 25px !important; ">Scientist
                        Create</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #F8F9F9;">
                    <form id="create_scientist">

                        <div class="row mt-3 mb-4">
                            <div class="form-group mb-4 col-12">
                                <label class="mb-1" for="scientist_name" style="text-decoration: underline;">Scientist
                                    Name </label>
                                <input type="text" name="scientist_name" id="scientist_name" class="form-control">

                                <label class="mb-1" for="scientist_surname" style="text-decoration: underline;">Scientist
                                    Surname </label>
                                <input type="text" name="scientist_surname" id="scientist_surname" class="form-control">

                                <label class="mb-1" for="description" style="text-decoration: underline;">Scientist
                                    Description </label>
                                <textarea type="text" name="description" id="description" class="form-control">
                                </textarea>

                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="background-color: #E5E8E8;">
                    <button type="button" onclick="createScientist()" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" onclick="resetModal()" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="pdf container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Scientist List</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card p-5">
                    <table id="scientistTable" class="display nowrap dataTable cell-border" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Scientist Name</th>
                            <th>Scientist Surname</th>
                            <th>Description</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Scientist Name</th>
                            <th>Scientist Surname</th>
                            <th>Description</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="card-footer clearfix">
                        <button type="button" class="btn btn-info float-left" onclick="createModelOpen()"
                                data-bs-toggle="#add-scientist-modal"><i class="fas fa-plus"></i>Scientist Create
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script type="text/javascript">
        function createModelOpen() {
            $('#add-scientist-modal').modal("toggle");
        }

        function createScientist() {
            var formData = new FormData(document.getElementById('create_scientist'));

            $.ajax({
                type: 'POST',
                url: '{{route('scientist.create')}}',
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
                        html: 'Scientist Created!'
                    });

                    var elements = document.getElementById("create_scientist").elements;

                    for (var i = 0, element; element = elements[i++];) {
                        element.value = "";
                    }
                    $('#add-scientist-modal').modal("toggle");
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

        function updateScientistPost() {

            var formData = new FormData(document.getElementById('update_scientist_post'));
            $.ajax({
                type: 'POST',
                url: '{{route('scientist.update')}}',
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

                    var elements = document.getElementById("update_scientist_post").elements;

                    for (var i = 0, element; element = elements[i++];) {
                        element.value = "";
                    }

                    $('#update_scientists_modal').modal("toggle");

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


        function updateScientist(id) {

            var scientist_name = $('#nameUpdate');
            var scientist_surname = $('#surnameUpdate');
            var description = $('#descriptionUpdate');

            $.ajax({
                type: 'GET',
                url: '{{route('scientist.get')}}',
                data: {id: id},
                success: function (data) {

                    scientist_name.val(data.name);
                    scientist_surname.val(data.surname);
                    description.val(data.description);

                    $('#updateId').val(id);

                    $('#update_scientists_modal').modal("toggle");

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

        dataTable = $('#scientistTable').DataTable({
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
            ajax: '{!! route('scientist.fetch') !!}',
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'surname'},
                {data: 'description'},
                {data: 'update'},
                {data: 'delete'},
            ]
        });

        function deleteScientist(id) {
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
                        url: '{!! route('scientist.delete') !!}',
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
    <script>
        function resetModal() {
            document.getElementById("create_scientist").reset();
        }
    </script>
@endsection
