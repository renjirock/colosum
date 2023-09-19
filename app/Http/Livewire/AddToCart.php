<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Session;
use Cart;

class AddToCart extends Component
{
    public $product, $name, $price, $img;

    public $qty = 1;

    public function mount(int $product, string $name, int $price, string $img)
    {
        $this->product = $product;
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
    }

    public $rules = [
        'qty'         => 'numeric|min:1',
    ];

    public function add()
    {
        $this->validate();

        Cart::session(Session::get('_token'))->add(array(
            'id' => $this->product,
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->qty,
            'attributes' => array(
              'img' => $this->img
            )
        ));
        $this->emitTo('cart-count', 'render');
        session()->flash('success', 'Post successfully updated.');
    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
