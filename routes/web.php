<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');


Route::post('/products/create', [App\Http\Controllers\Product::class, 'create'])->middleware('auth');
Route::get('/products/list', [App\Http\Controllers\Product::class, 'store'])->middleware('auth');
Route::delete('/products/{id}', [App\Http\Controllers\Product::class, 'destroy'])->middleware('auth');
Route::get('/products/edite/{id}', [App\Http\Controllers\Product::class, 'edite'])->middleware('auth');
Route::put('/products/update/{id}', [App\Http\Controllers\Product::class, 'update'])->middleware('auth');
Route::get('/products', function(){
    return view('products.create');
})->middleware('auth');
