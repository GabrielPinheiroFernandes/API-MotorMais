<?php

use App\Http\Controllers\v1\BrandCarController;
use App\Http\Controllers\v1\CategoryController;
use App\Http\Controllers\v1\ManufactoryController;
use App\Http\Controllers\v1\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get("/users", function (){
//     return User::all();
// });


Route::prefix("v1")->group(function () {


    Route::prefix("users")->group(function () {
        //Users
        Route::get('/', [UserController::class, 'index']);
        Route::get('/{user}', [UserController::class, 'show']);
        // Route::Post('/', [UserController::class,'']);

    });

    //manufactory
    Route::prefix('brands')->group(function () {
        Route::prefix('cars')->group(function () {
            Route::get('/', [BrandCarController::class, 'index']);
            Route::get('/{brand}', [BrandCarController::class, 'show']);
            Route::Post('/', [BrandCarController::class, 'store']);
            Route::delete('/{brand}', [BrandCarController::class, 'destroy']);
            Route::put('/{brand}', [BrandCarController::class, 'update']);
        });
        
    });


    //Category
    Route::get('/Categorys', [CategoryController::class, 'index']);
    Route::get('/Categorys/{Category}', [CategoryController::class, 'show']);
    Route::Post('/Categorys', [CategoryController::class, 'store']);
    Route::delete('/Categorys/{Category}', [CategoryController::class, 'destroy']);
    Route::put('/Categorys/{Category}', [CategoryController::class, 'update']);

});