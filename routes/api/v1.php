<?php


use App\Http\Controllers\Api\V1\Products\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum')->name('auth.me');


Route::group([
    'prefix' => 'v1/products'
], function(){
    Route::get('/', [IndexController::class, '__invoke'])->name('api:v1:products:index');
    Route::get('{key}', App\Http\Controllers\Api\V1\Products\ShowController::class)->name('api:v1:products:show');
});


