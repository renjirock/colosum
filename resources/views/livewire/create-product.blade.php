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
            <label for="SKU" class="form-label">SKU</label>
            <input type="text" wire:model='SKU' class="form-control" id="SKU" name="SKU" placeholder=""
                value="" required />
            @error('SKU')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-6">
            <label for="price" class="form-label">Precio</label>
            <input type="number" min="0" wire:model='price' class="form-control" id="price" name="price"
                required />
            @error('price')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-6">
            <label for="qty" class="form-label">Cantidad</label>
            <input type="number" min="0" wire:model='qty' class="form-control" id="qty" name="qty"
                required />
            @error('qty')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-12">
            <input type="checkbox" wire:model='is_active' class="form-check-input" id="isActive" name="isActive">
            <label class="form-check-label" for="isActive">Activo</label>
        </div>

        <div class="col-md-5">
            <label for="category" class="form-label">Categorias</label>
            <select class="form-select" wire:model='category' id="category" name="category">
                <option value="">Selecciona una...</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-12">
            <input type="checkbox" wire:model='have_sizes' class="form-check-input" id="haveSizes" name="haveSizes">
            <label class="form-check-label" for="haveSizes">¿Tiene tallas?</label>
        </div>

        @if ($have_sizes)
            <div class="col m-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" wire:model='xs' type="checkbox" id="xs">
                    <label class="form-check-label" for="xs">XS</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" wire:model='s' type="checkbox" id="s">
                    <label class="form-check-label" for="s">S</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" wire:model='m' type="checkbox" id="m">
                    <label class="form-check-label" for="m">M</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" wire:model='l' type="checkbox" id="l">
                    <label class="form-check-label" for="l">L</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" wire:model='xl' type="checkbox" id="xl">
                    <label class="form-check-label" for="xl">XL</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" wire:model='xxl' type="checkbox" id="xxl">
                    <label class="form-check-label" for="xxl">XXL</label>
                </div>
            </div>
        @endif

        <div class="col-12">
            <input type="checkbox" wire:model='have_brands' class="form-check-input" id="haveBrands" name="haveBrands">
            <label class="form-check-label" for="haveBrands">¿Tiene marca?</label>
        </div>

        @if ($have_brands)
            <div class="col-6 m-3">
                <label for="name" class="form-label">Marca</label>
                <input type="text"  class="form-control" wire:model='brand' id="brand" name="brand" placeholder=""
                    value=""/>
            </div>
        @endif

        <div class="col-12">
            <label for="description" class="form-label">Descripcion</label>
            <textarea class="form-control" wire:model='description' id="description" name="description"></textarea>
            @error('description')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-12">
            <label for="image" class="form-label">Imagen del producto</label>
            <input type="file" class="form-control form-control-file" wire:model='image'
                accept="image/png, image/jpeg" name="image" id="image">
            @error('image')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div wire:loading wire:target='image' class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Espera!</strong> Estamos cargando tu imagen.
        </div>

        @if ($image)
            <div class="container mt-3">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <img src="{{ $image->temporaryUrl() }}" class="img-fluid" alt="upload-image">
                    </div>
                </div>
            </div>
        @endif

        <hr class="my-4" />

        <button class="w-100 btn btn-primary btn-lg" wire:click='save' wire:loading.remove wire:target='save, image'
            type="button">
            Guardar
        </button>
        <button class="w-100 btn btn-primary btn-lg" disabled wire:loading wire:target='save, image' type="button">
            Guardando
        </button>
</form>
