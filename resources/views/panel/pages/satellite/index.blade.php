@extends("panel.layouts.app")
@section("content")
    <div class="modal fade bd-example-modal-lg" style="overflow: scroll" id="update_satellites_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E5E8E8;">
                    <h5 class="modal-title" style="font-weight: bold; font-size: 25px !important; ">Satellite
                        Update</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #F8F9F9; padding: 30px;">
                    <form id="update_satellite_post" method="post">

                        <div class="row mt-3 mb-4">
                            <div class="form-group mb-4 col-12">
                                <label class="mb-1" for="name" style="text-decoration: underline;">Satellite
                                    Name </label>
                                <input type="text" name="name" id="nameUpdate" class="form-control">

                                <label class="mb-1" for="mission_name" style="text-decoration: underline;">Satellite Mission
                                    Name </label>
                                <input type="text" name="mission_name" id="mission_nameUpdate" class="form-control">

                                <label class="mb-1" for="link" style="text-decoration: underline;">Satellite Link
                                </label>
                                <input type="text" name="link" id="linkUpdate" class="form-control">

                                <label class="mb-1" for="launch_date" style="text-decoration: underline;">Satellite Launch Date
                                </label>
                                <input type="date" name="launch_date" id="launch_dateUpdate" class="form-control">

                                <label class="mb-1" for="complete_date" style="text-decoration: underline;">Satellite Complete Date
                                </label>
                                <input type="date" name="complete_date" id="complete_dateUpdate" class="form-control">

                                <label class="mb-1" for="altitude" style="text-decoration: underline;">Satellite Altitude
                                </label>
                                <input type="number" name="altitude" id="altitudeUpdate" class="form-control">

                                <label class="mb-1" for="inclination" style="text-decoration: underline;">Satellite Inclination
                                </label>
                                <input type="number" name="inclination" id="inclinationUpdate" class="form-control">

                                <label class="mb-1" for="instruments" style="text-decoration: underline;">Satellite
                                    Instruments </label>
                                <input type="text" name="instruments" id="instrumentsUpdate" class="form-control">

                                <label class="mb-1" for="description" style="text-decoration: underline;">Satellite
                                    Description </label>
                                <textarea type="text" name="description" id="descriptionUpdate" class="form-control"></textarea>

                                <label class="mb-1" for="category_id" style="text-decoration: underline;">Satellite
                                    Category </label>
                                <select name="category_id" id="category_idUpdate">
                                    <option disabled selected>Seçiniz</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">
                                            {{$category->name}}
                                        </option>
                                    @endforeach
                                </select>

                                <label class="mb-1" for="status_id" style="text-decoration: underline;">Satellite
                                    Statu </label>
                                <select name="status_id" id="status_idUpdate">
                                    <option disabled selected>Seçiniz</option>
                                    @foreach($status as $statu)
                                        <option value="{{$statu->id}}">
                                            {{$statu->name}}
                                        </option>
                                    @endforeach
                                </select>

                                <label class="mb-1" for="scientist_id" style="text-decoration: underline;">Satellite
                                    Scientist </label>
                                <select name="scientist_id" id="scientist_idUpdate">
                                    <option disabled selected>Seçiniz</option>
                                    @foreach($scientist as $scientists)
                                        <option value="{{$scientists->id}}">
                                            {{$scientists->name}}
                                        </option>
                                    @endforeach
                                </select>

                                <label class="mb-1" for="scientist_id2" style="text-decoration: underline;">Satellite
                                    Scientist </label>
                                <select name="scientist_id2" id="scientist_id2Update">
                                    <option disabled selected>Seçiniz</option>
                                    @foreach($scientist as $scientists)
                                        <option value="{{$scientists->id}}">
                                            {{$scientists->name}}
                                        </option>
                                    @endforeach
                                </select>

                                <label class="mb-1" for="launchpad_id" style="text-decoration: underline;">Satellite
                                    LaunchPad </label>
                                <select name="launchpad_id" id="launch_idUpdate">
                                    <option disabled selected>Seçiniz</option>
                                    @foreach($launchpad as $launchpads)
                                        <option value="{{$launchpads->id}}">
                                            {{$launchpads->name}}
                                        </option>
                                    @endforeach
                                </select>

                                <label class="mb-1" for="image" style="text-decoration: underline;">Satellite
                                    Image </label>
                                <input type="file" name="image" id="imageUpdate" class="form-control">

                                <label class="mb-1" for="image2" style="text-decoration: underline;">Satellite
                                    Detail Image </label>
                                <input type="file" name="image2" id="image2Update" class="form-control">

                            </div>
                        </div>

                        <input type="hidden" name="updateId" id="updateId">

                    </form>
                </div>
                <div class="modal-footer" style="background-color: #E5E8E8;">
                    <button type="button" class="btn btn-primary" onclick="updateSatellitePost()">Kaydet</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bd-example-modal-lg" style="overflow: scroll" id="add-satellite-modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E5E8E8;">
                    <h5 class="modal-title" style="font-weight: bold; font-size: 25px !important; ">Satellite
                        Create</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #F8F9F9;">
                    <form id="create_satellite">

                        <div class="row mt-3 mb-4">
                            <div class="form-group mb-4 col-12">
                                <label class="mb-1" for="name" style="text-decoration: underline;">Satellite
                                    Name </label>
                                <input type="text" name="name" id="name" class="form-control">

                                <label class="mb-1" for="mission_name" style="text-decoration: underline;">Satellite Mission
                                    Name </label>
                                <input type="text" name="mission_name" id="mission_name" class="form-control">

                                <label class="mb-1" for="link" style="text-decoration: underline;">Satellite Link
                                </label>
                                <input type="text" name="link" id="link" class="form-control">

                                <label class="mb-1" for="launch_date" style="text-decoration: underline;">Satellite Launch Date
                                     </label>
                                <input type="date" name="launch_date" id="launch_date" class="form-control">

                                <label class="mb-1" for="complete_date" style="text-decoration: underline;">Satellite Complete Date
                                     </label>
                                <input type="date" name="complete_date" id="complete_date" class="form-control">

                                <label class="mb-1" for="altitude" style="text-decoration: underline;">Satellite Altitude
                                     </label>
                                <input type="number" name="altitude" id="altitude" class="form-control">

                                <label class="mb-1" for="inclination" style="text-decoration: underline;">Satellite Inclination
                                     </label>
                                <input type="number" name="inclination" id="inclination" class="form-control">

                                <label class="mb-1" for="instruments" style="text-decoration: underline;">Satellite
                                    Instruments </label>
                                <input type="text" name="instruments" id="instruments" class="form-control">

                                <label class="mb-1" for="description" style="text-decoration: underline;">Satellite
                                    Description </label>
                                <textarea type="text" name="description" id="description" class="form-control"></textarea>

                                <label class="mb-1" for="category_id" style="text-decoration: underline;">Satellite
                                    Category </label>
                                <select name="category_id" id="category_id">
                                    <option disabled selected>Seçiniz</option>
                                @foreach($categories as $category)
                                        <option value="{{$category->id}}">
                                            {{$category->name}}
                                        </option>
                                    @endforeach
                                </select>

                                <label class="mb-1" for="status_id" style="text-decoration: underline;">Satellite
                                    Statu </label>
                                <select name="status_id" id="status_id">
                                    <option disabled selected>Seçiniz</option>
                                @foreach($status as $statu)
                                        <option value="{{$statu->id}}">
                                            {{$statu->name}}
                                        </option>
                                    @endforeach
                                </select>

                                <label class="mb-1" for="scientist_id" style="text-decoration: underline;">Satellite
                                    Scientist </label>
                                <select name="scientist_id" id="scientist_id">
                                    <option disabled selected>Seçiniz</option>
                                @foreach($scientist as $scientists)
                                        <option value="{{$scientists->id}}">
                                            {{$scientists->name}}
                                        </option>
                                    @endforeach
                                </select>

                                <label class="mb-1" for="scientist_id2" style="text-decoration: underline;">Satellite
                                    Scientist </label>
                                <select name="scientist_id2" id="scientist_id2">
                                    <option disabled selected>Seçiniz</option>
                                @foreach($scientist as $scientists)
                                        <option value="{{$scientists->id}}">
                                            {{$scientists->name}}
                                        </option>
                                    @endforeach
                                </select>

                                <label class="mb-1" for="launchpad_id" style="text-decoration: underline;">Satellite
                                    LaunchPad </label>
                                <select name="launchpad_id" id="launchpad_id">
                                    <option disabled selected>Seçiniz</option>
                                @foreach($launchpad as $launchpads)
                                        <option value="{{$launchpads->id}}">
                                            {{$launchpads->name}}
                                        </option>
                                    @endforeach
                                </select>

                                <label class="mb-1" for="image" style="text-decoration: underline;">Satellite
                                    Image </label>
                                <input type="file" name="image" id="image" class="form-control">

                                <label class="mb-1" for="image2" style="text-decoration: underline;">Satellite
                                    Detail Image </label>
                                <input type="file" name="image2" id="image2" class="form-control">

                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="background-color: #E5E8E8;">
                    <button type="button" onclick="createSatellite()" class="btn btn-primary">Kaydet</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                </div>
            </div>
        </div>
    </div>

    <div class="pdf container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Satellite List</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card p-5">
                    <table id="satelliteTable" class="display nowrap dataTable cell-border" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Satellite Name</th>
                            <th>Satellite Mission Name</th>
                            <th>description</th>
                            <th>Category</th>
                            <th>Statu</th>
                            <th>LaunchPad</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Satellite Name</th>
                            <th>Satellite Mission Name</th>
                            <th>description</th>
                            <th>Category</th>
                            <th>Statu</th>
                            <th>LaunchPad</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="card-footer clearfix">
                        <button type="button" class="btn btn-info float-left" onclick="createModelOpen()"
                                data-bs-toggle="#add-satellite-modal"><i class="fas fa-plus"></i>Satellite Create
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script type="text/javascript">
        function createModelOpen() {
            $('#add-satellite-modal').modal("toggle");
        }

        function createSatellite() {
            var formData = new FormData(document.getElementById('create_satellite'));

            $.ajax({
                type: 'POST',
                url: '{{route('satellite.create')}}',
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
                        html: 'Satellite Created!'
                    });

                    var elements = document.getElementById("create_satellite").elements;

                    for (var i = 0, element; element = elements[i++];) {
                        element.value = "";
                    }
                    $('#add-satellite-modal').modal("toggle");
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

        function updateSatellitePost() {

            var formData = new FormData(document.getElementById('update_satellite_post'));
            $.ajax({
                type: 'POST',
                url: '{{route('satellite.update')}}',
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

                    var elements = document.getElementById("update_satellite_post").elements;

                    for (var i = 0, element; element = elements[i++];) {
                        element.value = "";
                    }

                    $('#update_satellites_modal').modal("toggle");

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


        function updateSatellite(id) {

            var name = $('#nameUpdate');
            var mission_name = $('#mission_nameUpdate');
            var link = $('#linkUpdate');
            var launch_date = $('#launch_dateUpdate');
            var complete_date = $('#complete_dateUpdate');
            var altitude = $('#altitudeUpdate');
            var inclination = $('#inclinationUpdate');
            var instruments = $('#instrumentsUpdate');
            var description = $('#descriptionUpdate');
            var category_id = $('#category_idUpdate');
            var status_id = $('#status_idUpdate');
            var scientist_id = $('#scientist_idUpdate');
            var scientist_id2 = $('#scientist_id2Update');
            var launchpad_id = $('#launch_idUpdate');
            var image = $('#imageUpdate');
            var image2 = $('#image2Update');

            $.ajax({
                type: 'GET',
                url: '{{route('satellite.get')}}',
                data: {id: id},
                success: function (data) {

                    name.val(data.name);
                    mission_name.val(data.mission_name);
                    link.val(data.link);
                    launch_date.val(data.launch_date);
                    complete_date.val(data.complete_date);
                    altitude.val(data.altitude);
                    inclination.val(data.inclination);
                    instruments.val(data.instruments);
                    description.val(data.description);
                    category_id.val(data.category_id);
                    status_id.val(data.status_id);
                    scientist_id.val(data.scientist_id);
                    scientist_id2.val(data.scientist_id2);
                    launchpad_id.val(data.launchpad_id);
                    image.val(data.image);
                    image2.val(data.image2);

                    $('#updateId').val(id);

                    $('#update_satellites_modal').modal("toggle");

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

        dataTable = $('#satelliteTable').DataTable({
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
            ajax: '{!! route('satellite.fetch') !!}',
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'mission_name'},
                {data: 'description'},
                {data: 'category_id'},
                {data: 'status_id'},
                {data: 'launchpad_id'},
                {data: 'update'},
                {data: 'delete'},
            ]
        });

        function deleteSatellite(id) {
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
                        url: '{!! route('satellite.delete') !!}',
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
