<?php

namespace App\Http\Controllers;

use App\Models\Combo;
use App\Models\Company;
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
        $products_vendidos = Product::limit(5)->get();
        $products_oferta = Product::where('oferta', '=', 1)->get();
        $combos = Combo::all();
        $company = Company::first();
        return view('home',compact('categories','products_vendidos','combos','products_oferta','company'));
    }

    public function tienda()
    {
        $categories = Taxonomy::all();
        $products = Product::all();
        $company = Company::first();
        return view('store', compact('products','categories','company'));
    }

    public function contact()
    {
        $company = Company::first();
        return view('contact', compact('company'));
    }
}
