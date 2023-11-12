<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ShowItems extends Component
{
    public $store;

    protected $listeners = ['render'];

    public function render()
    {
        $products = Product::where('user_id', $this->store)
                        ->get();
        return view('livewire.show-items', compact('products'));
    }
}
