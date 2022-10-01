@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 class="pageheader-title">Blog Oluşturma </h2>
        </div>
        <div class=" clearfix">
            <div style="background-color: yellow">
            </div>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <form action="{{route('add_blog_post')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="half">
                    <label for="">Başlık</label>
                    <input type="text"  name="title" required>
                </div>

                <div class="half">
                    <label for="">Blog Resmi</label>
                    <input type="file"  name="blog_image" required>
                </div>


                <div class="half">
                    <label for="">İçerik</label>
                    <textarea type="text"  name="blog_content" required>

                    </textarea >
                </div>

                <div class="half">
                    <label for="">İçerik Slider Resimleri</label>
                    <input type="file"  name="slider_images[]" multiple="multiple">
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
