<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Combo;
use App\Models\Company;
use App\Models\Product;
use App\Models\Taxonomy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $products_oferta = Product::where('oferta', '=', 1)->get();
        $combos = Combo::limit(4)->get();
        $company = Company::first();
        return view('home',compact('categories','products_vendidos','combos','products_oferta','company'));
    }

    public function tienda(Request $request)
    {
        $products = Product::query();

        // 🔍 BUSCADOR POR NOMBRE
        if ($request->filled('q')) {
            $products->where('name', 'like', '%' . $request->q . '%');
        }

        // 📂 CATEGORÍA
        if ($request->filled('category')) {
            $products->where('taxonomy_id', $request->category);
        }

        // 🏷️ MARCA
        if ($request->filled('brand')) {
            $products->where('brand_id', $request->brand);
        }

        // 💰 PRECIO
        if ($request->filled('price')) {
            $products->where('price', '<=', $request->price);
        }

        return view('store', [
            'products'   => $products->latest()->paginate(12)->withQueryString(),
            'categories' => Taxonomy::all(),
            'brands'     => Brand::all(),
            'company'    => Company::first(),
        ]);
    }


    public function contact()
    {
        $company = Company::first();
        return view('contact', compact('company'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::raw(
            "Nombre: {$request->name}\nEmail: {$request->email}\n\n{$request->message}",
            function ($mail) use ($request) {
                $mail->to(config('mail.from.address'))
                     ->subject('Contacto: '.$request->subject);
            }
        );

        return back()->with('success', 'Mensaje enviado correctamente.');
    }

    public function blog()
    {
        $company = Company::first();
        return view('blog', compact('company'));
    }
}
