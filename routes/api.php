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
Route::get('/sattelites/all_satellites', [\App\Http\Controllers\API\ApiResponseController::class,'getAllSatellites']);
Route::get('/categories/all_categories', [\App\Http\Controllers\API\ApiResponseController::class,'getAllCategories']);
Route::get('/all_status', [\App\Http\Controllers\API\ApiResponseController::class,'getAllStatus']);





