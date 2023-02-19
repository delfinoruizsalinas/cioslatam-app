<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ConocenosController;
use App\Http\Controllers\ComiteEjecutivoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [Controller::class, 'index']);

Route::controller(NoticiasController::class)->group(function(){
    Route::GET('noticias', 'index');
});

Route::controller(ConocenosController::class)->group(function(){
    Route::GET('conocenos', 'index');
});

Route::controller(ComiteEjecutivoController::class)->group(function(){
    Route::GET('comite-ejecutivo', 'index');
});

Route::controller(ContactoController::class)->group(function(){
    Route::GET('contacto', 'index');
});

Route::controller(PartnerController::class)->group(function(){
    Route::GET('partner-slider', 'index');
});

Route::controller(PartnersController::class)->group(function(){
    Route::GET('partners-registro', 'register');
    Route::GET('partners-resumen', 'page_resumen');
    Route::GET('partners-detalle/{id}', 'detalle');
});



Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
Auth::routes();

Route::get('logout', [HomeController::class, 'logout'])->name('logout');

Route::group(['middleware'=>'auth'],function(){
  // Descargar plantilla en word y subir escrito en pdf
    Route::controller(PostController::class)->group(function(){
        Route::get('/post-news', 'index');
    });  
});