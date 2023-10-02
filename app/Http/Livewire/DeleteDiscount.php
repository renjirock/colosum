<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Discount;
use Illuminate\Support\Facades\Auth;

class DeleteDiscount extends Component
{
    public $discount;

    public function delete()
    {
        Discount::where('user_id', Auth::id())->where('id', $this->discount)->delete();
        $this->emitTo('show-discounts', 'render');
        $this->emit('succes', 'el descuento se elimino correctamente');
    }

    public function mount(string $discount)
    {
        $this->discount = $discount;
    }

    public function render()
    {
        return view('livewire.discounts.delete-discount');
    }
}
