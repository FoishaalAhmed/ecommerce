<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Coupon;
use App\Model\General;
use App\Model\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;

class CheckoutController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $shippingCharge  = General::where('name', 'shipping-charge')->first();

            return view('frontend.checkout', compact('shippingCharge'));

        } else {

            Session::put('checkout', true);
            return redirect()->route('login');
        }  
    }

    public function order(Request $request)
    {
        $orderObject = New Order();

        $request->validate(Order::$validateRule);
        $orderObject->storeOrder($request);
        Session::forget('coupon_amount');
        Session::save();
        return redirect()->route('user.dashboard');
    }

    public function coupon(Request $request)
    {
        $number = $request->coupon;

        $coupon = Coupon::where('number', $number)->where('expire', '>=', date('Y-m-d'))->select('amount')->first();

        if ($coupon != null) {
            session::put('coupon_amount', $coupon->amount);
        }

        echo json_encode($coupon);
    }
}
