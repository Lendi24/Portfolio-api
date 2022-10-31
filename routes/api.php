<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Project;

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
    Route::get('/projects', function () {
        return Project::all();
    });

    Route::post('/projects', function () {
        return Project::create([
            'title'         => 'testtitle',
            'description'   => 'desc',
        ]);
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