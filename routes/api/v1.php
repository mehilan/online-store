<?php

use App\Http\Controllers\Api\V1\Products\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum')->name('auth.me');


Route::group([
    'prefix' => 'v1'
], function(){
    Route::prefix('products')->get('/products', [IndexController::class])->name('show');
});

// Route::prefix('v1')->group(function(){


//     Route::get('/example', function (Request $request) {
//         return response()->json([
//             'data' => 'array,'
//         ]);
//     });
// });
