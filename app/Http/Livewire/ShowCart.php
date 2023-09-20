<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Session;
use Cart;

class ShowCart extends Component
{

    protected $listeners = ['render'];

    public function render()
    {
        $cart = Cart::session(Session::get('_token'))->getContent();
        return view('livewire.cart.show-cart', compact('cart'));
    }
}
