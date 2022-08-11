<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Protegemos el acceso a la página con el middlewere auth
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(User $user)
    {
        // dd('Desde muro');
        // con auth()->user autentifico al usuario
        // dd(auth()->user());
        // dd($user->username);

        // Selecciono los posts del usuario
        // $posts = Post::where('user_id', $user->id)->get();
        // Hago paginación
        $posts = Post::where('user_id', $user->id)->paginate(5);
        // Esta es otra forma de mostrar la paginación. No me gusta tanto
        // $posts = Post::where('user_id', $user->id)->simplePaginate(5);
        // dd($posts);

        return view('dashboard', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }
  
    public function create(){
        // dd('Creando posts');
        
        return view('posts.create');
    }


    public function store(Request $request)
    {
        // dd('Creando publicación');

        // Creamos la validación
        $this->validate($request,[
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        // Creo el post
        // Post::create([
        //     'titulo' => $request->titulo,
        //     'descripcion' => $request->descripcion,
        //     'imagen' => $request->imagen,
        //     'user_id' => auth()->user()->id
        // ]);

        // Otra forma para crear el post
        // $post = new Post();
        // $post->titulo = $request->titulo;
        // $post->descripcion = $request->descripcion;
        // $post->imagen = $request->imagen;
        // $post->user_id = auth()->user()->id;
        // $post->save();

        // Otra forma de almacenar datos utilizando las relaciones
        $request->user()->posts()->create([
                'titulo' => $request->titulo,
                'descripcion' => $request->descripcion,
                'imagen' => $request->imagen,
                'user_id' => auth()->user()->id
            ]);
        
        // Lo redirijo a su muro
        return redirect()->route('posts.index', auth()->user()->username);
    }
}
