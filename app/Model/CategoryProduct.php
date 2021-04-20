<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class CategoryProduct extends Model
{
    protected $fillable = [
        'product_id', 'category_id', 
    ];

    protected $table = 'category_product';

    public function getProductCategories(Int $product_id)
    {
        $categories = DB::table('category_product')
                          ->join('categories', 'category_product.category_id', '=', 'categories.id')
                          ->select('categories.name', 'categories.id')
                          ->where('category_product.product_id', $product_id)
                          ->orderBy('categories.id', 'asc')
                          ->get();
        return $categories;
    }
}
