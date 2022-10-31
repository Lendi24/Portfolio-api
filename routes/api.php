<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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
    Route::prefix('/projects')->group(function () {
        //Public
        Route::get  ('/',       [ProjectController::class, 'index']);
        Route::get  ('/{id}',   [ProjectController::class, 'show']);
    
        //Private
        Route::post ('/',       [ProjectController::class, 'store']);
    });

    Route::prefix('/people')->group(function () {
        //Public
        Route::get  ('/',       [PersonController::class, 'index']);
        Route::get  ('/{id}',   [PersonController::class, 'show']);
    
        //Private
        Route::post ('/',       [PersonController::class, 'store']);
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