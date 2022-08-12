@extends('layouts.app')

@section('titulo')
    Página principal
@endsection()
@section('contenido')
    @if ($posts->count())
    <div class="mx-5 grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($posts as $post)
            <div>
                <a href="{{ route('posts.show', ['post' => $post, 'user' => $post->user]) }}">
                    <img src="{{ asset('uploads') . '/' . $post->imagen }}" alt="Imagen del post {{ $post->titulo }} ">
                </a>
            </div>
        @endforeach
    </div>
    {{-- Creo paginación --}}
    <div class="my-10 px-5">
        {{ $posts->links() }}
    </div> 
    @else
        <p class="text-center">No hay posts. Comienza a seguir a alguién para poderte mostrar sus Posts</p>
    @endif

@endsection()