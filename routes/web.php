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

// usuarios y autenticación

Route::get('/usuarios/registrarse', [\App\Http\Controllers\AuthController::class, 'signupForm']);

Route::get('/usuarios/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginForm']);

Route::get('/usuarios/perfil/{username}', [\App\Http\Controllers\UsersController::class, 'profile']);

Route::get('/usuarios/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout']);

Route::get('/usuarios/editar/{id}', [\App\Http\Controllers\AuthController::class, 'updateForm']);

// fotos

Route::get('/fotos/subir', [\App\Http\Controllers\PhotosController::class, 'uploadForm'])
    ->middleware(['auth']);

Route::get('/fotos/{id}', [\App\Http\Controllers\PhotosController::class, 'view']);

Route::get('/fotos/editar/{id}', [\App\Http\Controllers\PhotosController::class, 'updateForm'])
    ->whereNumber('id');

Route::get('/fotos/eliminar/{id}', [\App\Http\Controllers\PhotosController::class, 'deleteForm'])
    ->whereNumber('id');

Route::post('/fotos/eliminar/{id}', [\App\Http\Controllers\PhotosController::class, 'deleteProcess'])
    ->whereNumber('id');

// noticias

Route::get('/noticias', [\App\Http\Controllers\NewsArticlesController::class, 'news']);

Route::get('/noticias/subir', [\App\Http\Controllers\NewsArticlesController::class, 'uploadForm'])
    ->middleware(['auth', 'admin', 'superadmin']);

Route::get('/noticias/{id}', [\App\Http\Controllers\NewsArticlesController::class, 'view']);

Route::get('/noticias/editar/{id}', [\App\Http\Controllers\NewsArticlesController::class, 'updateForm'])
    ->whereNumber('id');

Route::get('/noticias/eliminar/{id}', [\App\Http\Controllers\NewsArticlesController::class, 'deleteForm'])
    ->whereNumber('id');

Route::post('/noticias/eliminar/{id}', [\App\Http\Controllers\NewsArticlesController::class, 'deleteProcess'])
    ->whereNumber('id');

// Suscripciones

Route::get('/suscripciones', [\App\Http\Controllers\SubscriptionController::class, 'showPlans'])
    ->middleware(['auth']);

Route::get('/suscripciones/suscribirse/{id}', [\App\Http\Controllers\SubscriptionController::class, 'subscribe'])
    ->middleware(['auth']);

Route::get('/descargar-foto/{img_path}', [\App\Http\Controllers\PhotosController::class, 'download']);

Route::post('/suscripciones/cancelar/{id}', [\App\Http\Controllers\SubscriptionController::class, 'cancel'])
    ->middleware(['auth']);

// Admin

Route::get('/admin/usuarios', [\App\Http\Controllers\AdminController::class, 'users'])
    ->middleware(['auth', 'admin', 'superadmin']);

// Mercadopago

Route::get('/suscripciones/pago/success', [\App\Http\Controllers\MercadoPagoController::class, 'success']);

Route::get('/suscripciones/pago/pending', [\App\Http\Controllers\MercadoPagoController::class, 'pending']);

Route::get('/suscripciones/pago/failure', [\App\Http\Controllers\MercadoPagoController::class, 'failure']);

Route::get('/suscripciones/pago/{id}', [\App\Http\Controllers\MercadoPagoController::class, 'showForm']);

Route::post('/suscripcion/webhook', [\App\Http\Controllers\MercadoPagoWebhookController::class, 'subscribeNotification']);
