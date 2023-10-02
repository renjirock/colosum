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

        <div class="col-sm-6">
            <label for="code" class="form-label">Code</label>
            <input type="text" wire:model='code' class="form-control" id="code" name="code" placeholder=""
                value="" required />
            @error('code')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="type" class="form-label">Tipo de descuento</label>
            <select class="form-select" wire:model='type'  id="type" name="type">
                <option value="">Selecciona una...</option>
                <option value="1">Por categoria porcentaje</option>
                <option value="2">Por categoria valor</option>
                <option value="3">Por porcentaje</option>
                <option value="4">Por valor</option>
            </select>
            @error('type')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="discount" class="form-label">Descuento</label>
            <input type="number" wire:model='discount' min="0"  class="form-control" id="discount" name="discount"
                required />
            @error('discount')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>


        @if ($type == 1 || $type == 2 )
            <div class="row m-1">
                <div class="col-sm-6">
                    <label for="category" class="form-label">Categorias</label>
                    <select class="form-select" wire:model='category'  id="category" name="category">
                        <option value="">Selecciona una...</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endif

        <div class="col-12">
            <input type="checkbox" wire:model='is_active' class="form-check-input" id="isActive" name="isActive">
            <label class="form-check-label" for="isActive">Activo</label>
        </div>

        <div class="col-12">
            <input type="checkbox" wire:model='expires' class="form-check-input" id="haveSizes" name="haveSizes">
            <label class="form-check-label" for="haveSizes">Expira</label>
        </div>

        @if ($expires)
        <div class="row m-3">
            <div class="col-sm-6">
                <label class="form-check-label" for="from">Desde</label>
                <input placeholder="Seleccionar fecha" wire:model='from' type="date" id="from" min="{{date("Y-m-d")}}" name='from' class="form-control">
            </div>
            <div class="col-sm-6">
                <label class="form-check-label" for="to">Hasta</label>
                <input placeholder="Seleccionar fecha" type="date" wire:model='to' id="to" min="{{date("Y-m-d")}}" name='to' class="form-control">
            </div>
        </div>
        @endif

        <div class="col-12">
            <input type="checkbox" wire:model='haveQty' class="form-check-input" id="haveQty" name="haveQty">
            <label class="form-check-label" for="haveQty">Cantidad de usos</label>
        </div>

        @if ($haveQty)
            <div class="row m-3">
                <div class="col-6">
                <label for="qty" class="form-label">Cantidad</label>
                <input type="text" wire:model='qty' class="form-control" id="qty" name="qty" placeholder=""
                    value="" required />
                </div>
            </div>
        @endif

        <hr class="my-4" />

        <button class="w-100 btn btn-primary btn-lg" wire:click='save' wire:loading.remove wire:target='save'
            type="button">
            Guardar
        </button>
        <button class="w-100 btn btn-primary btn-lg" disabled wire:loading wire:target='save' type="button">
            Guardando
        </button>
    </div>
</form>
