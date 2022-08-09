<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Protegemos el acceso a la página con el middlewere auth
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        // dd('Desde muro');
        // con auth()->user autentifico al usuario
        // dd(auth()->user());
        return view('dashboard');
    }
}
