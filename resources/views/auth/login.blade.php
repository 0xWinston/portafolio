@extends('layouts.app')

@section('titulo')
    Ingresar
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-4/12 bg-slate-200 p-6 rounded-lg shadow-lg">
        <form method="POST" action="{{ route('login') }}"> 
            @csrf

            @if(session('status'))
                <div class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{session('status')}}
                </div>
            @endif

            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Correo electrónico
                </label>
                <input type="email" id="email" name="email" placeholder="Tu correo electrónico"
                class="border p-3 w-full rounded-lg @error('email') border-red-500" @enderror value="{{ old('email') }}">
                @error('email')
                    <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>                        
                @enderror
            </div>

            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Contraseña
                </label>
                <input type="password" id="password" name="password" placeholder="Tu contraseña"
                class="border p-3 w-full rounded-lg  @error('password') border-red-500" @enderror value="{{ old('password') }}">
                @error('password')
                    <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>                        
                @enderror
            </div>

            <input type="submit"
            value="Iniciar Sesión"
            class="bg-sky-900 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

        </form>

    </div>
</div>
@endsection