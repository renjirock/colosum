<form class="needs-validation" novalidate enctype="multipart/form-data">
    @csrf
    <div class="row g-3">
        <div class="col-sm-6">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" wire:model='title' class="form-control" id="name" name="name" placeholder=""
                value="" required />
            @error('title')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-sm-6">
            <label for="SKU" class="form-label">Code</label>
            <input type="text" wire:model='SKU' class="form-control" id="SKU" name="SKU" placeholder=""
                value="" required />
            @error('SKU')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="category" class="form-label">Tipo de descuento</label>
            <select class="form-select"  id="category" name="category">
                <option value="">Selecciona una...</option>
            </select>
            @error('category')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-6">
            <label for="price" class="form-label">Descuento</label>
            <input type="number" min="0"  class="form-control" id="price" name="price"
                required />
            @error('price')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-12">
            <input type="checkbox"  class="form-check-input" id="isActive" name="isActive">
            <label class="form-check-label" for="isActive">Activo</label>
        </div>

        <div class="col-12">
            <input type="checkbox"  class="form-check-input" id="haveSizes" name="haveSizes">
            <label class="form-check-label" for="haveSizes">Expira</label>
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
