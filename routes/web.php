<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// LAS RUTAS PRINCIPALES DE CRUD [CREATE READ UPDATE DELETE]
Route::get('/create', function () { return view('pages/create');})->name('user.create');
Route::get('/read', [UserController::class, 'read'])->name('user.read');
Route::get('/update', function () { return view('pages/update'); })->name('user.update');
Route::get('/delete', function () { return view('pages/delete'); })->name('user.delete');

// Para Crear Usuarios
Route::post('/save', [UserController::class, 'save'])->name('save');
// Para Borrar Usuarios
Route::delete('/delete/{id}',[UserController::class, 'delete'])->name('delete');
// Para editar
Route::get('/update/{id}',[UserController::class, 'editform'])->name('editform');
Route::patch('/edit/{id}',[UserController::class, 'edit'])->name('edit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
