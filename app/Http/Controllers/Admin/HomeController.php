<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Order;
use App\Model\SiteReach;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $totalOrder  = Order::count();
        $todaysOrder = Order::whereDate('order_date_time', date('Y-m-d'))->count();
        $totalSale   = Order::where('status', 1)->count();
        $todaysSale  = Order::whereDate('order_date_time', date('Y-m-d'))->where('status', 1)->count();
        $totalReach  = SiteReach::count();
        $todaysReach = SiteReach::where('date', date('Y-m-d'))->count();
        return view('backend.admin.dashboard', compact('totalOrder', 'todaysOrder', 'totalSale', 'todaysSale', 'totalReach', 'todaysReach'));
    }
}
