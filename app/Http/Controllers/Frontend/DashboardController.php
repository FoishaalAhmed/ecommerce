<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\OrderDetail;
use App\Model\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $orderObject = new Order();
        $orders = $orderObject->getUserAllOrder();
        return view('frontend.user.dashboard', compact('orders'));
    }

    public function detail($order_id)
    {
        $orderDetailObject = new OrderDetail();
        $orders = $orderDetailObject->getOrderDetails($order_id);
        return view('frontend.user.detail', compact('orders'));
    }

    public function profile()
    {
        return view('frontend.user.profile');
    }

    public function update()
    {
        return view('frontend.user.update');
    }

    
}
