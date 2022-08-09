@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection()
@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12  p-5">
            <img src="{{ asset('img/registrar.jpg') }} " alt="Imagen registro usuarios" srcset="">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="">
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input type="text" name="name" id="name" class="border p-3 w-full rounded-lg" placeholder="Tu nombre">
                </div>
                <div class="mb-5">
                    <label for="userName" class="mb-2 block uppercase text-gray-500 font-bold">
                        UserName
                    </label>
                    <input type="text" name="userName" id="userName" class="border p-3 w-full rounded-lg" placeholder="Tu nombre de usuario">
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="email" name="email" id="email" class="border p-3 w-full rounded-lg" placeholder="Tu email de registro">
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input type="password" name="password" id="password" class="border p-3 w-full rounded-lg" placeholder="Genera tu password">
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Password
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="border p-3 w-full rounded-lg" placeholder="Repite tu password">
                </div>
                <input type="submit" value="Crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">               
            </form>
        </div>
    </div>
@endsection()
