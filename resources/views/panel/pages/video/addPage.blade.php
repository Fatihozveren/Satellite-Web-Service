@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 class="pageheader-title">Video Oluşturma </h2>
        </div>
        <div class=" clearfix">
            <div style="background-color: yellow">
            </div>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <form action="{{route('add_video_post')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="half">
                    <label for="">Başlık</label>
                    <input type="text"  name="title" required>
                </div>

                <div class="half">
                    <label for="">Youtube Url</label>
                    <input type="text"  name="video_url" required>
                    <span>Youtube linkinde belirtilen kısımdan sonrasını yapıştırın. ("https://www.youtube.com/watch?v=pheOfBziKaE&t=2563s"=alınan->pheOfBziKaE&t=2563s)</span>
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
