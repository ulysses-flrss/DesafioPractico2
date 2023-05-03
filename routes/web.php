<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;
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


// Rutas para Usuario aún no autenticado
Route::get('/', function () {
    return view('login');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/register', function () {
    return view('register');
})->name('client.register');

Route::post('/register', [ClientController::class, 'store'])->name('register.client');


// Rutas de Interfaz Publica
Route::get('products/listar', [ClientController::class, 'listarProductos'] )->middleware('auth:client')->name('client.listar');
Route::get('productos/comprar', [ClientController::class, 'carritoCompras'])->middleware('auth:client')->name('client.carrito');

// Rutas de Interfaz Administrativa
Route::resource('user', UserController::class)->middleware('auth');
Route::resource('product', ProductController::class)->middleware('auth');
Route::resource('sale', SaleController::class)->middleware('auth');
Route::resource('category', CategoryController::class)->middleware('auth');
Route::resource('client', ClientController::class)->middleware('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');