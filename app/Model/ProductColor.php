<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class ProductColor extends Model
{
    protected $fillable = [
        'product_id', 'color_id',
    ];

    public function getProductColors(Int $product_id)
    {
        $colors = DB::table('product_colors')
                     ->join('colors', 'product_colors.color_id', '=', 'colors.id')
                     ->select('colors.name', 'colors.id')
                     ->where('product_colors.product_id', $product_id)
                     ->orderBy('colors.id', 'asc')
                     ->get();
        return $colors;
    }
}
