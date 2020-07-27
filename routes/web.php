<?php

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




//rutas de nuestros controladores
Route::resource('user', 'UserController');
Route::resource('contribuyente', 'ContribuyenteController');
Route::resource('medidor', 'MedidorController');
Route::resource('lecturacion', 'LecturacionController');
Route::resource('user', 'UserController');
Route::resource('parametro','ParametroController');

Route::resource('cobro', 'CobroController');
//Route::post('cobro/{id}', 'CobroController@pdf')->name('pdf');

//rutas generadas para la autenticación
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::view('/', 'auth.login');
