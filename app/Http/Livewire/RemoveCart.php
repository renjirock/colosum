<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Session;
use Cart;

class RemoveCart extends Component
{

    public $item;

    public function remove(){
        Cart::session(Session::get('_token'))->remove($this->item);
        $this->emitTo('show-cart', 'render');
        $this->emitTo('cart-count', 'render');
        $this->emit('succes', 'el producto se elimino correctamente');
    }

    public function mount(string $item)
    {
        $this->item = $item;
    }

    public function render()
    {
        return view('livewire.remove-cart');
    }
}
