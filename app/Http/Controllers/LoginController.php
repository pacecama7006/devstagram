<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // dd('Autenticando');
        // dd($request->remember);
        // Validando información
        $this->validate($request,[
           'email' => 'required|email',
           'password' => 'required',
        ]);


        // Autenticando
        // En caso de que no se pueda autenticar, y también que recuerde credenciales
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            # code...
            return back()->with('mensaje', 'Email y/o password incorrectos');
        }
        // En caso de que si se autentifique
        return redirect()->route('posts.index', [
            'user' => Auth::User()->username
        ]);
    }
}
