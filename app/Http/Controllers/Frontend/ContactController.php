<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Query;
use Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function query(Request $request)
    {
        $validation = Validator::make($request->all(), [

            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email|max:255',
            'phone'   => 'required|string:max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|',

        ]);

        $error_array = array();
        $success_output = '';

        if ($validation->fails()) {

            foreach ($validation->messages()->getMessages() as $field_name => $messages) {

                $error_array[] = $messages;
            }
        } else {

            $query = new Query;

            $query->storeQuery($request);

            $success_output = '<div class="alert alert-success"> Query Send Successfully! </div>';
        }

        $output = array(

            'error'   => $error_array,
            'success' => $success_output
        );

        echo json_encode($output);
    }
}
