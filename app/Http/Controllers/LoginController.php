<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // dd('Autenticando');
        // Validando información
        $this->validate($request,[
           'email' => 'required|email',
           'password' => 'required',
        ]);

        // Autenticando
        // En caso de que no se pueda autenticar
        if (!auth()->attempt($request->only('email', 'password'))) {
            # code...
            return back()->with('mensaje', 'Email y/o password incorrectos');
        }
        // En caso de que si se autentifique
        return redirect()->route('posts.index');
    }
}
