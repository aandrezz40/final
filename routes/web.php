<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CategoriaController;
use App\Models\Categoria;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[ProductoController::class,'home'])->name('home');
Route::post('/home',[ProductoController::class,'createProducto'])->name('agregarProducto');
Route::get('/home/edit{id}',[ProductoController::class,'updateProducto'])->name('editarProducto');
Route::get('/home/delete/{id}',[ProductoController::class,'destroyProducto'])->name('eliminarProducto');

//Controlador de proveedor
Route::get('/proveedor',[ProveedorController::class,'index'])->name('proveedor');
Route::post('/proveedor',[ProveedorController::class,'createProveedor'])->name('agregarProveedorr');
Route::get('/proveedor/edit{id}',[ProveedorController::class,'updateProveedor'])->name('editarProveedor');
Route::get('/proveedor/delete/{id}',[ProveedorController::class,'deleteProveedor'])->name('eliminarProveedor');


//Controlador de categoria
Route::get('/categoria',[CategoriaController::class,'index'])->name('categoria');
Route::post('/categoria',[CategoriaController::class,'createCategory'])->name('createCategory');
Route::get('/categoria/edit{id}',[CategoriaController::class,'setCategory'])->name('editarCategoria');
Route::get('/categoria/delete/{id}',[CategoriaController::class,'deleteCategory'])->name('eliminarCategoria');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
