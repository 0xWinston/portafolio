<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\ComentarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

Route::get('/about', function () {
    return view('posts.sobremi');
});

//Ruteo con sintaxis de controlador
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

//Ruteo de autentication
Route::post('/logout', [LogOutController::class, 'store'])->name('logout');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');


//Ruta para crear nueva publicacion
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

//Ruteo para Publicaciones
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//Ruteo para subir imagenes
Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');

//Ruteo para eliminar publicaciones
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

//Ruteo para los proyectos
Route::get('/posts/proyectos', [PostController::class, 'proyectosFeed'])->name('posts.proyectos');
