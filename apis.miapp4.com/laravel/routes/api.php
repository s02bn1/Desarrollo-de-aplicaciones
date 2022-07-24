<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\v1\CategoriasController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//funciona
Route::get('/v1/categorias', [CategoriasController::class, 'getAll']);

//funciona
Route::get('/v1/categorias/{id}', [CategoriasController::class, 'getItem']);

//funciona
Route::post('/v1/categorias', [CategoriasController::class, 'store']);

//funciona
Route::put('/v1/categorias/{id}', [CategoriasController::class, 'updatePut']);

//fuciona
Route::patch('/v1/categorias/{id}', [CategoriasController::class, 'updatePatch']);

//funciona
Route::delete('/v1/categorias/{id}', [CategoriasController::class, 'delete']);
