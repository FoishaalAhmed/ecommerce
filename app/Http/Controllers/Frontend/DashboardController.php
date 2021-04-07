<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\OrderDetail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $orderDetailObject = new OrderDetail();
        $orders = $orderDetailObject->getUserAllOrder();

        // echo "<pre>";
        // print_r($orders);
        // echo "</pre>";
        return view('frontend.user.dashboard', compact('orders'));
    }

    public function profile()
    {
        return view('frontend.user.profile');
    }

    
}
