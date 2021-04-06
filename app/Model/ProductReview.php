<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class ProductReview extends Model
{
    protected $fillable = [

        'name', 'email', 'product_id', 'star', 'review_text', 'status',
    ];

    public function getAllReviews()
    {
        $reviews = DB::table('product_reviews')
                            ->leftJoin('products', 'product_reviews.product_id', '=', 'products.id')
                            ->select('product_reviews.*', 'products.name as product')
                            ->get();
        return $reviews;
    }

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

    public function changeReviewStatus(Int $id, Int $status)
    {
        $review = $this::findOrFail($id);

        $review->status = $status;
        $changeReviewStatus = $review->save();

        $changeReviewStatus ?
            Session::flash('message', 'Review Status Changed Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
