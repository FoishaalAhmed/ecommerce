<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Query;
use Illuminate\Http\Request;
use Session;

class QueryController extends Controller
{
    public function index()
    {
        $queries = Query::orderBy('created_at', 'desc')->get();
        return view('backend.admin.query', compact('queries'));
    }

    public function destroy($id)
    {
        $query = Query::findOrFail();
        $deleteQuery = $query->delete();

        $deleteQuery ?
            Session::flash('message', 'Query Deleted Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
