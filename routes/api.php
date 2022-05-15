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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::prefix('v1')->namespace('Api\version1')->group(function () {
    Route::get('/article', [\App\Http\Controllers\Api\version1\ArticleController::class, 'index']);
    Route::get('/article/{article}', [\App\Http\Controllers\Api\version1\ArticleController::class, 'show']);
    Route::post('/article', [\App\Http\Controllers\Api\version1\ArticleController::class, 'store']);
});
Route::get('/post', [\App\Http\Controllers\Api\PostController::class, 'index']);
Route::post('/post', [\App\Http\Controllers\Api\PostController::class, 'store']);
