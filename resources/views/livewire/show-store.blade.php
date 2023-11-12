<div>
    <header class="py-5 bg-image-full mt-5" style="{{$cover ? 'background-image: url(' . $cover->temporaryUrl() . '); background-size: cover;' : 'background-image: '. $upload_cover . ';'}}">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-4" src="{{$profile ? $profile->temporaryUrl() : $upload_profile}}" alt="profile" style="max-width: 150px;"/>
        </div>
    </header>

    <hr class="my-4" />

    <div class="row g-3">
        <div class="col-sm-6 mb-1">
            <label for="cover" class="form-label">Imagen de portada</label>
            <input type="file" class="form-control form-control-file" wire:model='cover'
                accept="image/png, image/jpeg" name="cover" id="cover">
            @error('cover')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-sm-6 mb-1">
            <label for="profile" class="form-label">Imagen de perfil</label>
            <input type="file" class="form-control form-control-file" wire:model='profile'
                accept="image/png, image/jpeg" name="profile" id="profile">
            @error('profile')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="row g-3">
        <div class="col-sm-6">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" wire:model='name' class="form-control" id="name" name="name" placeholder=""
                value="" required />
            @error('name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-sm-6">
            <label for="description" class="form-label">Descripcion corta</label>
            <input type="text" wire:model='description' class="form-control" id="description" name="description" placeholder=""
                value="" required />
            @error('description')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-sm-6">
            <label for="whatsapp" class="form-label">Whatsapp</label>
            <input type="text" wire:model='whatsapp' class="form-control" id="whatsapp" name="whatsapp" placeholder=""
                value="" required />
            @error('whatsapp')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-sm-6">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="text" wire:model='instagram' class="form-control" id="instagram" name="instagram" placeholder=""
                value="" required />
            @error('instagram')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-sm-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" wire:model='email' class="form-control" id="email" name="email" placeholder=""
                value="" required />
            @error('email')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <hr class="my-4" />

    <button class="w-100 btn btn-primary btn-lg" wire:click='save' wire:loading.remove wire:target='save, image'
        type="button">
        Guardar
    </button>
    <button class="w-100 btn btn-primary btn-lg" disabled wire:loading wire:target='save, image' type="button">
        Guardando
    </button>
</div>
