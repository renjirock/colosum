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
        return redirect('cart')->with('success', 'Item delete successfully!');
    }

    public function mount(string $item)
    {
        $this->item = $item;
    }

    public function render()
    {
        return view('livewire.cart.remove-cart');
    }
}
