<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\UsuariosController;

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


Route::get('layout-main',[AccessController::class,'main'])->name('main');

/*Tipo usuario */
Route::get('reporte-tipo-usuario',[UserTypeController::class,'reportetipousuario'])->name('reportetipousuario');
Route::POST('guardartipousuario',[UserTypeController::class,'guardartipousuario'])->name('guardartipousuario');
Route::get('borratipouser/{id_tipousu}',[UserTypeController::class,'borratipouser'])->name('borratipouser');


/*Tipo usuario */
Route::POST('guardarusucambiosario',[UsuariosController::class,'guardarusucambiosario'])->name('guardarusucambiosario');
Route::POST('guardarusuario',[UsuariosController::class,'guardarusuario'])->name('guardarusuario');
Route::get('/',[UsuariosController::class,'reporteusuarios'])->name('reporteusuarios');
Route::get('borrauser/{id_usu}',[UsuariosController::class,'borrauser'])->name('borrauser');
Route::get('modificaruser/{id_usu}',[UsuariosController::class,'modificaruser'])->name('modificaruser');
Route::get('Modificar-usuario',[UsuariosController::class,'Modificarusuario'])->name('Modificarusuario');
