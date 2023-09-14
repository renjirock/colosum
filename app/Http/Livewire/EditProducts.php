<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Categorie;
use App\Models\Size;

class EditProducts extends Component
{
    use WithFileUploads;

    public $title, $SKU, $description, $price, $qty, $is_active, $image, $imageLoad, $product, $categories, $category, $have_sizes, $have_brands;

    public $xs, $s, $m, $l, $xl, $xxl;

    public $brand;

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
        $this->product->have_sizes = $this->have_sizes == 1 ? true : false;
        $this->product->have_brands = $this->have_brands == 1 ? true : false;
        $this->product->image = $path;
        $this->product->category_id = $this->category;

        if ($this->product->save()) {
            if ($this->have_sizes) {
                Size::where('product_id', $this->product->id)->delete();
                if ($this->xs) {
                    $this->createSize('xs', $this->product->id);
                }
                if ($this->s) {
                    $this->createSize('s', $this->product->id);
                }
                if ($this->m) {
                    $this->createSize('m', $this->product->id);
                }
                if ($this->l) {
                    $this->createSize('l', $this->product->id);
                }
                if ($this->xl) {
                    $this->createSize('xl', $this->product->id);
                }
                if ($this->xxl) {
                    $this->createSize('xxl', $this->product->id);
                }
            }
            if ($this->have_brands) {
                Brand::where('product_id', $this->product->id)->delete();
                Brand::create([
                    'name' => $this->brand,
                    'product_id' => $this->product->id
                ]);
            }
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
        $this->category = $product->category_id;
        $categories = Categorie::where('user_id', Auth::id())
                                ->where('is_active', true)
                                ->get();
        $this->categories = $categories;
        $this->have_sizes = $product->have_sizes;
        $this->have_brands = $product->have_brands;
        if ($this->have_sizes) {
            $sizes = Size::where('product_id', $product_id)->get();
            foreach ($sizes as $size) {
                match ($size->name) {
                    'xs' => $this->xs = 1,
                    's' => $this->s = 1,
                    'm' => $this->m = 1,
                    'l' => $this->l = 1,
                    'xl' => $this->xl = 1,
                    'xxl' => $this->xxl = 1,
                };
            }
        }
        if ($this->have_brands) {
            $brand = Brand::where('product_id', $product_id)->first();
            $this->brand = $brand->name;
        }
    }

    public function render()
    {

        // $this->image = $product->image;
        return view('livewire.edit-products');
    }

    private function createSize($name, $id){
        Size::create([
            'name' => $name,
            'product_id' => $id
        ]);
    }
}
