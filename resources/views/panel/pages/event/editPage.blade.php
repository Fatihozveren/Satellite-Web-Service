@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 class="pageheader-title">Etkinlik Düzenleme </h2>
        </div>
        <div class=" clearfix">
            <div style="background-color: yellow">
            </div>
            <form action="{{route('update_event_post',$event->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="half">
                    <label for="">Başlık</label>
                    <input type="text" value="{{$event->title}}" name="title" required>
                </div>



                <div class="half">
                    <label for="">Eğitmen </label>
                    <select name="teacher"  required>
                        @foreach($teacher as $t)

                            <option @if($t->id == $event->teacher_id) selected @endif value="{{$t->id}}">{{$t->name}}</option>
                        @endforeach
                    </select>
                </div>





                <div class="half">
                    <label for="">Açıklama</label>
                    <textarea type="text"name="description" required>{{$event->description}}</textarea >
                </div>

                <div class="half">
                    <label for="">Tag</label>
                    <input type="text" value="{{$event->tag}}" placeholder="Teknoloji,Sağlık" name="tag" >
                </div>

                <div class="half">
                    <label for="">Link (Zorunlu Değil)</label>
                    <input type="text" value="{{$event->link}}" placeholder="Açıklamanın sonunda verdiğiniz linki ekler" name="link" >
                </div>

                <div class="half">
                    <label for="">Method (Zorunlu Değil)</label>
                    <input type="text" value="{{$event->method}}" placeholder="Uzaktan/Yüz yüze/Remote" name="method" >
                </div>

                <div class="half">
                    <label for="">Şartlar (Zorunlu Değil)</label>
                    <input type="text" value="{{$event->conditional}}" placeholder="Lise mezunu olmak /A2 ingilizce" name="conditional" >
                </div>

                <div class="half">
                    <label for="">Mekan/Yer (Zorunlu Değil)</label>
                    <input type="text" value="{{$event->place}}" placeholder="Zoom/Konferans Salonu" name="place" >
                </div>

                <div class="half">
                    <label for="">Etkinlik Listelenme Sırası</label>
                    <input type="number" value="{{$event->order}}" name="order" required>
                </div>

                <div class="half">
                    <label for="">Etkinlik Ücreti (Zorunlu Değil)</label>
                    <input type="number" value="{{$event->price}}"  name="price" >
                </div>

                <div class="half">
                    <label for="">Max Katılımcı Sayısı-Kota (Zorunlu Değil)</label>
                    <input type="number" value="{{$event->quota}}" name="quota" >
                </div>


                <div class="half">
                    <label for="">Tarih (Zorunlu Değil)</label>
                    <input type="datetime-local" value="{{$event->date}}" name="period" >
                </div>
                <div class="flex">
                    <label for="">Etkinlik Aktif Edilsin mi ?</label>
                    <input type="checkbox" @if($event->is_active==1) checked @endif name="is_active">
                </div>
                <div style="margin-left: 1px;display: flex;align-items: center;justify-content: flex-start;" class="flex">
                    <div style="margin-top: 10px;" class="half">
                        <label for="">Etkinlik Resmi</label>
                        <input type="file"   name="event_image" >

                    </div>
                    <img style="width: 200px; height: 200px; object-fit: contain" src="{{asset($event->event_image)}}" >
                </div>

                <button type="submit" class="btn btn-success float-left">Güncelle</button>
            </form>
        </div>
    </div>
    @if($errors)
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
@endsection

@section('scripts')
    <script>
        $(".menuExperience").addClass("from");
    </script>
@endsection
