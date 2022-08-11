@extends('layouts.app');

@section('titulo')
    {{ $post->titulo }}
@endsection

@section('contenido')
    <div class="container mx-auto flex">
        <div class="md:w-1/2 p-5">
            <img src="{{ asset('uploads') . '/' .$post->imagen }}" alt="Imagen del post {{ $post->titulo }}">
            <div class="p-3">
                <p>0 likes</p>
            </div>
            <div>
                <p class="font-bold"> {{ $post->user->username }}</p>
                <p class="text-sm text-gray-500"> 
                    {{ $post->created_at->diffForHumans() }}
                    {{-- {{ $post->created_at->format('d-m-Y') }} --}}
                </p>
                <p class="mt-5">
                    {{ $post->descripcion }}
                </p>
            </div>
        </div>
        
        <div class="md:w-1/2">
            2
        </div>        
    </div>
@endsection