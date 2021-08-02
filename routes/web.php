<?php

use App\Http\Controllers\Datos_Responsables_UserController;
use App\Http\Controllers\login_poa;
use App\Http\Controllers\ObjetivoGeneralProyecto;
use App\Http\Controllers\Proyecto1Controller;
use App\Http\Controllers\ResumenM_I_P_EPostGrado_InstitutoController;
use App\Http\Controllers\ResumenM_I_P_EPreGrado_InstitutoController;
use Illuminate\Support\Facades\Auth;
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

Route::resource('proyecto', Proyecto1Controller::class)->middleware('auth');
Route::resource('ResponsablePro', Datos_Responsables_UserController::class);
Route::resource('ResumenMatriculaPostGrado', ResumenM_I_P_EPostGrado_InstitutoController::class);
Route::resource('ResumenMatriculaPreGrado', ResumenM_I_P_EPreGrado_InstitutoController::class);
Route::resource('ObjetivoGeneral', ObjetivoGeneralProyecto::class);

Route::resource('poa', login_poa::class)->middleware('guest');
Route::post('poa1', 'App\Http\Controllers\login_poa@prueba')->name('logout');

Route::get('/reporte_xlsx', [Proyecto1Controller::class, 'export'])->name('export.x');

Route::get('/', function () {
    return view('welcome');
});
