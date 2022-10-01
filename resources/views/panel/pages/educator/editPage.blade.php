@extends("panel.layouts.app")
@section("content")
    <div >
        <div class="page-header">
            <h2 class="pageheader-title">Eğitmen Düzenleme</h2>
        </div>
        <div class=" clearfix">
            <div style="background-color: yellow">
            </div>
            <form action="{{route('educator_update_post',$user->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="half">
                    <label for="">Eğitmen İsmi</label>
                    <input type="text"  value="{{$user->name}}" name="name" required>
                </div>


                <div class="half">
                    <label for="">Eğitmen Email Adresi</label>
                    <input type="text"  value="{{$user->email}}" name="email" required>
                </div>

                <div class="half">
                    <label for="">Linkedin (Zorunlu Değil)</label>
                    <input type="text" value="{{$user->linkedin}}"  name="linkedin" >
                </div>

                <div class="half">
                    <label for="">İnstagram (Zorunlu Değil)</label>
                    <input type="text" value="{{$user->instagram}}" name="instagram" >
                </div>

                <div class="half">
                    <label for="">Twitter (Zorunlu Değil)</label>
                    <input type="text" value="{{$user->twitter}}" name="twitter" >
                </div>

                <div class="half">
                    <label for="">Udemy (Zorunlu Değil)</label>
                    <input type="text"  value="{{$user->facebook}}" name="facebook" >
                </div>

                <div class="half">
                    <label for="">Google Plus/G+ (Zorunlu Değil)</label>
                    <input type="text"  value="{{$user->google}}" name="google" >
                </div>



                <div class="half">
                    <label for="">Eğitmen Sırası</label>
                    <input type="number"  value="{{$user->order}}"name="order" required>
                </div>

                <div style="margin-left: 1px; " class="flex">
                    <p>Cinsiyet Seçiniz</p>
                    <input type="radio" @if($user->gender=='k')checked @endif  name="gender" value="k" required>
                    <label for="html">Kadın</label>
                    <input type="radio" @if($user->gender=='e')checked @endif name="gender" value="e" required>
                    <label for="html">Erkek</label>
                </div>
                <div style=" margin-left: 20px;" class="flex">
                    <label for="">Anasayfada eğitmenler bölümüne eklensin mi?</label>
                    <input type="checkbox"  checked name="is_active">
                </div>
                <div style="    margin-left: 1px;display: flex;gap: 13px;align-items: center;justify-content: center;width: 100%;" class="flex">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 200px; height: 200px; object-fit: contain" src="{{asset($user->img)}}">
                        @if(!is_null($user->img) && $user->img !='/front/img/default-female.jpg' && $user->img!='/front/img/default-male.jpg')
                            <div style="display:flex; align-items: center;justify-content: center;gap: 10px">
                                <label for="">Varsayılan resime dön</label>
                                <input type="checkbox"  name="is_delete">
                            </div>
                        @endif
                    </div>
                    <div>
                        <label for="">Eğitmen Resmi </label><br>
                        <input type="file"  name="image" >
                    </div>


                </div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>



                <button style="margin-left: 15px; " type="submit" class="btn btn-success float-left">Güncelle</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(".menuExperience").addClass("from");
    </script>
@endsection
