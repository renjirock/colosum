<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;

    public $title, $SKU, $description, $price, $qty, $is_active, $image;

    public $rules = [
        'title'         => 'required',
        'SKU'           => 'required',
        'description'   => 'required',
        'price'         => 'required|int',
        'qty'           => 'required|int',
        'image'         => 'image|max:2048',
    ];

    public function save()
    {
        $this->validate();

        $path = $this->image->store('products/' . Auth::id());

        $product = Product::create([
            'title' => $this->title,
            'SKU' => $this->SKU,
            'description' => $this->description,
            'price' => $this->price,
            'qty' => $this->qty,
            'is_active' => $this->is_active == 1 ? true : false,
            'image' => $path,
            'user_id' => Auth::id()
        ]);

        if ($product) {
            return redirect('admin/products')->with('success', 'Product create successfully!');
        }
    }

    public function render()
    {
        return view('livewire.create-product');
    }
}
