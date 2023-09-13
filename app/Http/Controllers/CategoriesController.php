<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $request){
        return view('admin.categories.index');
    }

    public function create(Request $request){
        return view('admin.categories.create');
    }

    public function edit(Request $request, string $id){
        return view('admin.products.edit', compact('id'));
    }
}
