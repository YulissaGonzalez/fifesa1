<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\VacacionesController;
use App\Http\Controllers\FiniquitosController;

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


Route::get('empleados/create',[EmpleadosController::class, 'create']);
Route::resource('empleados',EmpleadosController::class);
Route::get('/empleados/{id}/editempleado', [EmpleadosController::class, 'edit'])->name('empleados.edit');

Route::get('vacaciones/create',[VacacionesController::class, 'create']);
Route::resource('vacaciones',VacacionesController::class);

Route::get('finiquitos/create',[FiniquitosController::class, 'create']);
Route::resource('finiquitos',FiniquitosController::class);
Route::get('delete/{id}',[FiniquitosController::class, 'destroy']);
Route::get('/finiquitos/{id}/editfiniquito', [FiniquitosController::class, 'edit'])->name('finiquitos.edit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
