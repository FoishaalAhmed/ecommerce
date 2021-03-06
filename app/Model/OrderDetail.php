<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class OrderDetail extends Model
{
    

    public function getOrderDetails(Int $id)
    {
        $orderDetails = DB::table('order_details')
                            ->leftJoin('products', 'order_details.product_id', '=', 'products.id')
                            ->where('order_details.order_id', $id)
                            ->select('order_details.*', 'products.name', 'products.cover')
                            ->get();
        return $orderDetails;
    }
}
