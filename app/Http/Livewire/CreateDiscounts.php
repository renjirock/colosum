<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Discount;
use App\Models\CategoryDiscount;

class CreateDiscounts extends Component
{
    public $expires, $haveQty, $name, $code, $type, $category, $categories, $discount, $is_active, $from, $to, $qty;

    public $rules = [
        'name'         => 'required',
        'code'         => 'required|unique:discounts,code',
        'discount'     => 'required',
        'type'     => 'required',
    ];

    public function save()
    {
        $this->validate();

        $discount = Discount::create([
            'name' => $this->name,
            'code' => $this->code,
            'type' => $this->type,
            'user_id' => Auth::id(),
            'discount' => $this->discount,
            'is_active' => $this->is_active == 1 ? true : false,
            'qty' => $this->haveQty == 1 ? $this->qty : null,
            'expiration' => $this->expires == 1 ? true : false,
            'from' => $this->expires == 1 ? $this->from : null,
            'to' => $this->expires == 1 ? $this->to : null,
        ]);
        if ($discount && ($this->type == 1 || $this->type == 2)) {
            CategoryDiscount::create([
                'discount_id' => $discount->id,
                'category_id' => $this->category
            ]);
        }
        return redirect('admin/discounts')->with('success', 'Discount create successfully!');

    }

    public function mount()
    {
        $categories = Categorie::where('user_id', Auth::id())
            ->where('is_active', true)
            ->get();
        $this->categories = $categories;
    }

    public function render()
    {
        return view('livewire.discounts.create-discounts');
    }
}
