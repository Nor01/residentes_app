<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

//public methods
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Protected Methods
Route::group(['middleware'=>['auth:sanctum']], function () {
    
    Route::get('/residentes', function(){return 'Listado de residentes';});

    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Route::post('/residentes/{id_residente}', [ResidenteController::class, 'create']);
    // Route::put('/residentes/{id_residente}', [ResidenteController::class, 'update']);
    // Route::delete('/residentes/{id_residente}', [ResidenteController::class, 'delete']);


});



