<?php

namespace App\Http\Controllers;

use App\Model\ProductReview;
use Illuminate\Http\Request;
use Validator;

class ProductReviewController extends Controller
{
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

            $reviewObject = new ProductReview();

            $reviewObject->storeReview($request);

            $success_output = '<div class="alert alert-success"> Review Successful! </div>';
        }

        $output = array(

            'error'   => $error_array,
            'success' => $success_output
        );

        echo json_encode($output);
    }
}
