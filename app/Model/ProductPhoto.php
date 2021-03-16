<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    protected $fillable = [
        'product_id', 'photo',
    ];
}
