<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Product;
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

        // echo "<pre>";
        // print_r($mens_products);
        // echo "</pre>";
        return view('frontend.index', compact('menProducts', 'kidProducts', 'womenProducts', 'mugProducts', 'mobileCoverProducts'));
    }
}
