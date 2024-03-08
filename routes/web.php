<?php

use App\Http\Controllers\ListaTareasController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/lista-tareas', [ListaTareasController::class, 'index'])->name('index.tareas');
Route::get('/lista-tareas/create', [ListaTareasController::class, 'create'])->name('create.tareas');
Route::post('/lista-tareas/store', [ListaTareasController::class, 'store'])->name('store.tareas');
Route::get('/lista-tareas/edit/{id}', [ListaTareasController::class, 'edit'])->name('edit.tareas');
Route::post('/lista-tareas/save/{id}', [ListaTareasController::class, 'save'])->name('save.tareas');
Route::get('/lista-tareas/eliminar/{id}', [ListaTareasController::class, 'deleted'])->name('delete.tareas');
