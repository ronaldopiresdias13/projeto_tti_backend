<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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

Route::Get("service",[ServiceController::class, "index"]);
Route::post("service ",[ServiceController::class, "store"]);
Route::get("service/{service}",[ServiceController::class, "show"]);
Route::put("service/{service}",[ServiceController::class, "update"]);
Route::delete("service/{service}",[ServiceController::class, "destroy"]);

Route::Get("category",[CategoryController::class, "index"]);
Route::post("category ",[CategoryController::class, "store"]);
Route::get("category/{category}",[CategoryController::class, "show"]);
Route::put("category/{category}",[CategoryController::class, "update"]);
Route::delete("category/{category}",[CategoryController::class, "destroy"]);

Route::Get("user",[UserController::class, "index"]);
Route::post("user",[UserController::class, "store"]);
Route::get("user/{user}",[UserController::class, "show"]);
Route::put("user/{user}",[UserController::class, "update"]);
Route::delete("user/{user}",[UserController::class, "destroy"]);
Route::post("users",[UserController::class, "verifications"]);