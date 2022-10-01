@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 class="pageheader-title">video Düzenleme </h2>
        </div>
        <div class=" clearfix">
            <div style="background-color: yellow">
            </div>
            <form action="{{route('update_video_post',$video->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="half">
                    <label for="">Başlık</label>
                    <input type="text" value="{{$video->title}}" name="title" required>
                </div>
                <div class="half">
                    <label for="">Youtube Url</label>
                    <input type="text" value="{{$video->youtube_url}}" name="youtube_url" required>
                </div>


                <div class="flex">
                    <label for="">Video Aktif Edilsin mi ?</label>
                    <input type="checkbox" @if($video->status==1) checked @endif name="is_active">
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
