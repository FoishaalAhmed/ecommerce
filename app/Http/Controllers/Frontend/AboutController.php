<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Page;
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

    public function pages($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('frontend.common_page', compact('page'));
    }
}
