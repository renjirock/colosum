<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class StoreController extends Controller
{
    public function index(Request $request, string $store){
        $products = Product::where('user_id', $store)
                        ->get();
        return view('store.index', compact('products'));
    }
}
