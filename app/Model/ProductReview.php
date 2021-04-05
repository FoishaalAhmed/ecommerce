<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    protected $fillable = [

        'name', 'email', 'product_id', 'star', 'review_text', 'status',
    ];

    public function storeReview(Object $request)
    {
        $this->name        = $request->name;
        $this->email       = $request->email;
        $this->product_id  = $request->product_id;
        $this->star        = $request->star;
        $this->review_text = $request->review_text;
        $this->status      = 0;
        $this->save();
    }
}
