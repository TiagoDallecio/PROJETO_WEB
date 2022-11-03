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

/*Alunos*/
Route::get('/alunos/matricula',[Xcontroller::class,'matriculaA']);
Route::post('/alunos/matricula',[Xcontroller::class,'astore']);
