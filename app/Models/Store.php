<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable  = [
        'name',
        'description',
        'cover',
        'profile',
        'whatsapp',
        'instagram',
        'email',
        'user_id'
    ];
}
