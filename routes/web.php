<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Como lo muestra en el tutorial
//Route::get('/Empleados','EmpleadosController@index');
//Route::get('/Empleados','EmpleadosController@create');

// Como se hace en laravel 8 : 
// https://stackoverflow.com/questions/63807930/target-class-controller-does-not-exist-laravel-8
//Route::get('/Empleados','App\Http\Controllers\EmpleadosController@index');
//Route::get('/Empleados/create','App\Http\Controllers\EmpleadosController@create');

Route::resource('/Empleados','App\Http\Controllers\EmpleadosController');