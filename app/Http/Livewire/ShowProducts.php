<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ShowProducts extends Component
{
    public $search;

    protected $listeners = ['render'];

    public function render()
    {
        $products = Product::where('user_id', Auth::id())
                    ->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%')
                    ->orderBy('created_at', 'desc')
                    ->paginate(15);
        return view('livewire.products.show-products', compact('products'));
    }
}
