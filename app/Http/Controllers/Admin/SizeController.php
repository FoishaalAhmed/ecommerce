<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    private $size_object;

    public function __construct()
    {
        $this->size_object = new Size();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = size::orderBy('name', 'asc')->get();
        return view('backend.admin.size', compact('sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Size::$validateRule);
        $this->size_object->storeSize($request);
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(Size::$validateRule);
        $this->size_object->updateSize($request, $request->id);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->size_object->destroySize($id);
        return back();
    }
}
