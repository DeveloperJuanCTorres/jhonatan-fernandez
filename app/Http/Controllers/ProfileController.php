<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $company = Company::first();
        $politicas = Policy::all();
        return view('profile', compact('company', 'politicas'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20'
        ]);

        auth()->user()->update($request->only('name','phone'));

        return back()->with('success','Datos actualizados');
    }

    public function password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8'
        ]);

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return back()->withErrors(['current_password' => 'Contraseña incorrecta']);
        }

        auth()->user()->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with('success','Contraseña actualizada');
    }
}
