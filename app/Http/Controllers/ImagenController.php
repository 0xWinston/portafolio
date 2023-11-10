<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    //Metodo para procesar las imagenes que se suban
    public function store(Request $request){
        $imagen = $request->file('file');
        $nombreImagen = Str::uuid().'.'.$imagen->extension();

        //Intervention Image
        $imagenServidor = Image::make($imagen)->fit(300,300);
        //Mover imagen al servidor
        $imagenPath = public_path('uploads').'/'.$nombreImagen;
        $imagenServidor->save($imagenPath);

        return response()->json(['imagen' => $nombreImagen]);
    }
}
