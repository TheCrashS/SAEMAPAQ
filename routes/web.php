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

Route::get('/cobro/pagar/{cobro}','CobroController@pagar')->name('cobro.pagar');
Route::get('/cobro/pdf/{cobro}','CobroController@pdf')->name('cobro.pdf');
//Route::post('/cobro/update/{cobro}','CobroController@update')->name('cobro.update');
Route::resource('cobro', 'CobroController')->middleware('cobro');
//Route::post('/cobro/update/{cobro}','CobroController@update')->name('cobro.update');

//rutas generadas para la autenticación
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::view('/', 'auth.login');
