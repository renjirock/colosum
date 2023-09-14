<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Categorie;
use App\Models\Size;
use App\Models\Brand;

class CreateProduct extends Component
{
    use WithFileUploads;

    public $title, $SKU, $description, $price, $qty, $is_active, $image, $categories, $category, $have_sizes, $have_brands;

    public $xs, $s, $m, $l, $xl, $xxl;

    public $brand;

    public $rules = [
        'title'         => 'required',
        'SKU'           => 'required',
        'description'   => 'required',
        'category'      => 'required',
        'price'         => 'required|int',
        'qty'           => 'required|int',
        'image'         => 'image|max:2048',
    ];

    public function mount()
    {
        $categories = Categorie::where('user_id', Auth::id())
                                ->where('is_active', true)
                                ->get();
        $this->categories = $categories;
    }

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
            'have_sizes' => $this->have_sizes == 1 ? true : false,
            'have_brands' => $this->have_brands == 1 ? true : false,
            'image' => $path,
            'category_id' => $this->category,
            'user_id' => Auth::id()
        ]);

        if ($this->have_sizes) {
            if ($this->xs) {
                $this->createSize('xs', $product->id);
            }
            if ($this->s) {
                $this->createSize('s', $product->id);
            }
            if ($this->m) {
                $this->createSize('m', $product->id);
            }
            if ($this->l) {
                $this->createSize('l', $product->id);
            }
            if ($this->xl) {
                $this->createSize('xl', $product->id);
            }
            if ($this->xxl) {
                $this->createSize('xxl', $product->id);
            }
        }

        if ($this->have_brands) {
            Brand::create([
                'name' => $this->brand,
                'product_id' => $product->id
            ]);
        }

        if ($product) {
            return redirect('admin/products')->with('success', 'Product create successfully!');
        }
    }

    private function createSize($name, $id){
        Size::create([
            'name' => $name,
            'product_id' => $id
        ]);
    }

    public function render()
    {
        return view('livewire.create-product');
    }
}
