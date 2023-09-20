<form class="needs-validation" novalidate enctype="multipart/form-data">
    @csrf
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

        <div class="col-12">
            <input type="checkbox" wire:model='is_active' class="form-check-input" id="isActive" name="isActive">
            <label class="form-check-label" for="isActive">Activo</label>
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
</form>
