<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        //Cart::destroy();
        return view('frontend.cart');
    }

    public function store(Request $request)
    {
        $product_id = $request->product_id;
        $size       = $request->size;
        $color      = $request->color;
        $qty        = $request->qty;

        $product    = Product::findOrFail($product_id);

        //Cart::destroy();

        Cart::add(['id' => $product_id, 'name' => $product->name, 'qty' => $qty, 'price' => $product->current_price, 'weight' => 1, 'options' => ['size' => $size, 'color' => $color, 'image' => $product->cover]]);

        echo Cart::count();

        //echo json_encode($curt);

        //$product_id = $request->product_id;
    }

    public function update(Request $request)
    {
        $qty = $request->qty;
        $rowId = $request->row_id;
        Cart::update($rowId, ['qty' => $qty]);

        echo json_encode(Cart::get($rowId));
    }

    public function delete(Request $request)
    {
        $rowId = $request->row_id;
        Cart::remove($rowId);
    }
}
