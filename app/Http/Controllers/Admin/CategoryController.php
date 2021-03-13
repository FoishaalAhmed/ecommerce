<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryObject;
    public function __construct()
    {
        $this->categoryObject = new Category();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = $this->categoryObject->getAllCategoryWithParent();
        // echo "<pre>";
        // print_r($categories);
        // echo "</pre>";
        $categories = Category::orderBy('name', 'asc')->get();
        $parents    = Category::where('parent_id', 0)->orderBy('name', 'asc')->select('id', 'name')->get();
        return view('backend.admin.category', compact('categories', 'parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Category::$validateRule);
        $this->categoryObject->storeCategory($request);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category   = Category::findOrFail($id);
        $categories = Category::orderBy('name', 'asc')->get();
        $parents    = Category::where('parent_id', 0)->orderBy('name', 'asc')->select('id', 'name')->get();
        return view('backend.admin.category', compact('categories', 'category', 'parents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(Category::$validateRule);
        $this->categoryObject->updateCategory($request, $id);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->categoryObject->destroyCategory($id);
        return back();
    }
}