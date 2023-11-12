<div>
    <form class="d-flex">
        @if ($count == 0)
            <a class="btn btn-outline-dark">
                <i class="bi-cart-fill me-1"></i>
                Cart
                <span class="badge bg-dark text-white ms-1 rounded-pill">{{ $count }}</span>
            </a>
        @else
            <a class="btn btn-outline-dark" href="{{route('cart')}}">
                <i class="bi-cart-fill me-1"></i>
                Cart
                <span class="badge bg-dark text-white ms-1 rounded-pill">{{ $count }}</span>
            </a>
        @endif
    </form>
</div>
