@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 class="pageheader-title">Etkinlik Oluşturma </h2>
        </div>
        <div class=" clearfix">
            <div style="background-color: yellow">
            </div>
            <form action="{{route('add_event_post')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="half">
                    <label for="">Başlık</label>
                    <input type="text"  name="title" required>
                </div>

                <div class="half">
                    <label for="">Etkinlik Resmi</label>
                    <input type="file"  name="event_image" required>
                </div>

                <div class="half">
                    <label for="">Eğitmen </label>
                    <select name="teacher"  required>
                        @foreach($teacher as $t)
                        <option value="{{$t->id}}">{{$t->name}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="half">
                    <label for="">Tag</label>
                    <input type="text"  placeholder="Teknoloji,Sağlık" name="tag" >
                </div>

                <div class="half">
                    <label for="">Link (Zorunlu Değil)</label>
                    <input type="text" placeholder="Açıklamanın sonunda verdiğiniz linki ekler" name="link" >
                </div>

                <div class="half">
                    <label for="">Method (Zorunlu Değil)</label>
                    <input type="text" placeholder="Uzaktan/Yüz yüze/Remote" name="method" >
                </div>

                <div class="half">
                    <label for="">Şartlar (Zorunlu Değil)</label>
                    <input type="text" placeholder="Lise mezunu olmak /A2 ingilizce" name="conditional" >
                </div>

                <div class="half">
                    <label for="">Mekan/Yer (Zorunlu Değil)</label>
                    <input type="text" placeholder="Zoom/Konferans Salonu" name="place" >
                </div>

                <div class="half">
                    <label for="">Etkinlik Listelenme Sırası</label>
                    <input type="number"  name="order" required>
                </div>

                <div class="half">
                    <label for="">Etkinlik Ücreti (Zorunlu Değil)</label>
                    <input type="number"  name="price" >
                </div>

                <div class="half">
                    <label for="">Max Katılımcı Sayısı-Kota (Zorunlu Değil)</label>
                    <input type="number"  name="quota" >
                </div>

                <div class="half">
                    <label for="">Tarih (Zorunlu Değil)</label>
                    <input type="datetime-local"  name="period" >
                </div>
                <div class="half">
                    <label for="">Açıklama</label>
                    <textarea type="text"  name="description" required>

                    </textarea >
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
