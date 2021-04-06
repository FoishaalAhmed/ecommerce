<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $productObject       = new Product();

        $menProducts         = $productObject->getMenProducts();
        $kidProducts         = $productObject->getKidProducts();
        $womenProducts       = $productObject->getWomenProducts();
        $mugProducts         = $productObject->getMugProducts();
        $mobileCoverProducts = $productObject->getMobileCoverProducts();
        $recentProducts      = $productObject->getAllProduct();
        $sliders             = Slider::take(5)->get();

        // echo "<pre>";
        // print_r($mens_products);
        // echo "</pre>";
        return view('frontend.index', compact('menProducts', 'kidProducts', 'womenProducts', 'mugProducts', 'mobileCoverProducts', 'recentProducts', 'sliders'));
    }
}
