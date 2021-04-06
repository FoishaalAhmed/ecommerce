<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    private $generalObject;

    public function __construct()
    {
        $this->generalObject = new General();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generals = General::orderBy('name', 'asc')->get();
        return view('backend.admin.general', compact('generals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(General::$validateRule);
        $this->generalObject->storeGeneral($request);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\General  $general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(General::$validateRule);
        $this->generalObject->updateGeneral($request, $request->id);
        return redirect()->route('generals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\General  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->generalObject->destroyGeneral($id);
        return redirect()->back();
    }
}
