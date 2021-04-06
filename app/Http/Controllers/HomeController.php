<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (@Auth::user()->hasRole(['Admin'])) {

            return redirect(route('admin.dashboard'));

        } else {

            $checkout = Session::get('checkout');

            if ($checkout) {

                Session::forget('checkout');

                return redirect()->route('checkout');

            } else {

                return redirect(route('user.dashboard'));
            }
            

            
        }
    }
}
