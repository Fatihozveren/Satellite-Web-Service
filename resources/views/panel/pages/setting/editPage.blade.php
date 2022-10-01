@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 class="pageheader-title">Site Ayarları </h2>
        </div>
        <div class=" clearfix">
            <div style="background-color: yellow">
            </div>
            <form action="{{route('setting_post')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="half">
                    <label for="">Anasayfa Başlık</label>
                    <input type="text" value="{{$setting->why_title}}" name="why_title" required>
                </div>

                <div class="half">
                    <label for="">Hakkımızda Sayfası Başlık</label>
                    <input type="text" value="{{$setting->about_title}}" name="about_title" required>
                </div>

                <div class="half">
                    <label for="">Ana Sayfa Açıklama</label>
                    <textarea type="text"  name="why_content" required>{{$setting->why_content}}</textarea >
                </div>

                <div class="half">
                    <label for="">Hakkımızda Sayfası Açıklama</label>
                    <textarea type="text"  name="about_content" required>{{$setting->about_content}}</textarea >
                </div>


                <div class="half">
                    <label for="">Misyon Başlık</label>
                    <input type="text" value="{{$setting->misyon}}" name="misyon" required>
                </div>

                <div class="half">
                    <label for="">Vizyon Başlık</label>
                    <input type="text" value="{{$setting->vizyon}}" name="vizyon" required>
                </div>

                <div class="half">
                    <label for="">Misyon Açıklama</label>
                    <textarea type="text"  name="misyon_content" required>{{$setting->misyon_content}}</textarea >
                </div>

                <div class="half">
                    <label for="">Vizyon Açıklama</label>
                    <textarea type="text"  name="vizyon_content" required>{{$setting->vizyon_content}}</textarea >
                </div>

                <div style="margin-left: 1px;display: flex;align-items: center;justify-content: flex-start;" class="flex">
                    <div style="margin-top: 10px;" class="half">
                        <label for="">Misyon Resmi</label>
                        <input type="file"   name="misyon_image" >

                    </div>
                    @if(isset($setting->misyon_image) && !is_null($setting->misyon_image))
                    <img style="width: 200px; height: 200px; object-fit: contain" src="{{$setting->misyon_image}}" >
                    @endif

                </div>

                <div style="margin-left: 1px;display: flex;align-items: center;justify-content: flex-start;" class="flex">
                    <div style="margin-top: 10px;" class="half">
                        <label for="">Vizyon Resmi</label>
                        <input type="file"   name="vizyon_image" >

                    </div>
                    @if(isset($setting->vizyon_image) && !is_null($setting->vizyon_image))
                        <img style="width: 200px; height: 200px; object-fit: contain" src="{{asset($setting->vizyon_image)}}" >
                    @endif

                </div>

                <div class="half">
                    <label for="">Telefon (Zorunlu Değil)</label>
                    <input type="text" value="{{$setting->phone}}"  name="phone" >
                </div>

                <div class="half">
                    <label for="">Şehir (Zorunlu Değil)</label>
                    <input type="text" value="{{$setting->city}}"  name="city" >
                </div>

                <div class="half">
                    <label for="">Ülke (Zorunlu Değil)</label>
                    <input type="text" value="{{$setting->country}}"  name="country" >
                </div>

                <div class="half">
                    <label for="">E-Mail Adresi (Zorunlu Değil)</label>
                    <input type="text" value="{{$setting->email}}"  name="email" >
                </div>


                <div class="half">
                    <label for="">Linkedin (Zorunlu Değil)</label>
                    <input type="text" value="{{$setting->linkedin}}"  name="linkedin" >
                </div>

                <div class="half">
                    <label for="">İnstagram (Zorunlu Değil)</label>
                    <input type="text" value="{{$setting->instagram}}" name="instagram" >
                </div>

                <div class="half">
                    <label for="">Twitter (Zorunlu Değil)</label>
                    <input type="text" value="{{$setting->twitter}}" name="twitter" >
                </div>

                <div class="half">
                    <label for="">Facebook (Zorunlu Değil)</label>
                    <input type="text" value="{{$setting->facebook}}" name="facebook" >
                </div>

                <div class="half">
                    <label for="">Google Plus/G+ (Zorunlu Değil)</label>
                    <input type="text" value="{{$setting->google}}" name="google" >
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
