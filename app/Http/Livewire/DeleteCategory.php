<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;

class DeleteCategory extends Component
{
    public $category;

    public function delete()
    {
        Categorie::where('user_id', Auth::id())->where('id', $this->category)->delete();
        $this->emitTo('show-categories', 'render');
        $this->emit('succes', 'el producto se elimino correctamente');
    }

    public function mount(string $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.categories.delete-category');
    }
}
