<div>
    <div class="form-outline mb-3">
        <input type="search" id="form1" class="form-control" placeholder="Buscar" aria-label="Search"
            wire:model='search' />
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Code</th>
                <th scope="col">type</th>
                <th scope="col">Active</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($discounts as $discount)
                <tr>
                    <td>{{ $discount->name }}</td>
                    <td>{{ $discount->code }}</td>
                    <td>{{ match($discount->type) {
                        '1' => 'Por categoria porcentaje',
                        '2' => 'Por categoria valor',
                        '3' => 'Por porcentaje',
                        '4' => 'Por valor',
                        default => '',
                    } }}</td>
                    @if ($discount->is_active)
                        <td class="text-success"><i class="fa-solid fa-check"></i></td>
                    @else
                        <td class="text-danger"><i class="fa-solid fa-x"></i></td>
                    @endif
                    <td><a href="{{ route('admin.discounts.edit', $discount->id) }}"><i
                                class="fa-regular fa-pen-to-square"></i></a></td>
                    <td>
                        @livewire('delete-discount', ['discount' => $discount->id], key($discount->id))
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if ($discounts->count() == 1)
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end">
                @foreach ($discounts->links()->elements[0] as $key => $link)
                    @if ( $key == $discounts->currentPage())
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
                @foreach ($discounts->links()->elements as $index => $item)
                    @if ($index == 0 || $index%2 == 0)
                        @foreach ($item as $key => $link)
                            @if ( $key == $discounts->currentPage())
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
