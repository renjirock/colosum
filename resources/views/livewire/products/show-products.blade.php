<div>
    <div class="form-outline mb-3">
        <input type="search" id="form1" class="form-control" placeholder="Buscar" aria-label="Search"
            wire:model='search' />
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">SKU</th>
                <th scope="col">Active</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->SKU }}</td>
                    @if ($product->is_active)
                        <td class="text-success"><i class="fa-solid fa-check"></i></td>
                    @else
                        <td class="text-danger"><i class="fa-solid fa-x"></i></td>
                    @endif
                    <td>
                        <a href="{{ route('item', ['store' => Auth::user()->id, 'item' => $product->id]) }}"><i class="fa-regular fa-eye"></i></a>
                    </td>
                    <td><a href="{{ route('admin.products.edit', $product->id) }}"><i
                                class="fa-regular fa-pen-to-square"></i></a></td>
                    <td>
                        @livewire('delete-product', ['product' => $product->id], key($product->id))
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if ($products->count() == 1)
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end">
                @foreach ($products->links()->elements[0] as $key => $link)
                    @if ( $key == $products->currentPage())
                        <li class="page-item active"><a class="page-link" href="{{$link}}">{{$key}}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{$link}}">{{$key}}</a></li>
                    @endif
                @endforeach
            </ul>
        </nav>
    @else
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end">
                @foreach ($products->links()->elements as $index => $item)
                    @if ($index == 0 || $index%2 == 0)
                        @foreach ($item as $key => $link)
                            @if ( $key == $products->currentPage())
                                <li class="page-item active"><a class="page-link" href="{{$link}}">{{$key}}</a></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{$link}}">{{$key}}</a></li>
                            @endif
                        @endforeach
                    @else
                        <li class="page-item"><a class="page-link disabled">...</a></li>
                    @endif
                @endforeach
            </ul>
        </nav>
    @endif
</div>
