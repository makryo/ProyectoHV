<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/', 'HomeController@index');

Auth::routes();

Route::resource('/home', 'HomeController');

Route::get('/logout', 'LogoutController@Logout');
Route::resource('/cliente', 'ClientController');
Route::resource('/empleado', 'EmployeeController');
Route::resource('/habitacion', 'RoomController');
Route::resource('/servicios', 'ServiceController');
Route::resource('/Restaurante', 'MenuRestaurantController');
Route::resource('/reservacion', 'ReservaController');
Route::name('print')->get('/imprimir', 'GeneradorController@imprimir');
