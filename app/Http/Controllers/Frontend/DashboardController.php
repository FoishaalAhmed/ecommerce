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
        return view('frontend.user.dashboard', compact('orders'));
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
