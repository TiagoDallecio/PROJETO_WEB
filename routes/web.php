<?php

use App\Http\Controllers\Xcontroller;
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

Route::get('/',[Xcontroller::class,'index']);

/*CRUD USER*/
Route::get('usuario/cadastro',[Xcontroller::class,'matricula']);
Route::post('usuario/cadastro',[Xcontroller::class,'store']);
Route::get('usuario/consulta',[Xcontroller::class,'db']); 
Route::get('usuario/atualizar/{user_id}',[Xcontroller::class,'edit']);
Route::put('usuario/atualizar/{user_id}',[Xcontroller::class,'update']);

/*CRUD CURSO*/
Route::get('curso/cadastro',[Xcontroller::class,'cadcurso']);
Route::post('curso/cadastro',[Xcontroller::class,'cstore']);
Route::get('curso/consulta',[Xcontroller::class,'cdb']);

//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
