@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 class="pageheader-title">Fotoğraf Oluşturma </h2>
        </div>
        <div class=" clearfix">
            <div style="background-color: yellow">
            </div>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <form action="{{route('add_photo_post')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="half">
                    <label for="">Fotoğraf</label>
                    <input type="file"  name="photo" required>
                </div>
                <div class="flex">
                    <label for="">Aktiflik</label>
                    <input type="checkbox"  checked name="is_active">
                </div>

                <button type="submit" class="btn btn-success float-left">Oluştur</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(".menuExperience").addClass("from");
    </script>
@endsection
