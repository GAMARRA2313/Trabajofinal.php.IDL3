<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CreditoTipoController;
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


//LISTAR TODOS
Route::get('/tipos', [CreditoTipoController::class, 'getAll']);

//LISTAR ESPECIFICAMENTE
Route::get('/tipos/{id}', [CreditoTipoController::class, 'getItem']);

//INSERTAR
Route::post('/tipos', [CreditoTipoController::class, 'store']);

//ACTUALIZAR
Route::put('/tipos/{id}', [CreditoTipoController::class, 'updatePut']);

//ACTUALIZAR
Route::patch('/tipos/{id}', [CreditoTipoController::class, 'updatePatch']);

//BORRAR
Route::delete('/sectores/{id}', [CreditoTipoController::class, 'delete']);
