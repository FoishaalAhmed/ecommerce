<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\General;
use App\Model\Product;
use App\Model\ProductCategory;
use App\Model\ProductColor;
use App\Model\ProductPhoto;
use App\Model\ProductReview;
use App\Model\ProductSize;
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

    public function products($category_id = 0, $category_name)
    {
        $categories = $this->categoryObject->getAllCategoryWithParent();
        $highestPrice = Product::orderBy('current_price', 'desc')->first();
        $lowestPrice  = Product::orderBy('current_price', 'asc')->first();

        if ($category_id == 0) {

            $products = $this->productObject->getAllProduct();
            $category = '';

        } else {

            $category = Category::where('id', $category_id)->firstOrFail()->name;
            $products = $this->productObject->getProductByCategory($category_id);
        }
        
        
        return view('frontend.products', compact('products', 'category', 'categories', 'highestPrice', 'lowestPrice'));
    }

    public function product($slug)
    {
        $productSizeObject     = new ProductSize();
        $productColorObject    = new ProductColor();
        $productCategoryObject = new ProductCategory();

        $product           = Product::where('slug', $slug)->firstOrFail();
        $productPhotos     = ProductPhoto::where('product_id', $product->id)->select('photo')->get();
        $productCategories = $productCategoryObject->getProductCategories($product->id);
        $productSizes      = $productSizeObject->getProductSizes($product->id);
        $productColors     = $productColorObject->getProductColors($product->id);

        $categories = array();
        
        foreach ($productCategories as $key => $value) {

            array_push($categories, $value->id);
        }

        $relatedProducts = $this->productObject->getRelatedProducts($categories, $product->id);
        $productReviews  = ProductReview::where('product_id', $product->id)->get();
        $deliveryTime    = General::where('name', 'delivery-time')->first();
        $returnPolicy    = General::where('name', 'return-policy')->first();
        return view('frontend.product', compact(
            'product', 'productPhotos', 'productCategories', 
            'productSizes', 'productColors', 'relatedProducts', 
            'productReviews', 'deliveryTime', 'returnPolicy'));
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
