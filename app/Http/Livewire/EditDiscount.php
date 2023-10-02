<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Discount;
use App\Models\CategoryDiscount;

class EditDiscount extends Component
{
    public $expires, $haveQty, $name, $code, $type, $category, $categories, $discount, $is_active, $from, $to, $qty, $discounts, $categoryDiscount;

    public $rules = [
        'name'         => 'required',
        'code'         => 'required',
        'discount'     => 'required',
        'type'     => 'required',
    ];

    public function save()
    {
        $this->validate();

        $this->discounts->name = $this->name;
        $this->discounts->code = $this->code;
        $this->discounts->type = $this->type;
        $this->discounts->discount = $this->discount;
        $this->discounts->is_active = $this->is_active == 1 ? true : false;
        $this->discounts->qty = $this->haveQty == 1 ? $this->qty : null;
        $this->discounts->expiration = $this->expires == 1 ? true : false;
        $this->discounts->from = $this->expires == 1 ? $this->from : null;
        $this->discounts->to = $this->expires == 1 ? $this->to : null;

        if ($this->discounts->save() && ($this->type == 1 || $this->type == 2)) {
            $this->categoryDiscount->category_id = intval($this->category);
            $this->categoryDiscount->save();
        }

        return redirect('admin/discounts')->with('success', 'Discount edited successfully!');

    }

    public function mount(string $discount_id)
    {
        $discount = Discount::where('user_id', Auth::id())->where('id', $discount_id)->first();

        $this->name = $discount->name;
        $this->type = $discount->type;
        $this->code = $discount->code;
        $this->discount = $discount->discount;
        $this->qty = $discount->qty;
        if ($this->qty) {
            $this->haveQty = true;
        }
        $this->is_active = $discount->is_active;
        $this->expires = $discount->expiration;
        $this->from = $discount->from;
        $this->to = $discount->to;

        $this->discounts = $discount;

        if ($discount->type == '1' || $discount->type == '2') {
            $CategoryDiscount = CategoryDiscount::where('discount_id', $discount_id)->first();
            $this->category = $CategoryDiscount->category_id;
            $this->categoryDiscount = $CategoryDiscount;
        }

        $categories = Categorie::where('user_id', Auth::id())
            ->where('is_active', true)
            ->get();

        $this->categories = $categories;

    }

    public function render()
    {
        return view('livewire.discounts.edit-discount');
    }
}
