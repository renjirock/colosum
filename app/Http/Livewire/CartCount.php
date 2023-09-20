<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Session;
use Cart as Carts;

class CartCount extends Component
{

    protected $listeners = ['render'];

    public function render()
    {
        $count = Carts::session(Session::get('_token'))->getContent()->count();
        return view('livewire.cart.cart-count', compact('count'));
    }
}
