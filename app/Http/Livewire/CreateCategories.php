<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Categorie;

class CreateCategories extends Component
{

    public $name, $is_active;

    public $rules = [
        'name'         => 'required',
    ];

    public function save()
    {
        $this->validate();

        $category = Categorie::create([
            'name' => $this->name,
            'is_active' => $this->is_active == 1 ? true : false,
            'user_id' => Auth::id()
        ]);

        if ($category) {
            return redirect('admin/categories')->with('success', 'Category create successfully!');
        }
    }

    public function render()
    {
        return view('livewire.create-categories');
    }
}
