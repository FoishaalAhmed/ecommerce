<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    private $couponObject;

    public function __construct()
    {
        $this->couponObject = new Coupon();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::latest()->get();
        return view('backend.admin.coupon', compact('coupons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->couponObject->storeCoupon($request);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupons = Coupon::latest()->get();
        return view('backend.admin.coupon', compact('coupons', 'coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->couponObject->updateCoupon($request, $id);
        return redirect()->route('coupons.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->couponObject->destroyCoupon($id);
        return redirect()->route('coupons.index');
    }
}
