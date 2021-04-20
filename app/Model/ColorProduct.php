<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class ColorProduct extends Model
{
    protected $fillable = [
        'product_id', 'color_id',
    ];

    protected $table = 'color_product';

    public function getProductColors(Int $product_id)
    {
        $colors = DB::table('color_product')
                     ->join('colors', 'color_product.color_id', '=', 'colors.id')
                     ->select('colors.name', 'colors.id')
                     ->where('color_product.product_id', $product_id)
                     ->orderBy('colors.id', 'asc')
                     ->get();
        return $colors;
    }
}
