@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 class="pageheader-title">Eğitmen Oluşturma</h2>
        </div>
        <div class=" clearfix">
            <div style="background-color: yellow">
            </div>
            <form action="{{route('educator_add_post')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="half">
                    <label for="">Eğitmen İsmi</label>
                    <input type="text"  name="name" required>
                </div>

                <div class="half">
                    <label for="">Eğitmen Resmi (Boş bırakılırsa varsayılan resim eklenecektir)</label>
                    <input type="file"  name="image" >

                </div>
                <div class="half">
                    <label for="">Eğitmen Email Adresi</label>
                    <input type="text"  name="email" required>
                </div>

                <div class="half">
                    <label for="">Linkedin (Zorunlu Değil)</label>
                    <input type="text"  name="linkedin" >
                </div>

                <div class="half">
                    <label for="">İnstagram (Zorunlu Değil)</label>
                    <input type="text"  name="instagram" >
                </div>

                <div class="half">
                    <label for="">Twitter (Zorunlu Değil)</label>
                    <input type="text" name="twitter" >
                </div>

                <div class="half">
                    <label for="">Facebook (Zorunlu Değil)</label>
                    <input type="text"  name="facebook" >
                </div>

                <div class="half">
                    <label for="">Google Plus/G+ (Zorunlu Değil)</label>
                    <input type="text"  name="google" >
                </div>

                <div class="half">
                    <label for="">Eğitmen Sırası</label>
                    <input type="number"  name="order" required>
                </div>

                <div style="margin-left: 1px; " class="flex">
                    <p>Cinsiyet Seçiniz</p>
                    <input type="radio"  name="gender" value="k" required>
                    <label for="html">Kadın</label>
                    <input type="radio"  name="gender" value="e" required>
                    <label for="html">Erkek</label>


                </div>
                <div style=" margin-left: 20px;" class="flex">
                    <label for="">Anasayfada eğitmenler bölümüne eklensin mi?</label>
                    <input type="checkbox"  checked name="is_active">
                </div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                <button style="margin-left: 15px; " type="submit" class="btn btn-success float-left">Oluştur</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(".menuExperience").addClass("from");
    </script>
@endsection
