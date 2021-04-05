<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class ProductCategory extends Model
{
    protected $fillable = [
        'product_id', 'category_id', 
    ];

    public function getProductCategories(Int $product_id)
    {
        $categories = DB::table('product_categories')
                          ->join('categories', 'product_categories.category_id', '=', 'categories.id')
                          ->select('categories.name', 'categories.id')
                          ->where('product_categories.product_id', $product_id)
                          ->orderBy('categories.id', 'asc')
                          ->get();
        return $categories;
    }
}
