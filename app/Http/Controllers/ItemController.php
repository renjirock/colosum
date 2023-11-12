<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ItemController extends Controller
{
    public function index(Request $request, string $store, string $item){
        $product = Product::where('user_id', $store)
                        ->where('id', $item)
                        ->first();
        return view('store.item', compact('product', 'store'));
    }
}
