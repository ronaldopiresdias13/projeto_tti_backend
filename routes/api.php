<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypesController;


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
