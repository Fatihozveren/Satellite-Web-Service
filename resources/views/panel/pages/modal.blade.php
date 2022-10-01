
{{--Buna basılınca açılır id ve class önemli nereye tıklanınca açılmasını istiyorsan oraya id ve class vermelisin--}}
<a href="" id="edit-profile-image" class="open-modal"></a>

{{--butona verdiğin idnin sonuna "-modal" ekleyerek modala id verme lisin --}}
<div id="edit-profile-image-modal" class="modal-space small">
    <div class="my-modal">
        <div class="modal-header">
            <h4 class="modal-title">
                Profil Fotoğrafı
            </h4>
            <div class="modal-close">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <form  enctype="multipart/form-data">
            <div class="modal-body">
                <img src="" alt="">
                <label class="file">
                    <input type="file" id="profile_picture" name="profile_picture" aria-label="File browser example">
                    <span class="file-custom"></span>
                </label>

            </div>

            <div class="modal-footer">
                <a class="" id="profilePicKaydet">Gönder</a>
                <a class="modal-close">Kapat</a>
            </div>
        </form>

    </div>
</div>
