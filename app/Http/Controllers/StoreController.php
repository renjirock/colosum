<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function index(Request $request, string $id){
        $store = Store::where('user_id', $id)->first();
        return view('store.index', compact('id', 'store'));
    }

    public function admin_index(Request $request){
        return view('admin.store.index');
    }
}
