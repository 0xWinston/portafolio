@extends('layouts.app')

@section('titulo')
    Añadir un proyecto
@endsection

@section('contenido')
    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    @endpush

    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{route('imagenes.store')}}" 
            method="POST" 
            enctype="multipart/form-data" 
            id="dropzone" 
            class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf   
            </form>
        </div>
        <div class="md:w-1/2 p-6 bg-slate-200 rounded-lg shadow-xl mt-10 md:mt-0">
                <form action="{{route('posts.store')}}" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">
                            Título
                        </label>
                        <input type="text" id="titulo" name="titulo" placeholder="Título de tu publicación"
                        class="border p-3 w-full rounded-lg @error('titulo') border-red-500" @enderror value="{{ old('titulo') }}">
                        @error('titulo')
                            <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>                        
                        @enderror
                    </div>
        
                    <div class="mb-5">
                        <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
                            Descripción del proyecto
                        </label>
                        <textarea id="descripcion" name="descripcion" placeholder="Descripción de tu publicación"
                            class="border p-3 w-full rounded-lg  @error('descripcion') border-red-500" @enderror value="{{ old('descripcion') }}">
                        </textarea>
                        @error('descripcion')
                            <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>                        
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="tecnologias" class="mb-2 block uppercase text-gray-500 font-bold">
                            Tecnologías utilizadas en el proyecto
                        </label>
                        <textarea id="tecnologias" name="tecnologias" placeholder="Descripción de las tecnologias del proyecto"
                            class="border p-3 w-full rounded-lg  @error('tecnologias') border-red-500" @enderror value="{{ old('tecnologias') }}">
                        </textarea>
                        @error('tecnologias')
                            <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>                        
                        @enderror
                    </div>

                    <div class="mb-5">
                        <input type="hidden" id="imagen" name="imagen"
                        value="{{ old('imagen') }}">
                        @error('imagen')
                            <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>                        
                        @enderror
                    </div>
        
                    <input type="submit"
                    value="Crear"
                    class="bg-sky-900 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        
                </form>
        </div>
    </div>
@endsection