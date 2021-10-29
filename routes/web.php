<?php

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
    return view('inicio');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::view('/inicio', 'inicio');
####################################################Use App\Http\Controllers\InicioController;
######################################################Route::get( 'inicio',[ InicioController::class, 'index'])->name('inicio.index');
#################################################Route::post( 'inicio',[ InicioController::class, 'store'])->name('inicio.store');

Route::view('/nosotros', 'nosotros');
Route::middleware(['auth:sanctum', 'verified'])->get('/register', function () {
    return view('register');
})->name('register');

########################################################CRUD DE VENTAS

Use App\Http\Controllers\CompraController;
Route::get( '/ventas', [ CompraController::class, 'ventas' ] );
Route::get( '/mostrarVentas/{id}', [ CompraController::class, 'mostrar' ] );
Route::middleware(['auth:sanctum', 'verified'])
->get('/adminVentas',[ CompraController::class, 'index'])
->name('adminVentas');
Route::middleware(['auth:sanctum', 'verified'])->get('/agregarVenta', [ CompraController::class, 'create' ] )->name('agregarVenta');
Route::middleware(['auth:sanctum', 'verified'])->post('/agregarVenta', [ CompraController::class, 'store' ])->name('agregarVenta');
Route::middleware(['auth:sanctum', 'verified'])->get('/modificarVenta/{id}', [ CompraController::class, 'edit' ])->name('modificarVenta');
Route::middleware(['auth:sanctum', 'verified'])->put('/modificarVenta', [ CompraController::class, 'update' ])->name('modificarVenta');
Route::middleware(['auth:sanctum', 'verified'])->get('/eliminarVenta/{id}', [ CompraController::class, 'confirmar' ] )->name('eliminarVenta');
Route::middleware(['auth:sanctum', 'verified'])->delete('/eliminarVenta', [ CompraController::class, 'destroy' ] )->name('eliminarVenta');


########################################################CRUD DE ALQUILER

Use App\Http\Controllers\RentaController;
Route::get( '/alquiler', [ RentaController::class, 'alquiler' ] );
Route::get( '/mostrarAlquiler/{id}', [ RentaController::class, 'mostrar' ] );
Route::middleware(['auth:sanctum', 'verified'])->get('/adminAlquileres', [ RentaController::class, 'index' ] )->name('adminAlquileres');
Route::middleware(['auth:sanctum', 'verified'])->get('/agregarAlquiler', [ RentaController::class, 'create' ] )->name('agregarAlquiler');
Route::middleware(['auth:sanctum', 'verified'])->post('/agregarAlquiler', [ RentaController::class, 'store' ])->name('agregarAlquiler');
Route::middleware(['auth:sanctum', 'verified'])->get('/modificarAlquiler/{id}', [ RentaController::class, 'edit' ])->name('modificarAlquiler');
Route::middleware(['auth:sanctum', 'verified'])->put('/modificarAlquiler', [ RentaController::class, 'update' ])->name('modificarAlquiler');
Route::middleware(['auth:sanctum', 'verified'])->get('/eliminarAlquiler/{id}', [ RentaController::class, 'confirmar' ] )->name('eliminarAlquiler');
Route::middleware(['auth:sanctum', 'verified'])->delete('/eliminarAlquiler', [ RentaController::class, 'destroy' ] )->name('eliminarAlquiler');