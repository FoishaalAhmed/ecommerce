<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryShowRequest;
use App\Model\Category;
use App\Model\FrontCategoryShow;
use Illuminate\Http\Request;

class FrontCategoryShowController extends Controller
{
    private $categoryShowObject;
    private $categoryObject;

    public function __construct()
    {
        $this->categoryShowObject = new FrontCategoryShow();
        $this->categoryObject = new Category();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryShows = $this->categoryShowObject->getFrontCategoryShow();
        $categories = $this->categoryObject->getAllCategoryWithParent();
        return view('backend.admin.categoryShow', compact('categoryShows', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryShowRequest $request)
    {
        $this->categoryShowObject->storeCategoryShow($request);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\CategoryShow  $categoryShow
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryShow  = FrontCategoryShow::findOrFail($id);
        $categoryShows = $this->categoryShowObject->getFrontCategoryShow();
        $categories = $this->categoryObject->getAllCategoryWithParent();
        return view('backend.admin.CategoryShow', compact('categoryShows', 'categoryShow', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\CategoryShow  $categoryShow
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryShowRequest $request, $id)
    {
        //dd($request);
        $this->categoryShowObject->updateCategoryShow($request, $id);
        return redirect()->route('categoryShows.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\CategoryShow  $categoryShow
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->categoryShowObject->destroyCategoryShow($id);
        return redirect()->route('categoryShows.index');
    }
}
