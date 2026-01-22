<?php

namespace App\Http\Controllers;

use App\Models\Combo;
use App\Models\Product;
use App\Models\Taxonomy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Taxonomy::all();
        $products_vendidos = Product::limit(4)->get();
        $products_oferta = Product::where('oferta', '=', 1);
        $combos = Combo::all();
        return view('home',compact('categories','products_vendidos','combos','products_oferta'));
    }

    public function tienda()
    {
        $products = Product::all();
        return view('store', compact('products'));
    }

    public function contact()
    {
        return view('contact');
    }
}
