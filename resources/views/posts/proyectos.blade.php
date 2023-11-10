@extends('layouts.app')

@section('titulo')
    PROYECTOS
@endsection

@section('contenido')
    <section class="container mx-auto mt-10">
        @if ($posts->count())
            <div class="flex flex-col">
                @foreach ($posts as $post)
                    <div class="text-center bg-red-900 text-white text-base border-2 border-slate-300 rounded mt-3">
                        <h1 class="font-bold uppercase">
                            {{$post->titulo}}
                        </h1>
                        <div class="flex justify-around p-6">
                            <img src="{{asset('uploads/'.$post->imagen)}}" alt="Imagen {{$post->titulo}}" width="300px" height="300px">
                            <div class="">
                                <div class="ml-4 text-right text-white flex flex-col justify-center">
                                    <h2 class="font-bold uppercase">
                                        Descripción
                                    </h2>
                                    <p class=" text-sm">
                                        {{$post->descripcion}}
                                    </p>
                                </div>
                                <div class="ml-4 mt-3 text-right text-white flex flex-col justify-center">
                                    <h2 class="font-bold uppercase">
                                        Tecnologías utilizadas
                                    </h2>
                                    <p class=" text-sm">
                                        {{$post->tecnologias}}
                                    </p>
                                </div>
                                <div class="flex justify-around">
                                    @auth
                                        <form action="{{route('posts.destroy', $post)}}" method="POST">
                                            @method('DELETE')
                                            @csrf

                                            <input type="submit" value="Eliminar proyecto" class="bg-slate-500 hover:bg-slate-600 rounded p-2 text-white font-bold mt-5 mx-2">

                                        </form>
                                    @endauth
                                    @auth
                                        <form action="{{route('posts.destroy', $post)}}" method="POST">
                                            @method('DELETE')
                                            @csrf

                                            <input type="submit" value="Editar proyecto" class="bg-slate-500 hover:bg-slate-600 rounded p-2 text-white font-bold mt-5 mx-2">

                                        </form>
                                    @endauth
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-600 uppercase text-sm text-center font-bold">
                No hay información de proyectos
            </p>
        @endif
    </section>
@endsection
