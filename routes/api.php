<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/** Ruta de ejemplo para traer todos los temas de la tabla temas */
Route::post('/temas', function(Request $request){
    $temas = App\Tema::all();
    return $temas->toJson();
});

Route::post('/config', function(Request $request){
    $config = App\Configuracion::findOrFail(1);
    return $config->toJson();
});
