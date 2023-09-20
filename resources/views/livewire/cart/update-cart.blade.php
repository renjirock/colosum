<div class="col-md-3 col-lg-3 col-xl-2 m-1 d-flex justify-content-center align-items-center ">
    <button type="button" wire:click="less" class="btn btn-dark"><i class="bi bi-caret-left-fill"></i></button>
    <input disabled class="form-control text-center me-1 ms-1 " id="inputQuantity" name="inputQuantity" type="num"
        value="{{ $quantity }}" style="max-width: 3rem" />
    <button type="button" wire:click="more" class="btn btn-dark"><i class="bi bi-caret-right-fill"></i></button>
</div>
