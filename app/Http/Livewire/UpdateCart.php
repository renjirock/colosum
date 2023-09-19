<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Session;
use Cart;

class UpdateCart extends Component
{
    protected $listeners = ['render'];

    public $quantity, $item_id;

    public function more(){
        Cart::session(Session::get('_token'))->update($this->item_id, [
            'quantity' => 1,
        ]);
        $this->quantity += 1;
    }

    public function less(){
        if ($this->quantity - 1 >= 1) {
            Cart::session(Session::get('_token'))->update($this->item_id, [
                'quantity' => -1,
            ]);
            $this->quantity -= 1;
        }
    }

    public function mount(string $quantity, string $item_id)
    {
        $this->quantity = $quantity;
        $this->item_id = $item_id;
    }

    public function render()
    {
        return view('livewire.update-cart');
    }
}
