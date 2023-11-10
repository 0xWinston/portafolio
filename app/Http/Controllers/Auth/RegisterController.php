<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //Metodo index
    public function index(){
        return view('auth.register');
    }

    //Metodo para registrar un nuevo usuario
    public function store(Request $request){

        //Validaciones antes de guardar
        $this->validate($request, [
            'email' => ['required', 'email', 'unique:users', 'max:100'],
            'password'=> ['required', 'confirmed', 'min:6']
        ]);

        User::create([
            'email' => strtolower($request->email),
            'password'=> Hash::make($request->password)
        ]);

        //Opcion 1 para autenticar al usuario
        auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        //Opcion 2 para autenticar al usuario
        //auth()->attempt($request->only('email', 'password'));
        
        return redirect()->route('posts.proyectos');
    }

}
