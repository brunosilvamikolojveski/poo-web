<?php

use App\Http\Controllers\CategoryController;
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

Route::apiResource('categories', CategoryController::class);
