<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
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
    


    Route::prefix('/auth')->group(function () {
        Route::post      ('/register',      [AuthController::class, 'register'  ]    );
        Route::post      ('/login',         [AuthController::class, 'login'     ]    );

        Route::group(['middleware' => ['auth:sanctum']], function () {
            Route::post      ('/logout',      [AuthController::class, 'logout'  ]    );
        });

        Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
            return $request->user();
        });    
    });

    Route::prefix('/projects')->group(function () {

        //Public
        Route::get   ('/',               [ProjectController::class, 'index'   ]    );
        Route::get   ('/{id}',           [ProjectController::class, 'show'    ]    );
        Route::get   ('/{id}/languages', [ProjectController::class, 'showLang']    );
        Route::get   ('/{id}/plattforms',[ProjectController::class, 'showPlat']    );
        Route::get   ('/{id}/people',    [ProjectController::class, 'showPeop']    );
        Route::get   ('/search/{q}',     [ProjectController::class, 'search'  ]    );
        //Route::get   ('/length',         [ProjectController::class, 'getLen'  ]    );

        //Private
        Route::group(['middleware' => ['auth:sanctum']], function () {
            Route::post  ('/',              [ProjectController::class, 'store'  ]    );
            Route::put   ('/{id}',          [ProjectController::class, 'update' ]    );
            Route::patch ('/{id}',          [ProjectController::class, 'update' ]    );
            Route::delete('/{id}',          [ProjectController::class, 'destroy']    );
        });
    });

    Route::prefix('/people')->group(function () {

        //Public
        Route::get   ('/',              [PersonController::class, 'index'  ]    );
        Route::get   ('/{id}',          [PersonController::class, 'show'   ]    );
        Route::get   ('search/{q}',     [PersonController::class, 'search' ]    );

        //Private
        Route::group(['middleware' => ['auth:sanctum']], function () {
            Route::post  ('/',              [PersonController::class, 'store'  ]    );
            Route::put   ('/{id}',          [PersonController::class, 'update' ]    );
            Route::patch ('/{id}',          [PersonController::class, 'update' ]    );
            Route::delete('/{id}',          [PersonController::class, 'destroy']    );
        });
    });
});





/*

Route::name('/api')->group(function () {
    Route::name('/v1')->group(function () {
        Route::get('/people', function () {
        })->name('users');
    });
});
*/