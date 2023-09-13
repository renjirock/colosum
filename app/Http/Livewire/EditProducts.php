<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditProducts extends Component
{
    use WithFileUploads;

    public $title, $SKU, $description, $price, $qty, $is_active, $image, $imageLoad, $product;

    public $rules = [
        'title'         => 'required',
        'SKU'           => 'required',
        'description'   => 'required',
        'price'         => 'required|int',
        'qty'           => 'required|int',
    ];

    public function save()
    {
        $this->validate();

        if ($this->image) {
            Storage::delete([$this->imageLoad]);
            $path = $this->image->store('products/' . Auth::id());
        }
        else {
            $path = $this->imageLoad;
        }

        $this->product->title = $this->title;
        $this->product->SKU = $this->SKU;
        $this->product->description = $this->description;
        $this->product->price = $this->price;
        $this->product->qty = $this->qty;
        $this->product->is_active = $this->is_active == 1 ? true : false;
        $this->product->image = $path;

        if ($this->product->save()) {
            return redirect('admin/products')->with('success', 'Product update successfully!');
        }
    }

    public function mount(string $product_id)
    {
        $product = Product::where('user_id', Auth::id())->where('id', $product_id)->first();
        $this->product = $product;
        $this->title = $product->title;
        $this->SKU = $product->SKU;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->qty = $product->qty;
        $this->is_active = $product->is_active;
        $this->imageLoad = $product->image;
    }

    public function render()
    {

        // $this->image = $product->image;
        return view('livewire.edit-products');
    }
}
