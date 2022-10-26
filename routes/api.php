<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get("Citys", [CityController::class,"index"]);
Route::post("city", [CityController::class,"store"]);
Route::get("city/{id}", [CityController::class,"show"]);
Route::put("city/{id}", [CityController::class,"update"]);
Route::delete("city/{id}", [CityController::class,"destroy"]);

Route::get("States", [StateController::class,"index"]);
Route::post("state", [StateController::class,"store"]);
Route::get("state/{id}", [StateController::class,"show"]);
Route::put("state/{id}", [StateController::class,"update"]);
Route::delete("state/{id}", [StateController::class,"destroy"]);
