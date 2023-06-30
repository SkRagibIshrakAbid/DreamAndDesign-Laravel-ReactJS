<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
use App\Http\Controllers\LoginApiController;


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

Route::post('/decorator/postadd', [apiController::class,'decoratorPostAddCheck'])->middleware('apiValidation');
Route::post('/decorator/accept', [apiController::class,'accept'])->middleware('apiValidation');
Route::post('/decorator/reject', [apiController::class,'reject'])->middleware('apiValidation');
Route::post('/decorator/edit', [apiController::class,'edit'])->middleware('apiValidation');
Route::post('/decorator/editpost', [apiController::class,'editpost'])->middleware('apiValidation');
Route::post('/decorator/deletepost', [apiController::class,'deletepost'])->middleware('apiValidation');
Route::post('/decorator/login', [LoginApiController::class,'login']);
Route::post('/decorator/signup', [LoginApiController::class,'signup']);
Route::post('/decorator/logout', [LoginApiController::class,'logout']);
Route::get('/decorator/viewadd', [apiController::class,'viewadd'])->middleware('apiValidation');
Route::post('/decorator/vieworder', [apiController::class,'vieworder'])->middleware('apiValidation');
Route::get('/decorator/viewwantedpost', [apiController::class,'viewwantedpost'])->middleware('apiValidation');
