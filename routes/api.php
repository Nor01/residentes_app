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
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['role:residente']], function () {
    //rutas accesibles solo para residentes
    Route::post('/panico', function(){return 'El residente ha pulsado el boton de panico!';});
});

//Protected Methods
Route::group(['middleware'=>['auth:sanctum']], function () {
    //rutas accesibles solo para admins #pending...
    Route::get('/residentes', function(){return 'Listado de residentes';});

    Route::post('/logout', [AuthController::class, 'logout']);
});



