<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class ProductSize extends Model
{
    protected $fillable = [
        'product_id', 'size_id',
    ];

    protected $table = 'product_size';

    public function getProductSizes(Int $product_id)
    {
        $sizes = DB::table('product_size')
                     ->join('sizes', 'product_size.size_id', '=', 'sizes.id')
                     ->select('sizes.name', 'sizes.id')
                     ->where('product_size.product_id', $product_id)
                     ->orderBy('sizes.id', 'asc')
                     ->get();
        return $sizes;
    }
}
