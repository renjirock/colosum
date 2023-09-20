<div class="col-lg-8">
    <div class="p-5">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h1 class="fw-bold mb-0 text-black">Carrito de compra</h1>
            <h6 class="mb-0 text-muted">{{$cart->count()}} items</h6>
        </div>

        @foreach ($cart as $item)
            <hr class="my-4">

            <div class="row mb-4 d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <img src="{{$item->attributes->img}}"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <h6 class="text-muted">Shirt</h6>
                    <h6 class="text-black mb-0">{{$item->name}}</h6>
                </div>
                @livewire('update-cart', ['quantity' => $item->quantity, 'item_id' => $item->id], key($item->id))
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h6 class="mb-0">$ {{$item->price}}</h6>
                </div>
                @livewire('remove-cart', ['item' => $item->id], key($item->id))

            </div>

            <hr class="my-4">
        @endforeach

    </div>
</div>
