<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DeleteProduct extends Component
{
    public $product;

    public function delete()
    {
        Product::where('user_id', Auth::id())->where('id', $this->product)->delete();
        $this->emitTo('show-products', 'render');
        $this->emit('succes', 'el producto se elimino correctamente');
    }

    public function mount(string $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.delete-product');
    }
}
