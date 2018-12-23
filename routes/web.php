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
    return view('welcome');
});
Route::resource('cliente', 'ClienteController');

Route::get('adminplan', function(){
    return view('adminplan');
});
Route::get('temas', function(){
    return view('temas');
});

Route::get('Inicio_ITESCAM', function(){
    return view('inicio_ITESCAM');
});


//Route::group(['prefix'=> 'admin'], function(){
      Route::resource('users', 'UsersController'); //el segundo es el nombre del controlador
  //});