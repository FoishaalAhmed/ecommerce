<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Faq;
use App\Model\FrontCategoryShow;
use App\Model\Product;
use App\Model\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categoryShowObject = new FrontCategoryShow();
        $productObject    = new Product();

        $sliders  = Slider::take(3)->get();
        $products = Product::latest()->take(8)->get();
        $upcomingProducts = $productObject->getProductByCategory($category_id = 10, $limit = 8);
        $fourCategories = $categoryShowObject->getFrontCategoryShow($limit = 4, $type= 1)->toArray();
        $lastCategories = $categoryShowObject->getFrontCategoryShow($limit = 1, $type= 2)->toArray();

        // $categoryProducts = Category::with(['products' => function ($query) {
        //                                     $query->select('products.id', 'name', 'slug', 'current_price', 'previous_price', 'saving', 'cover')
        //                                     ->orderBy('products.created_at', 'DESC');
        //                                   }])->where('parent_id', 0)->take(5)->get();
                                          
        $categoryProducts = Category::where('parent_id', 0)->select('id', 'name')->take(5)->get();
        
        foreach($categoryProducts as $key => $value) { 
            
            $categoryProducts[$key]->products = $productObject->getProductByCategory($value->id, $limit = 8);
        }

        return view('frontend.index', compact('products', 'categoryProducts', 'sliders', 'fourCategories', 'lastCategories', 'upcomingProducts'));

        
    }

    public function faq()
    {
        $faqs = Faq::oldest()->get();
        return view('frontend.faq', compact('faqs'));
    }
}
