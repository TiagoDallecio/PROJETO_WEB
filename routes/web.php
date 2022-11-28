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

Route::get('usuario/cadastro',[Xcontroller::class,'matricula'])->middleware('admsec');
Route::post('usuario/cadastro',[Xcontroller::class,'store'])->middleware('admsec');
Route::get('usuario/consulta',[Xcontroller::class,'db'])->middleware('admsec'); 

Route::delete('/usuario/consulta/{id}',[Xcontroller::class,'destroy'])->middleware('admsec');


Route::get('usuario/atualizar/{id}',[Xcontroller::class,'edit']);
Route::post('usuario/atualizar/{id}',[Xcontroller::class,'update']);
Route::put('usuario/atualizar/{id}',[Xcontroller::class,'update']);

Route::get('usuario/cursos/{id}',[Xcontroller::class,'usercourses']);


/*CRUD CURSO*/
Route::get('curso/cadastro',[Xcontroller::class,'cadcurso'])->middleware('admsec');
Route::post('curso/cadastro',[Xcontroller::class,'cstore'])->middleware('admsec');

Route::get('curso/consulta',[Xcontroller::class,'cdb']);
Route::get('curso/consulta/{id}',[Xcontroller::class,'read']);

Route::get('/curso/atualizar/{id}',[Xcontroller::class,'cedit'])->middleware('admsec');
Route::post('/curso/atualizar/{id}',[Xcontroller::class,'cupdate'])->middleware('admsec');
Route::put('/curso/atualizar/{id}',[Xcontroller::class,'cupdate'])->middleware('admsec');

Route::delete('/curso/consulta/{id}',[Xcontroller::class,'cdestroy'])->middleware('admsec');

Route::post('/curso/participar/{id}',[Xcontroller::class,'join'])->middleware('aluno');

Route::delete('/curso/sair/{id}',[Xcontroller::class,'leave'])->middleware('aluno');

Route::patch('/usuario/atualizar/media/{id}',[Xcontroller::class,'updatemedia']);
Route::get('/usuario/atualizar/media/{id}',[Xcontroller::class,'media']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
