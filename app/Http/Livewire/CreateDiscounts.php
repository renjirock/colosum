<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateDiscounts extends Component
{
    public function save()
    {
        return true;
    }
    public function render()
    {
        return view('livewire.create-discounts');
    }
}
