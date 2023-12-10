<?php

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

Route::get('/', [\App\Http\Controllers\PhotosController::class, 'index']);

Route::get('/fotos/{id}', [\App\Http\Controllers\PhotosController::class, 'view'])
    ->whereNumber('id');

Route::get('/fotos/subir', [\App\Http\Controllers\PhotosController::class, 'uploadForm'])
    ->middleware(['auth']);

Route::get('/usuarios/registrarse', [\App\Http\Controllers\AuthController::class, 'signupForm']);

Route::get('/usuarios/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginForm']);

Route::get('/usuarios/perfil/{username}', [\App\Http\Controllers\UsersController::class, 'profile']);

Route::get('/usuarios/editar/{id}', [\App\Http\Controllers\AuthController::class, 'updateForm']);

Route::get('/usuarios/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout']);

// noticias

Route::get('/noticias/subir', [\App\Http\Controllers\NewsController::class, 'uploadForm'])
    ->middleware(['auth']);;
