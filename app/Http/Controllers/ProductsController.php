<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.products.index');
    }

    public function create(Request $request)
    {
        return view('admin.products.create');
    }

    public function edit(Request $request, string $id)
    {
        return view('admin.products.edit', compact('id'));
    }
}
