<form>
    <div class="d-flex pb-5">
        @csrf
        <input class="form-control text-center me-3" wire:model='qty' min="0"  id="inputQuantity" name="inputQuantity" type="num"
            value="1" style="max-width: 3rem" />
        <button wire:click='add' class="btn btn-outline-dark flex-shrink-0" type="button">
            <i class="bi-cart-fill me-1"></i>
            Add to cart
        </button>
    </div>
    @error('qty')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
</form>
