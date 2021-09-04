<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {//funcion anonima
    return view('welcome');
})->middleware('auth');

// Route::get('/usuario', function(){
//     return "Hola compa, soy usuario!!!";
// });


// Route::get('/usuario/{usuario?}', function($usuario = null){
//     return "Hola " .$usuario;
// })->where('usuario', '[A-Za-z]+');


// Route::get('/usuario/{usuario?}', function($usuario = null){

//     if($usuario == null){
//         return 'Debe ingresar un nombre de usuario';
//     }
//     return dd($this);
// })->where('usuario', '[A-Za-z]+');


Route::get('/usuario/{usuario?}', 
    [PersonaController::class,'mostrar']
)->where('usuario', '[A-Za-z]+');

//rutas productos
Route::get('products',[ProductController::class, 'show']);

Route::get('/product/form/{id?}',[ProductController::class, 'form'])->name('product.form');

Route::post('/product/save', [ProductController::class, 'save'])->name('product.save');

Route::get('/product/delete/{id}',[ProductController::class, 'delete'])->name('product.delete');

//rutas marcas

Route::get('brands',[BrandController::class, 'show']);

Route::get('/brand/form/{id?}',[BrandController::class, 'form'])->name('brand.form');

Route::post('/brand/save', [BrandController::class, 'save'])->name('brand.save');

Route::get('/brand/delete/{id}',[BrandController::class, 'delete'])->name('brand.delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
