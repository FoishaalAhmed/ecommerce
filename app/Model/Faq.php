<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class Faq extends Model
{
    protected $fillable = [
        'title', 'text',
    ];

    public static $validateRule = [
        'title' => 'required|string|max:255',
        'text' => 'required|string',
    ];

    public function storeFaq(Object $request)
    {
        $this->title = $request->title;
        $this->text  = $request->text;
        $storeFaq    = $this->save();

        $storeFaq ?
            Session::flash('message', 'Faq Created Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function updateFaq(Object $request, Int $id)
    {
        $faq        = $this::findOrFail($id);
        $faq->title = $request->title;
        $faq->text  = $request->text;
        $updateFaq  = $faq->save();

        $updateFaq ?
            Session::flash('message', 'Faq Updated Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyFaq(Int $id)
    {
        $faq       = $this::findOrFail($id);
        $deleteFaq = $faq->delete();

        $deleteFaq ?
            Session::flash('message', 'Faq Deleted Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
