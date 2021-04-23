<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlistObject = new Wishlist();
        $wishlists = $wishlistObject->getUserWishListProducts();
        return view('frontend.user.wishlist', compact('wishlists'));
    }

    public function store(Request $request)
    {
        $wishlist             = new Wishlist();
        $wishlist->product_id = $request->product_id;
        $wishlist->user_id    = auth()->user()->id;
        $wishlist->save();
    }

    public function delete(Request $request)
    {
        Wishlist::where('id', $request->id)->delete();
    }
}
