<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Faq;
use App\Model\Product;
use App\Model\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders  = Slider::take(5)->get();
        $products = Product::with('categories')->take(20)->get();
        $categoryProducts = Category::with(['products' => function ($query) {
                                            $query->select('products.id', 'name', 'slug', 'current_price', 'previous_price', 'saving', 'cover')
                                            ->orderBy('products.created_at', 'DESC');
                                          }])->where('parent_id', 0)->get();

        return view('frontend.index', compact('products', 'categoryProducts'));

        
    }

    public function faq()
    {
        $faqs = Faq::oldest()->get();
        return view('frontend.faq', compact('faqs'));
    }
}
