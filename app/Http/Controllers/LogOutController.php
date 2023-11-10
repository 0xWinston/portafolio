<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    //Finaliza la sesion del usuario
    public function store(){
        auth()->logout();
        return redirect()->route('posts.proyectos');
    }
}
