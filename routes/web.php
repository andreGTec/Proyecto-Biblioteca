<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\confirmarcompraController;
use App\Http\PerfilController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/important', [App\Http\Controllers\ImportantController::class, 'index'])->name('important');
Route::get('/precaucion', [App\Http\Controllers\PrecaucionController::class, 'index'])->name('precaucion');
Route::resource('libro', LibroController::class);
//Route::resource('registro', RegistroController::class);
Route::get('/catalogo', [App\Http\Controllers\CatalogoController::class, 'index'])->name('catalogo');
Route::get('/registro', [App\Http\Controllers\RegistroController::class, 'index'])->name('registro');
Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');


Auth::routes();
Route::get('/confirmarcompra', [App\Http\Controllers\confirmarcompraController::class, 'index'])->name('confirmarcompra');
Route::post('/confirmarcompraproceso', [App\Http\Controllers\confirmarcompraController::class, 'confirmarcompraproceso'])->name('confirmarcompraproceso');
