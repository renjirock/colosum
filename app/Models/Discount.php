<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable  = ['name', 'user_id', 'is_active', 'code', 'type', 'discount', 'qty', 'expiration', 'from', 'to'];
}
