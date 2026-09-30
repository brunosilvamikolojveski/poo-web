<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories', [CategoryController::class, 'show']);
Route::put('categories', [CategoryController::class, 'update']);
Route::delete('categories', [CategoryController::class, 'destroy']);
*/

/* Route::group([
        'prefix' => 'categories',
],  function () {
        Route::get('', [CategoryController::class, 'index']);
        Route::post('', [CategoryController::class, 'store']);


    Route::group([
        'prefix' => '/{category}',
],  function () {
        Route::get('', [CategoryController::class, 'show']);
        Route::put('', [CategoryController::class, 'update']);
        Route::delete('', [CategoryController::class, 'destroy']);
    });

}); */
// Registrar rota de login
Route::post('auth/login', [AuthController::class, 'login']);
// Mover rotas da aplicação (CRUD) para um grupo protegido.
Route::group([
    'middleware' => [
        'auth:sanctum',
    ]
], function () {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('orders', OrderController::class);
    Route::apiResource('reviews', ReviewController::class);
});



Route::get('/produtos', function () {
    return response()->json(['message' => 'Listar produtos']);
});

Route::post('/produtos', function () {
    return response()->json(['message' => 'Criar produto'], 201);
});

Route::put('/produtos/{id}', function ($id) {
    return response()->json(['message' => 'Atualizar produto']);
});

Route::delete('/produtos/{id}', function ($id) {
    return response()->json(['message' => 'Remover produto']);
});
