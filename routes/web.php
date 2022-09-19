<?php
use App\Http\Controllers\ProductosController;
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
    return view('principal');
});



//PRODUCTOS
Route::get('/Productos/registro',[ProductosController::class,'create'])->name('productos.registro');
Route::post('/Productos/guardar',[ProductosController::class,'guardar'])->name('productos.guardar');
Route::get('/Productos/list',[ProductosController::class,'list'])->name('productos.list');
Route::get('/Productos/edit/{iden}',[ProductosController::class,'edit'])->name('productos.edit');
Route::put('Productos/{product}', [ProductosController::class, 'update'])->name('productos.update');
Route::get('Productos/delete{iden}', [ProductosController::class, 'delete'])->name('productos.delete');
