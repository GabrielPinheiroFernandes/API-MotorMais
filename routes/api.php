<?php

use App\Http\Controllers\v1\BrandCarController;
use App\Http\Controllers\v1\CategoryController;
use App\Http\Controllers\v1\ManufactoryController;
use App\Http\Controllers\v1\ModelCarController;
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


Route::prefix('v1')->group(function () {

    // Users
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/{user}', [UserController::class, 'show']);
    });

    // Brands and Cars
    Route::prefix('brands')->group(function () {
        // Rotas para as marcas de carros
        Route::get('/', [BrandCarController::class, 'index']);
        Route::get('/{brand}', [BrandCarController::class, 'show']);
        Route::post('/', [BrandCarController::class, 'store']);
        Route::delete('/{brand}', [BrandCarController::class, 'destroy']);
        Route::put('/{brand}', [BrandCarController::class, 'update']);

        // Rotas para os modelos de carros
        Route::prefix('cars/{brand}/models')->group(function () {
            Route::get('/', [ModelCarController::class, 'index']); // Lista todos os modelos de uma marca
            Route::get('/{model}', [ModelCarController::class, 'show']); // Mostra um modelo específico de uma marca
            Route::post('/', [ModelCarController::class, 'store']);
            Route::delete('/{model}', [ModelCarController::class, 'destroy']);
            Route::put('/{model}', [ModelCarController::class, 'update']);
        });
    });

    // Categories
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/{category}', [CategoryController::class, 'show']);
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);
    Route::put('/categories/{category}', [CategoryController::class, 'update']);
});
