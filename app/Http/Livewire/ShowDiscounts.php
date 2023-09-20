<?php

namespace App\Http\Livewire;

use App\Models\Discount;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowDiscounts extends Component
{
    public $search;

    public function render()
    {
        $discounts = Discount::where('user_id', Auth::id())
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('code', 'like', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        return view('livewire.show-discounts', compact('discounts'));
    }
}
