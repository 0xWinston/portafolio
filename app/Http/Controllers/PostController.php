<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    //Metodo para que solo los usuarios autenticados puedan ver este controlador
    public function __construc(){
        $this->middleware(['auth'])->except('show', 'index');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        //Validar el formulario
        $this->validate($request, ['titulo' => 'required|max:255', 'descripcion' => 'required', 'tecnologias' => 'required']);
        //Guardar en bd
        if($request->imagen == null){
            Post::create([
                'titulo'=>$request->titulo,
                'descripcion'=>$request->descripcion,
                'tecnologias'=>$request->tecnologias,
                'imagen'=>'no-disponible.jpg',
            ]);
        } else {
            Post::create([
                'titulo'=>$request->titulo,
                'descripcion'=>$request->descripcion,
                'tecnologias'=>$request->tecnologias,
                'imagen'=>$request->imagen,
            ]);
        }
        //Response
        return redirect()->route('posts.proyectos');
    }

    public function destroy(Post $post){
        //Autorizar
        //$this->authorize('delete', $post);
        //Eliminar
        $post->delete();
        if($post->imagen != 'no-disponible.jpg'){
            $imagen_path = public_path('uploads/', $post->imagen);
            if(File::exists($imagen_path)){
                unlink($imagen_path);
            }
        }
        //Redireccionar
        return redirect()->route('posts.proyectos');
    }

    public function proyectosFeed(){
        $posts = Post::orderBy('posts.created_at', 'desc')->paginate();

        return view('posts.proyectos', [
            'posts' => $posts
        ]);
    }
}
