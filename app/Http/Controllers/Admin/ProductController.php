<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Model\Category;
use App\Model\Color;
use App\Model\Product;
use App\Model\ProductCategory;
use App\Model\ProductColor;
use App\Model\ProductPhoto;
use App\Model\ProductSize;
use App\Model\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $productObject;

    public function __construct()
    {
        $this->productObject = new Product();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('backend.admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $sizes      = Size::orderBy('name', 'asc')->get();
        $colors     = Color::orderBy('name', 'asc')->get();
        return view('backend.admin.product.create', compact('categories', 'sizes', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $this->productObject->storeProduct($request);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product    = Product::findOrFail($id);
        $product_size = ProductSize::where('product_id', $id)->select('size_id')->get();
        $product_color = ProductColor::where('product_id', $id)->select('color_id')->get();
        $product_category = ProductCategory::where('product_id', $id)->select('category_id')->get();
        $product_photos = ProductPhoto::where('product_id', $id)->select('photo','id')->get();

        $product_sizes = array();
        $product_colors = array();
        $product_categories = array();

        foreach ($product_size as $key => $value) {

            array_push($product_sizes, $value->size_id);
        }

        foreach ($product_color as $key => $value) {

            array_push($product_colors, $value->color_id);
        }

        foreach ($product_category as $key => $value) {

            array_push($product_categories, $value->category_id);
        }

        $categories = Category::orderBy('name', 'asc')->get();
        $sizes      = Size::orderBy('name', 'asc')->get();
        $colors     = Color::orderBy('name', 'asc')->get();
        return view('backend.admin.product.edit', compact('categories', 'sizes', 'colors', 'product_sizes', 'product_colors', 'product_categories', 'product', 'product_photos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);
        $this->productObject->updateProduct($request, $id);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productObject->destroyProduct($id);
        return redirect()->route('products.index');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $product = ProductPhoto::findOrFail($id);
        if (file_exists($product->photo)) unlink($product->photo);
        $product->delete();
    }
}
