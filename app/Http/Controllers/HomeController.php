<?php

namespace App\Http\Controllers;

use App\Model\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (@Auth::user()->hasRole(['Admin'])) {

            return redirect(route('admin.dashboard'));

        } else {

            $checkout = Session::get('checkout');

            if ($checkout) {

                Session::forget('checkout');
                Session::save();

                return redirect()->route('checkout');
            }

            $product_id = Session::get('product_id');

            if ($product_id) {

                $wishlist             = new Wishlist();
                $wishlist->product_id = $product_id;
                $wishlist->user_id    = auth()->user()->id;
                $wishlist->save();

                session()->forget('product_id');
                Session::save();
                return redirect(route('wishlists'));
            } 

            return redirect(route('user.dashboard'));
            

            
        }
    }
}
