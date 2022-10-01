@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 class="pageheader-title">photo Düzenleme </h2>
        </div>
        <div class=" clearfix">
            <div style="background-color: yellow">
            </div>
            <form action="{{route('update_photo_post',$photo->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <div style="margin-left: 1px" class="flex">

                    <img style="width: 200px; height: 200px;" src="{{asset($photo->patch)}}" >

                    <div style="margin-top: 10px;" class="half">
                        <label for="">Fotoğraf</label>
                        <input type="file"name="photo" >

                    </div>
                </div>


                <div class="flex">
                    <label for="">photo Aktif Edilsin mi ?</label>
                    <input type="checkbox" @if($photo->status==1) checked @endif name="is_active">
                </div>

                <button type="submit" class="btn btn-success float-left">Güncelle</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(".menuExperience").addClass("from");
    </script>
@endsection
