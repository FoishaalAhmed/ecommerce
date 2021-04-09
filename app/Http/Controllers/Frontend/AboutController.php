<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Page;
use App\Model\Product;
use App\Model\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = Page::where('slug', 'about-us')->first();
        $teams = Team::orderBy('priority', 'desc')->get();
        return view('frontend.about', compact('about', 'teams'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $categoryObject = new Category();
        $categories     = $categoryObject->getAllCategoryWithParent();
        $category       = '';
        $highestPrice   = Product::orderBy('current_price', 'desc')->first();
        $lowestPrice    = Product::orderBy('current_price', 'asc')->first();
        $products       = Product::orderby('name', 'asc')->where('name', 'like', '%' . $search . '%')->paginate(24);

        return view('frontend.products', compact('products', 'category', 'categories', 'highestPrice', 'lowestPrice'));
    }

    public function pages($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('frontend.common_page', compact('page'));
    }
}
