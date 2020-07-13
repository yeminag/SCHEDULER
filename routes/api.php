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
Route::apiResource("aula","aulaController");
Route::apiResource("carrera","carreraController");
Route::apiResource("contrato","contratoController");
Route::apiResource("disponibilidadHora","disponibilidadHoraController");
Route::apiResource("malla","mallaController");
Route::apiResource("materia","materiaController");
Route::apiResource("materia_malla","materia_mallaController");
Route::apiResource("nivel","nivelController");
Route::apiResource("periodo","periodoController");