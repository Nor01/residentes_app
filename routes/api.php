<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComunicadoController;
use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\ReservacionController;
use App\Http\Controllers\TipoVisitaController;
use App\Http\Controllers\VisitaEventualController;
use App\Http\Controllers\VisitaFrecuenteController;

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

Route::get('/users', [UserController::class,'index']);
Route::get('/users/{id}', [UserController::class,'show']);
Route::get('/users/search/{name}', [UserController::class, 'search']);

Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get("/comunicado",[ComunicadoController::class,'index']);
Route::get('/comunicado/search/{fecha}', [ComunicadoController::class, 'search']);

Route::get("/incidente",[IncidenteController::class,'index']);
Route::get("/incidente/search/{fecha}",[IncidenteController::class,'searchFecha']);
Route::get("/incidente/search/{lugar}",[IncidenteController::class,'searchLugar']);


Route::get("/encuesta",[EncuestaController::class,'index']);
Route::get('/encuesta/search/{titulo}', [EncuestaController::class, 'search']);

Route::get("/reservacion",[ReservacionController::class,'index']);
Route::get('/reservacion/search/{titulo}', [ReservacionController::class, 'search']);

Route::post('/users',[UserController::class,'store']);
Route::put('/users/{id}', [UserController::class,'update']);
Route::delete('/users/{id}', [UserController::class,'destroy']);

Route::post("/comunicado",[ComunicadoController::class,'store']);
Route::delete("/comunicado/{id}",[ComunicadoController::class,'destroy']);

Route::post("/incidente",[IncidenteController::class,'store']);
Route::delete("/incidente/{id}",[IncidenteController::class,'destroy']);

Route::post('/encuesta',[EncuestaController::class,'store']);
Route::delete('/encuesta/{id}', [EncuestaController::class,'destroy']);

Route::post('/reservacion',[ReservacionController::class,'store']);
Route::delete('/reservacion/{id}', [ReservacionController::class,'destroy']);

Route::get("/tipo-visita",[TipoVisitaController::class,'index']);
Route::post('/tipo-visita', [TipoVisitaController::class, 'store']);

Route::get("/visita-frecuente",[VisitaFrecuenteController::class,'index']);
Route::post('/visita-frecuente', [VisitaFrecuenteController::class, 'store']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/logout',[AuthController::class,'logout']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
