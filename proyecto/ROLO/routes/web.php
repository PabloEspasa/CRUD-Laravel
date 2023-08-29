<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

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

Route::view('/', 'index')->name('index');
Route::view('/carrito', 'carrito')->name('carrito');
Route::view('/quienes', 'quienes')->name('quienes');
Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos');
Route::post('/procesar_formulario', [ContactoController::class, 'procesarFormulario'])->name('procesar_formulario');

Route::resource('products', ProductController::class);
Route::get('categorias', [CategoriaController::class, 'index'])->name('categorias.index');

Auth::routes();
