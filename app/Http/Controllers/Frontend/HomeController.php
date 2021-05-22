<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Faq;
use App\Model\FrontCategoryShow;
use App\Model\Product;
use App\Model\SiteReach;
use App\Model\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categoryShowObject = new FrontCategoryShow();
        $productObject    = new Product();

        if (SiteReach::where('date', date('Y-m-d'))->first()) {
            SiteReach::where('date', date('Y-m-d'))->increment('reach');
        } else {
            $siteReach = new SiteReach();
            $siteReach->date = date('Y-m-d');
            $siteReach->reach = 1;
            $siteReach->save();
        }

        $sliders  = Slider::take(3)->get();
        $products = Product::inRandomOrder()->latest()->take(8)->get();
        $upcomingProducts = $productObject->getProductByCategory($category_id = 10, $limit = 8);
        $fourCategories = $categoryShowObject->getFrontCategoryShow($limit = 4, $type= 1)->toArray();
        $lastCategories = $categoryShowObject->getFrontCategoryShow($limit = 1, $type= 2)->toArray();
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
