<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Model\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $pageObject;

    public function __construct()
    {
        $this->pageObject = new Page();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('created_at', 'desc')->get();
        return view('backend.admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $this->pageObject->storePage($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::FindOrFail($id);
        return view('backend.admin.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
        $this->pageObject->updatePage($request, $id);
        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->pageObject->destroyPage($id);
        return redirect()->back();
    }
}
