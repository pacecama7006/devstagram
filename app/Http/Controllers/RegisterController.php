<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /**
     * Función que nos permite
     * visualizar la vista register
     * 
     * @return registerView
     */
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd('Post');
        // Accedo a todos los valores
        // dd($request);
        // Accedo a propiedades del request
        // dd($request->get('name'));

        // Validación
        $this->validate($request, [
            'name'=> 'required|max:5',
            'userName' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required',
            'password_confirmation' => 'required'
        ]);

    }
}
