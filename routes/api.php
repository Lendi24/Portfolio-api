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

Route::prefix('/v1')->group(function () {
    Route::get('/people', function () {
        return 'ref';
    });

    Route::get('/projects', function () {
        return 'ref';
    });
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




/*

Route::name('/api')->group(function () {
    Route::name('/v1')->group(function () {
        Route::get('/people', function () {
        })->name('users');
    });
});
*/