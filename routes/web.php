<?php

use App\Http\Controllers\Datos_Responsables_UserController;
use App\Http\Controllers\Proyecto1Controller;
use App\Http\Controllers\ResumenM_I_P_EPostGrado_InstitutoController;
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

Route::resource('proyecto', Proyecto1Controller::class);
Route::resource('ResponsablePro', Datos_Responsables_UserController::class);
Route::resource('ResumenMatriculaPostGrado', ResumenM_I_P_EPostGrado_InstitutoController::class);




Route::get('/', function () {
    return view('welcome');
});
