@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 class="pageheader-title">Blog Düzenleme </h2>
        </div>
        <div class=" clearfix">
            <div style="background-color: yellow">
            </div>
            <form action="{{route('update_blog_post',$blog->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="half">
                    <label for="">Başlık</label>
                    <input type="text" value="{{$blog->title}}" name="title" required>
                </div>

                <div class="half">
                    <label for="">Açıklama</label>
                    <textarea type="text"name="blog_content" required>{{$blog->content}}</textarea >
                </div>



                <div style="margin-left: 1px" class="flex">

                    <div style="margin-top: 10px;" class="half">
                        <label for="">İçerik Slider Resimleri</label>
                        <input type="file"  name="slider_images[]" multiple="multiple">

                    </div>
                </div>
                <div class="flex">
                    <label for="">Blog Aktif Edilsin mi ?</label>
                    <input type="checkbox" @if($blog->status==1) checked @endif name="is_active">
                </div>
                <div style="margin-left: 1px ;display: flex;align-items: center;justify-content: flex-start;" class="flex">

                    <img style="width: 200px; height: 200px;" src="{{asset($blog->image_header)}}" >

                    <div style="margin-top: 10px;" class="half">
                        <label for="">Blog Resmi</label>
                        <input type="file"name="blog_image" required>

                    </div>
                </div>
                <div class="flex"></div>
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
