<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use App\Model\CategoryProduct;
use App\Model\ColorProduct;
use App\Model\Faq;
use App\Model\ProductPhoto;
use App\Model\ProductReview;
use App\Model\ProductSize;
use App\Model\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productObject;
    private $categoryObject;

    public function __construct()
    {
        $this->productObject  = new Product();
        $this->categoryObject = new Category();
    }

    public function products($category_id, $category_name)
    {
        $categories   = $this->categoryObject->getAllCategoryWithParent();
        $highestPrice = Product ::orderBy('current_price', 'desc')->first();
        $lowestPrice  = Product ::orderBy('current_price', 'asc')->first();
        $category     = Category::where('id', $category_id)->firstOrFail()->name;
        $products     = $this->productObject->getProductByCategory($category_id, $limit = 20);
        
        return view('frontend.products', compact('products', 'category', 'categories', 'highestPrice', 'lowestPrice'));
    }

    public function product($slug)
    {
        $productSizeObject     = new ProductSize();
        $productColorObject    = new ColorProduct();
        $productCategoryObject = new CategoryProduct();
        Product::where('slug', $slug)->increment('view');
        $product           = Product::where('slug', $slug)->firstOrFail();
        $productPhotos     = ProductPhoto::where('product_id', $product->id)->select('photo')->get();
        $productCategories = $productCategoryObject->getProductCategories($product->id);
        $productSizes      = $productSizeObject->getProductSizes($product->id);
        $productColors     = $productColorObject->getProductColors($product->id);
        $sizes = Size::select('name')->orderBy('name', 'asc')->get();

        $productSize = array();

        foreach ($productSizes as $key => $value) {

            array_push($productSize, $value->name);
        }

        $categories = array();
        
        foreach ($productCategories as $key => $value) {

            array_push($categories, $value->id);
        }

        $relatedProducts = $this->productObject->getRelatedProducts($categories, $product->id);
        $productReviews  = ProductReview::where('product_id', $product->id)->get();
        $faqText         = Faq::where('id', 3)->first();
        $faqs            = Faq::oldest()->take(5)->get();
        return view('frontend.product', compact(
            'product', 'productPhotos', 'productCategories', 
            'productSize', 'productColors', 'relatedProducts', 
            'productReviews',
            'faqs', 'faqText',
            'sizes'));
    }

    public function filter(Request $request)
    {
        $fetch_category = $request->categories;
        $priceStart   = $request->priceStart;
        $priceEnd     = $request->highestPrice;
        $categories   = $this->categoryObject->getAllCategoryWithParent();
        $highestPrice = Product::orderBy('current_price', 'desc')->first();
        $lowestPrice  = Product::orderBy('current_price', 'asc')->first();
        $category = '';

        $products     = $this->productObject->getFilteredProducts($fetch_category, $priceStart, $priceEnd);

        return view('frontend.filter', compact('products', 'category', 'categories', 'highestPrice', 'lowestPrice'));

        //echo json_encode($request->categories);
    }
}
