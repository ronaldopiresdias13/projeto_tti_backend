<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypesController;

use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;

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

Route::get('/type', [TypesController::class, 'index']);
Route::post('/type', [TypesController::class, 'store']);
Route::get('/type/{id}', [TypesController::class, 'show']);
Route::put('/type/{id}', [TypesController::class, 'update']);
Route::delete('/type/{id}', [TypesController::class, 'destroy']);

Route::get("service",[ServiceController::class, "index"]);
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
Route::put("user/{user}",[UserController::class, "updates"]);
Route::delete("user/{user}",[UserController::class, "destroy"]);
Route::post("users",[UserController::class, "verifications"]);

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

Route::get("People", [PeopleController::class,"index"]);
Route::post("People", [PeopleController::class,"store"]);
Route::get("People/{id}", [PeopleController::class,"show"]);
Route::put("People/{id}", [PeopleController::class,"update"]);
Route::delete("People/{id}", [PeopleController::class,"destroy"]);
