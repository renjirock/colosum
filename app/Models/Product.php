<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable  = ['title', 'description', 'user_id', 'SKU', 'price', 'qty', 'is_active', 'image'];
}
