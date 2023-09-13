<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;

class ShowCategories extends Component
{
    public $search;

    protected $listeners = ['render'];

    public function render()
    {
        $categories = Categorie::where('user_id', Auth::id())
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        return view('livewire.show-categories', compact('categories'));
    }
}
