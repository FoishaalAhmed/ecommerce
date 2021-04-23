<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
        'product_id', 'user_id',
    ];

    public function getUserWishListProducts()
    {
        $wishlists = $this::join('products', 'wishlists.product_id', '=', 'products.id')
                           ->where('wishlists.user_id', auth()->user()->id)
                           ->select('wishlists.id', 'products.name', 'products.current_price', 'products.cover')
                           ->orderBy('wishlists.created_at', 'desc')
                           ->groupBy('wishlists.product_id')
                           ->get();
        return $wishlists;
    }
}
