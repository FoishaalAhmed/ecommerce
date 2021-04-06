<?php

namespace App\Http\Controllers;

use App\Model\ProductReview;
use Illuminate\Http\Request;
use Validator;

class ProductReviewController extends Controller
{
    private $reviewObject;

    public function __construct()
    {
        $this->reviewObject = new ProductReview();
    }

    public function index()
    {
        $reviews = $this->reviewObject->getAllReviews();
        return view('backend.admin.review', compact('reviews'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [

            'name'        => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'product_id'  => 'required|numeric',
            'star'        => 'nullable|numeric',
            'review_text' => 'required|string|',

        ]);

        $error_array = array();
        $success_output = '';

        if ($validation->fails()) {

            foreach ($validation->messages()->getMessages() as $field_name => $messages) {

                $error_array[] = $messages;
            }

        } else {

            

            $this->reviewObject->storeReview($request);

            $success_output = '<div class="alert alert-success"> Review Successful! </div>';
        }

        $output = array(

            'error'   => $error_array,
            'success' => $success_output
        );

        echo json_encode($output);
    }

    public function status(Int $id, Int $status)
    {
        $this->reviewObject->changeReviewStatus($id,$status);
        return back();
    }
}
