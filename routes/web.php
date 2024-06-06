<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::controller(PageController::class)->group(function() {
   route::get('/', 'home')->name('home');
   route::get('/blog', 'blog')->name('blog');
   route::get('/blog/{post:slug}', 'post')->name('post');
});

// Route::get('/', function () {
//     return view('welcome');
// });
// esta linea de codigo crea rutas tipicas para la accion de un controlador.
// Las rutas generadas son las siguientes:
// GET /post: Muestra una lista de todos los posts.
// GET /post/create: Muestra el formulario para crear un nuevo post.
// POST /post: Almacena un nuevo post en la base de datos.
// GET /post/{id}: Muestra un post específico según su ID.
// GET /post/{id}/edit: Muestra el formulario para editar un post existente.
// PUT/PATCH /post/{id}: Actualiza un post existente en la base de datos.
// DELETE /post/{id}: Elimina un post específico. 
Route::resource('post', PostController::class)->except(['show']); 
// el primer parametro hace referencia a la vista que contendra los resultados de la logica generada en el controlador
//el segundo argmunento es en donde se desarrollara la logica de de dicha rutas

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
