@extends("panel.layouts.app")
@section("content")
    <div class="modal fade bd-example-modal-lg" style="overflow: scroll" id="update_abouts_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E5E8E8;">
                    <h5 class="modal-title" style="font-weight: bold; font-size: 25px !important; ">About
                        Update</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #F8F9F9; padding: 30px;">
                    <form id="update_about_post" method="post">

                        <div class="row mt-3 mb-4">
                            <div class="form-group mb-4 col-12">
                                <label class="mb-1" for="name" style="text-decoration: underline;">
                                    Name </label>
                                <input type="text" name="name" id="nameUpdate" class="form-control">

                                <label class="mb-1" for="surname" style="text-decoration: underline;">
                                    Surname </label>
                                <input type="text" name="surname" id="surnameUpdate" class="form-control">

                                <label class="mb-1" for="working_area" style="text-decoration: underline;">
                                    Working Area </label>
                                <input type="text" name="working_area" id="working_areaUpdate" class="form-control">

                                <label class="mb-1" for="instagram" style="text-decoration: underline;">
                                    Instagram Link </label>
                                <input type="text" name="instagram" id="instagramUpdate" class="form-control">

                                <label class="mb-1" for="linkedin" style="text-decoration: underline;">
                                    Linkedin Link </label>
                                <input type="text" name="linkedin" id="linkedinUpdate" class="form-control">

                                <label class="mb-1" for="github" style="text-decoration: underline;">
                                    Github Link </label>
                                <input type="text" name="github" id="githubUpdate" class="form-control">

                                <label class="mb-1" for="web" style="text-decoration: underline;">
                                    Web Address </label>
                                <input type="text" name="web" id="webUpdate" class="form-control">
                            </div>

                        </div>

                        <input type="hidden" name="updateId" id="updateId">

                    </form>
                </div>
                <div class="modal-footer" style="background-color: #E5E8E8;">
                    <button type="button" class="btn btn-primary" onclick="updateAboutPost()">Save</button>
                    <button type="button" class="btn btn-secondary" onclick="resetModal()" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bd-example-modal-lg" style="overflow: scroll" id="add-about-modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E5E8E8;">
                    <h5 class="modal-title" style="font-weight: bold; font-size: 25px !important; ">About
                        Create</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #F8F9F9;">
                    <form id="create_about">

                        <div class="row mt-3 mb-4">
                            <div class="form-group mb-4 col-12">
                                <label class="mb-1" for="name" style="text-decoration: underline;">
                                    Name </label>
                                <input type="text" name="name" id="name" class="form-control">

                                <label class="mb-1" for="surname" style="text-decoration: underline;">
                                    Surname </label>
                                <input type="text" name="surname" id="surname" class="form-control">

                                <label class="mb-1" for="working_area" style="text-decoration: underline;">
                                    Working Area </label>
                                <input type="text" name="working_area" id="working_area" class="form-control">

                                <label class="mb-1" for="instagram" style="text-decoration: underline;">
                                    Instagram Link </label>
                                <input type="text" name="instagram" id="instagram" class="form-control">

                                <label class="mb-1" for="linkedin" style="text-decoration: underline;">
                                    Linkedin Link </label>
                                <input type="text" name="linkedin" id="linkedin" class="form-control">

                                <label class="mb-1" for="github" style="text-decoration: underline;">
                                    Github Link </label>
                                <input type="text" name="github" id="github" class="form-control">

                                <label class="mb-1" for="web" style="text-decoration: underline;">
                                    Web Address </label>
                                <input type="text" name="web" id="web" class="form-control">

                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="background-color: #E5E8E8;">
                    <button type="button" onclick="createAbout()" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" onclick="resetModal()" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="pdf container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">About List</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card p-5">
                    <table id="aboutTable" class="display nowrap dataTable cell-border" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th> Name</th>
                            <th> Surname</th>
                            <th> Working Area</th>
                            <th> Instagram Link</th>
                            <th> Linkedin Link</th>
                            <th> Github Link</th>
                            <th> Web Address</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th> Name</th>
                            <th> Surname</th>
                            <th> Working Area</th>
                            <th> Instagram Link</th>
                            <th> Linkedin Link</th>
                            <th> Github Link</th>
                            <th> Web Address</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="card-footer clearfix">
                        <button type="button" class="btn btn-info float-left" onclick="createModelOpen()"
                                data-bs-toggle="#add-about-modal"><i class="fas fa-plus"></i>About Create
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script type="text/javascript">
        function createModelOpen() {
            $('#add-about-modal').modal("toggle");

        }

        function createAbout() {
            var formData = new FormData(document.getElementById('create_about'));

            $.ajax({
                type: 'POST',
                url: '{{route('about.create')}}',
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
                        html: 'About Created!'
                    });

                    var elements = document.getElementById("create_about").elements;


                    for (var i = 0, element; element = elements[i++];) {
                        element.value = "";
                    }
                    $('#add-about-modal').modal("toggle");
                    document.getElementById('create_about').reset();
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

        function updateAboutPost() {

            var formData = new FormData(document.getElementById('update_about_post'));
            $.ajax({
                type: 'POST',
                url: '{{route('about.update')}}',
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

                    var elements = document.getElementById("update_about_post").elements;

                    for (var i = 0, element; element = elements[i++];) {
                        element.value = "";
                    }

                    $('#update_abouts_modal').modal("toggle");

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


        function updateAbout(id) {

            var name = $('#nameUpdate');
            var surname = $('#surnameUpdate');
            var working_area = $('#working_areaUpdate');
            var instagram_link = $('#instagramUpdate');
            var linkedln_link = $('#linkedinUpdate');
            var github_link = $('#githubUpdate');
            var web_address = $('#webUpdate');

            $.ajax({
                type: 'GET',
                url: '{{route('about.get')}}',
                data: {id: id},
                success: function (data) {

                    name.val(data.name);
                    surname.val(data.surname);
                    working_area.val(data.working_area);
                    instagram_link.val(data.instagram_link);
                    linkedln_link.val(data.linkedln_link);
                    github_link.val(data.github_link);
                    web_address.val(data.web_address);

                    $('#updateId').val(id);

                    $('#update_abouts_modal').modal("toggle");

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

        dataTable = $('#aboutTable').DataTable({
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
            ajax: '{!! route('about.fetch') !!}',
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'surname'},
                {data: 'working_area'},
                {data: 'instagram_link'},
                {data: 'linkedln_link'},
                {data: 'github_link'},
                {data: 'web_address'},
                {data: 'update'},
                {data: 'delete'},
            ]
        });

        function deleteAbout(id) {
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
                        url: '{!! route('about.delete') !!}',
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
            document.getElementById("create_about").reset();
        }
    </script>
@endsection
