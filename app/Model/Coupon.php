<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class Coupon extends Model
{
    protected $fillable = [
        'number', 'expire', 'amount', 'percent',
    ];

    public static $validateRule = [
        'number' => ['string', 'required', 'max:10'],
        'expire' => ['date', 'required'],
        'amount' => ['numeric', 'required'],
        'percent' => ['numeric', 'nullable'],
    ]; 

    public function storeCoupon(Object $request)
    {
        $this->number  = $request->number ;
        $this->expire  = date('Y-m-d', strtotime($request->expire)) ;
        $this->amount  = $request->amount ;
        $this->percent = $request->percent ;
        $storeCoupon   = $this->save();

        $storeCoupon 
        ? Session::flash('message', 'Coupon Created Successfully!') 
        : Session::flash('message', 'Something Went Wrong!') ;
    }

    public function updateCoupon(Object $request, Int $id)
    {
        $coupon = $this::findOrFail($id);
        $coupon->number  = $request->number ;
        $coupon->expire  = date('Y-m-d', strtotime($request->expire)) ;
        $coupon->amount  = $request->amount ;
        $coupon->percent = $request->percent ;
        $updateCoupon   = $coupon->save();

        $updateCoupon 
        ? Session::flash('message', 'Coupon Updated Successfully!') 
        : Session::flash('message', 'Something Went Wrong!') ;
    }

    public function destroyCoupon(Int $id)
    {
        $coupon = $this::findOrFail($id);
        $deleteCoupon   = $coupon->delete();

        $deleteCoupon 
        ? Session::flash('message', 'Coupon Deleted Successfully!') 
        : Session::flash('message', 'Something Went Wrong!') ;
    }
}
