<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Categorie;

class EditCategory extends Component
{
    public $name, $is_active, $category;

    public $rules = [
        'name'         => 'required',
    ];

    public function mount(string $category_id)
    {
        $category = Categorie::where('user_id', Auth::id())->where('id', $category_id)->first();
        $this->name = $category->name;
        $this->is_active = $category->is_active;
        $this->category = $category;

    }

    public function save()
    {
        $this->validate();

        $this->category->name = $this->name;
        $this->category->is_active = $this->is_active;

        if ($this->category->save()) {
            return redirect('admin/categories')->with('success', 'Category update successfully!');
        }
    }

    public function render()
    {
        return view('livewire.categories.edit-category');
    }
}
