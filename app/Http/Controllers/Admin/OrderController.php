<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Shipping;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderObject;

    public function __construct()
    {
        $this->orderObject = new Order();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->get();
        return view('backend.admin.order.index', compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderDetailObject = new OrderDetail();
        $order = Order::findOrFail($id);
        $orderDetails = $orderDetailObject->getOrderDetails($id);
        $shippingInfo = Shipping::where('order_id', $id)->first();

        return view('backend.admin.order.show', compact('order', 'orderDetails', 'shippingInfo'));
    }

    public function status(Int $id, Int $status)
    {
        $this->orderObject->changeOrderStatus($id, $status);
        return back();
    }
}
